
<?php

/*
  Este arquivo é parte do OpenMvc PHP Framework

  OpenMvc PHP Framework é um software livre; você pode redistribuí-lo e/ou
  modificá-lo dentro dos termos da Licença Pública Geral GNU como
  publicada pela Fundação do Software Livre (FSF); na versão 2 da
  Licença, ou (na sua opinião) qualquer versão.

  Este programa é distribuído na esperança de que possa ser  útil,
  mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
  MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
  Licença Pública Geral GNU para maiores detalhes.

  Você deve ter recebido uma cópia da Licença Pública Geral GNU
  junto com este programa, se não, escreva para a Fundação do Software
  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
?>
<?php

/**
 *     
 *
 * Mapper::connect(":controller/:action/:s/pagina/:d/",
 *
 *  	array("controller" => "camilo", "action" => "acao", "params" => array("pagina", "seila")
 * 			  
 * )
 *
 *
 * @Author Thiago Valentoni Guelfi	
 */
//require_once("wp-load.php");

class Routes {

    var $mapper;
    var $routes;
    var $count;

    public function Routes($map) {
        $this->setMapper($map);
        $this->setRoutes();
    }

    private function setCount() {
        try {
            $this->count = count($this->routes);
        } catch (Exception $e) {
            throw new Exception("Ocorreu um erro ao separar as rotas");
        }
    }

    public function setRoutes() {
        $routes = explode("/", $this->mapper->url);
        Mapper::clearPath($routes);
        $this->routes = $routes;
        $this->setCount();
    }

    public function setMapper($map) {
        $this->mapper = $map;
    }

    public function match($url) {

        $result[] = array();
        $parts = explode("/", $url);
        $route = "";

        $temp_routes = array_reverse($this->routes);


        if ($this->count == count($parts) || in_array("*", $temp_routes) || strpos($url, "?"))
            foreach ($parts as $part) {
                $temp_route = array_pop($temp_routes);
                if (!empty($temp_route))
                    $route = $temp_route;
                if ($part == $route) {
                    array_push($result, true);
                } elseif (is_string($part) && $route == ":s") {
                    array_push($result, true);
                } elseif (is_numeric($part) && $route == ':d') {
                    array_push($result, true);
                } elseif (is_string($part) && $route == ":controller") {
                    array_push($result, true);
                } elseif (!is_numeric($part) && $route == ":action") {
                    array_push($result, true);
                } elseif ($route == "*") {
                    array_push($result, true);
                }
            }


        if ((array_sum($result) == $this->count) ||
                (in_array("*", $this->routes) && count($parts) == array_sum($result))) {
            return $this->mapper;
        }
        return false;
    }

}

class Mapper {

    var $url;
    var $rules;
    var $pattern = array(":controller", ":action", ":d", ":s", "*");
    static $routes = array();
    var $options;
    var $iterator;
    var $controller;
    var $action;
    var $params;
    var $controller_params = array();

    function Mapper($url, $options) {
        $this->url = $url;
        $this->options = $options;
        $this->iterator = 0;
    }

    public static function getRoutes() {
        return self::$routes;
    }

    public static function connect($url, $options = array()) {
        $map = new Mapper($url, $options);

        $parts = explode("/", $url);
        //$map = Mapper::getInstance();

        if (isset($map->options["params"]))
            $map->params = array_values(array_reverse($map->options["params"]));
        else
            $map->params = array();

        foreach ($parts as $part) {
            if (in_array($part, $map->pattern))
                $map->handlePattern($part);
            $map->iterator++;
        }
        if (isset($options["controller"]))
            $map->controller = Mvc::createController($options["controller"]);
        if (isset($options["action"]))
            $map->action = $options["action"];

        $route = new Routes($map);

        array_push(self::$routes, $route);

        return $route;
    }

    private function handlePattern($pattern) {

        switch ($pattern) {
            case ":controller":
                if (!isset($this->options["controller"]))
                    $this->controller = $this->iterator;
                break;
            case ":action":
                if (!isset($this->optiongs["action"]))
                    $this->action = $this->iterator;
                break;
            case ":d" :
            case ":s" :
            case "*" :
                $this->handleParams($pattern);
                break;
            default:
        }
    }

    private function handleParams($pattern) {

        $i = $this->iterator;
        try {
            $param_name = array_pop($this->params);
            $this->controller_params[$param_name] = $this->iterator;
        } catch (Exception $e) {
            print "Ocorreu algum erro inexperado";
        }
    }

    private static function route($match) {
        $return = false;
        foreach (Mapper::getRoutes() as $id => $route)
            if ($route->match($match)) {
                $return = $route;
                break;
            }
        return $return;
    }

    public static function cleaner($string) {
        $start = strpos($string, 'http://');

        if ($start !== false) {
            $end = strpos($string, "&", $start);

            if ($end === false) {
                $end = strlen($string);
            }

            $link = substr($string, $start, $end - $start);

            $retorno = substr_replace($string, "", $start, $end - $start);
        } else {
            $retorno = $string;
        }


        if ($retorno[strlen($retorno) - 1] == "/") {
            $retorno = substr($retorno, 0, strlen($retorno) - 1);
        }
        return $retorno;
    }

    /**
     *
     * @param array $url
     */
    public static function dispatch($route) {

        $route = self::cleaner($route);


        $parts = explode("/", $route);

        self::clearPath($parts);


        if (!($route = self::route($route)))
            return false;


        if (is_numeric($route->mapper->controller))
            $route->mapper->controller = Mvc::createController($parts[$route->mapper->controller]);


        if (is_numeric($route->mapper->action))
            $route->mapper->action = $parts[$route->mapper->action];


        $controller = $route->mapper->controller;

        if (empty($controller))
            return false;

        $action = $route->mapper->action;


        if (in_array("*", $route->routes)) {
            $params = self::getLastParams($parts, $route->mapper->controller_params);
            $controller->addParams($params);
            $params = array_pop(array_values($params));
        } else {
            $params = self::getParams($parts, $route->mapper->controller_params);
            $controller->addParams($params);
            $params = array_values($params);
        }


        if (!empty($params)) {
            if (!is_array($params))
                $params = array($params);
            call_user_func_array(array($controller, $action), $params);
        } else
            call_user_func(array($controller, $action));
    }

    private function getLastParams($parts, $slices) {

        $return = array();
        foreach ($slices as $name => $slice) {
            $array = array_slice($parts, $slice);
            $return = array($name => self::getParams($array, array_keys($array)));
        }

        return $return;
    }

    private static function getParams($parts, $params) {
        $param_name = array();

        $temp_values = array_reverse(array_values($params));
        $temp_keys = array_reverse(array_keys($params));
        $params = array_reverse($params);
        foreach ($params as $param) {
            $param_name[array_pop($temp_keys)] = $parts[array_pop($params)];
        }


        return $param_name;
    }

    public static function clearPath(&$path) {
        foreach ($path as $id => $valor)
            if (empty($valor) || $valor = '')
                unset($path[$id]);
    }

    /**
     * Junta os parametros para serem passados na URL
     * @param Array $params
     * @return String
     */
    private function bindParams($params) {
        $bind = '';
        foreach ($params as $param)
            $bind = $bind . "/" . $param;
        return $bind;
    }

    /**
     * Recebe uma url com controller e action
     * retorna um arrray com o nome do controller e action
     * @param String $url
     * @return Array
     */
    private function getControllerActionFromUrl($url) {
        list( $controller, $action ) = explode("/", $url);
        return array($controller, $action);
    }

}
