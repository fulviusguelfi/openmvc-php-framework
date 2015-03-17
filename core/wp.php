
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

define("BASE_PLUGIN", '/index.php');

$mvc_actions = array();
$mvc_filters = array();

class Mvc {

    public static $controller = null;
    public static $action;
    public static $param = null;

    public static function inicializar() {
        add_action('admin_menu', array('Mvc', 'menu_padrao'));
        Mvc::add_controller();
        Mvc::add_action();
        Mvc::add_filter();
    }

    public static function getDipatcher() {
        return self::$controller;
    }

    public static function menu_padrao() {
        global $config;
        add_menu_page($config['cliente'], $config['cliente'], "gestor_conteudo", BASE_PLUGIN, false, $config['media'] . '/img/icones/home.png', 3);
        Mvc::menu_customizado();
        Mvc::menu_configuracao();
    }

    public static function menu_configuracao() {
        global $config;
        $menus = $config['menu'];
        foreach ($menus as $menu) {
            add_submenu_page($menu->parent, $menu->label, $menu->label, $menu->capability, BASE_PLUGIN . '/' . $menu->route, 'routes');
        }
    }

    public static function add_action() {
        global $mvc_actions;
        $actions_path = "actions";
        $dirs = dir($actions_path);
        while (false !== ($item = $dirs->read())) {
            list($name, $ext) = explode(".", $item);
            if ($ext != "php") {
                continue;
            }
            require_once("{$actions_path}/{$item}");

            $actionClass = ucfirst($name);
            $actionInstance = new $actionClass($name);

            if ($actionInstance instanceof Action) {
                $mvc_actions[$name] = $actionInstance;
                add_action($name, array(&$mvc_actions[$name], 'exec'), $actionInstance->getPriority(), $actionInstance->getAcceptedArgs()
                );
            }
        }
        $dirs->close();
    }

    public static function add_filter() {
        global $mvc_filters;
        $filters_path = "filters";
        $dirs = dir($filters_path);
        while (false !== ($item = $dirs->read())) {
            list($name, $ext) = explode(".", $item);
            if ($ext != "php") {
                continue;
            }
            require_once("{$filters_path}/{$item}");
            $nomeFitro = ucfirst($name);
            $filtro = new $nomeFitro($name);
            if ($filtro instanceof Filter) {
                $mvc_filters[$name] = $filtro;
                add_filter($name, array(&$mvc_filters[$name], 'exec'), $filtro->getPriority(), $filtro->getAcceptedArgs());
            }
        }
        $dirs->close();
    }

    public static function set_param($param) {
        self::$param = $param;
    }

    public static function get_param() {
        return self::$param;
    }

    public static function add_controller($page = NULL) {
        if (!isset($_GET["page"]))
            return false;
        $temp_page = explode("/", $_GET["page"]);

        if (isset($temp_page[1]) && $temp_page[0] != "mvc")
            return false;
        if (count($temp_page) >= 4 && isset($temp_page[3])) {
            $split = explode($temp_page[3], $_GET["page"]);
            $new_page = explode("/", $split[0]);
            if (!empty($split[1]) && count($split[1]) > 0) {
                $param = explode("/", $split[1]);
                unset($param[0]);
                self::set_param($param);
            }
            if (!empty($temp_page[3]))
                $temp_action = $temp_page[3];
            if (isset($new_page[3]))
                unset($new_page[3]);
            $_GET['page'] = join("/", $new_page);
        }
        if ($page == NULL && isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        $route = str_replace(BASE_PLUGIN . '/', "", $page);
        if (!empty($route)) {
            $value = explode("-", $route);
            if (!isset($value[1])) {
                $value[1] = "index";
                $route = $route . "-" . "index";
            }
            if (isset($value[1])) {

                list( $name, $action ) = explode("-", $route);
                if (isset($temp_action))
                    $action = $temp_action;

                if (self::$controller = self::createController($name, $action))
                    return true;
                else
                    return false;
            }
            else {
                return false;
            }
        }
    }

    public static function createController($name, $action = null) {
        if (!file_exists("controllers/{$name}.php"))
            return false;
        require_once("controllers/{$name}.php");
        $controller = ucfirst($name);

        return new $controller($name, $action);
    }

    public static function getController() {
        $controller = self::getDipatcher();
        if (empty($controller))
            $retorno = "";
        else
            $retorno = self::getDipatcher()->getName();
        return $retorno;
    }

    public static function getAction() {
        $controller = self::getDipatcher();
        if (empty($controller))
            $retorno = "";
        else
            $retorno = self::getDipatcher()->getAction();
        return $retorno;
    }

}

/**
  Executa o controller e action baseado no parametro page padrao do Wordpress
  Da seguinte forma: ?page=BASE_PLUGIN/controller-action
  Abre o controller cliente.php
  Instancia a classe Cliente
  Executa a funcao (action) index da instancia de Cliente
 */
function routes($page = null) {
    if (!empty($page)) {
        Mvc::add_controller($page);
    }
    $action = Mvc::getAction();

    $controller = Mvc::getDipatcher();

    $params = Mvc::get_param();

    if (empty($params))
        call_user_func(array($controller, $action));
    else
        call_user_func_array(array($controller, $action), $params);
}

if (function_exists('add_action')) {
    add_action('plugins_loaded', array("Mvc", 'inicializar'));
}

