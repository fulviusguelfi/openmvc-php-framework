
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

class Controller extends Loader {

    var $form;
    var $helpers;
    var $name;
    var $action;
    var $layout;
    var $params = array();

    public function __construct($name = null, $action = null) {
        $this->helpers = array();
        $this->name = $name;
        $this->action = $action;

        $this->init();
    }

    public function __destruct() {
        $this->destroy();
    }

    public function destroy() {
        
    }

    /*
     * Please Override Me :)
     */

    public function init() {
        
    }

    public function getName() {
        return $this->name;
    }

    public function getAction() {
        return $this->action;
    }

    /**
     * Adiciona um objeto no array parametros
     * @param mixed $data
     */
    public function addParams($data = array()) {

        $this->params = $data;


        if (!empty($_GET))
            $this->params = array_merge($this->params, $_GET);
    }

    /**
     * Este Método chama a view
     *  
     * @param String $name
     * @param Array $data
     * @params boolean $return Determina se o conteúdo da View deve ser retornado ou simplesmente direcionado à saída padrão (browser)
     */
    public function view($name, $data = array(), $return = false) {
        global $page_styles, $page_scripts;

        if (!empty($data))
            extract($data);

        $helpers = array();
        foreach ($this->helpers as $helper) {
            require_once("helpers/{$helper}.php");
            if (class_exists($klasse = ucfirst($helper))) {
                $helpers[$helper] = new $klasse();
            }
        }
        if (!empty($helpers))
            extract($helpers);

        ob_start();
        if (!empty($this->layout)) {
            ob_start();
            include "views/{$name}.php";
            $layout_content = ob_get_contents();
            ob_end_clean();
            include("views/layouts/{$this->layout}.php");
        } else {
            $viewPath = "views/{$name}.php";
            if (file_exists($viewPath)) {
                include($viewPath);
            }
        }

        $viewContents = ob_get_clean();

        if (true === $return)
            return $viewContents;
        else
            echo $viewContents;
    }

    public function form($name, $data = array()) {
        require_once("forms/{$name}.php");

        if (strpos($name, '/')) {
            $pieces = explode('/', $name);
            $pieces = array_map('ucfirst', $pieces);
            $form = join('_', $pieces);

            $pieces = explode('_', $form);
            $pieces = array_map('ucfirst', $pieces);
            $form = join('_', $pieces);
        } else {
            $form = ucfirst($name);
        }

        return new $form($data);
    }

    public function business($name, $data = array()) {
        $business = ucfirst($name) . "Business";
        if (!class_exists($business)) {
            require_once("business/{$name}/index.php");
        }

        $business = new $business($data);
        return $business->get($data);
    }

    /**
     * Compara a action com a ação atual
     * @param Sring $action
     */
    public function compareAction($action) {
        if ($this->getAction() == $action)
            return true;
        else
            return false;
    }

    /**
     * 	Redirecionamento basiado no framework cakePHP
     * 
     *     Como Usar:
     *     
     *        $url = array( "controller" => "nomedocontroller", "action" => "nomedaaction")
     *        
     *        $url = array("controller" => "nomedocontroller", "action" => "nomedaaction"), $params = array("param1","param2") 
     *        
     *        $url = "controller/action"
     *        
     *        $url = "action"   //executa o controller atual
     *        
     *        $url = "controller/action/param1/param2"
     *        
     *        $url = "controller/action" , $param = array("param1", "param2")
     *        
     * @Author Thiago Valentoni Guelfi
     * @Since 08/11/2010     
     * @param Mixed $url
     * @param Array $params
     */
    public function redirect($url, $params = array()) {
        $wp_url = '/';
        if (is_array($url)) {
            if (isset($url["controller"]))
                Mvc::add_controller($url["controller"]);
            if (!isset($url["action"]))
                $action = "index";
            else
                $action = $url["action"];
            $controller = Mvc::getDipatcher();
            $url = "{$controller->name}/{$action}";
            if (!empty($params)) {
                if ($this->hasArrayinArray($params)) {
                    call_user_func_array(array($controller, $action), $params);
                    die;
                }
                $params = $this->bindParams($params);
                $url = "{$url}{$params}";
                echo "<meta http-equiv='refresh' content='0;url={$url}' >";
                die;
            }
        } else {
            if (stristr($url, "http://"))
                $this->out_redirect($url);

            $split_url = explode("/", $url);
            if (count($split_url) == 1) {
                $controller = Mvc::getDipatcher()->getName();
                $action = $url;
                $url = "{$controller}/{$action}";
            }
        }
        if (!empty($params)) {
            $conAction = $this->getControllerActionFromUrl($url);
            list($controller, $action ) = $conAction;
            if ($this->hasArrayinArray($params)) {
                $controller = Mvc::createController($controller, $action);
                call_user_func_array(array($controller, $action), $params);
                die;
            }
            $param = $this->bindParams($params);
            $url = "{$controller}/{$action}{$param}";
        }
        echo "<meta http-equiv='refresh' content='0;url={$url}' >";
        die;
    }

    private function useSession() {
        if (!isset($_SESSION) || is_null($_SESSION)) {
            session_name('OpenMvc');
            session_start();
        }
    }

    /**
     * Armazera o canal pelo qual o usuário acessou o portal
     * @param stdClass $canal 
     */
    protected function setCanalNavegacao($canal) {
        $this->useSession();
        if (is_array($canal)) {
            settype($canal, 'object');
        }
        $_SESSION['canalNavegacao'] = $canal;
    }

    /**
     *
     * @return stdClass
     */
    protected function getCanalNavegacao() {
        $this->useSession();
        return isset($_SESSION['canalNavegacao']) ? $_SESSION['canalNavegacao'] : null;
    }

    protected function out_redirect($url) {
        echo "<meta http-equiv='refresh' content='0;url={$url}' >";
        die;
    }

    /**
     * Verifica se algum parametro é array
     * Esse método é usado para garantir que não seja passado um array 
     * como parametro na URL
     * @param Array $params
     * @return Boolean
     */
    private function hasArrayinArray($params) {
        foreach ($params as $param)
            if (is_array($param))
                return true;
        return false;
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

    /**
     * Adiciona scripts ou estilos CSS baseado em uma convenção de nomenclatura de diretórios
     * relativa ao controller/action executado. Estes estilos e/ou scripts devem ser adicionados
     * ao interceptar a ação 'admin_enqueue_scripts'. Isso é feito, em geral, na implementação do
     * médodo {@link Controller::init()}
     * 
     * Exemplo:
     * <code>
     * public function init() {
     * 	add_action('admin_enqueue_scripts', array($this, 'adicionarScripts'));
     * }
     * 
     * public function adicionarScripts()
     * {
     *  $this->addActionMedia('script', $this->action);
     * 	// OU $this->addActionScript();
     * 	
     * 	$this->addActionMedia('style', $this->action); 
     *  // OU $this->addActionStyle();
     * }
     * </code>
     * 
     * 
     * @param string $type Tipo de mídia (script|style) a ser adicionado via wp_enqueue_*
     * @param type $action Nome da action usada para determinar o arquivo carregado
     * @return void
     */
    protected function addActionMedia($type, $action = null) {
        $action = !empty($action) ? $action : $this->action;
        $controller = $this->name; // TODO: Adicionar suporte para carregar de outros controllers??
        $type = strtolower($type);

        $id = sprintf('%s_%s', $controller, $action);
        $source = '';
        $deps = array();

        $enqueueFunction = 'wp_enqueue_' . (string) $type;

        switch ($type) {
            case 'script':
                $path = sprintf('/media/js/%s/%s.js', $controller, $action);
                if (file_exists($path))
                    $source = sprintf('media/js/%s/%s.js', $controller, $action);
                $deps = $this->getActionScriptDependencies($action);
                break;

            case 'style':
                $path = sprintf('/media/css/%s/%s.css', $controller, $action);
                if (file_exists($path))
                    $source = sprintf('media/css/%s/%s.css', $controller, $action);
                $deps = $this->getActionStlyeDependencies($action);
                break;

            default:
                return; // Tipo não permitido. Lançar exception?
                break;
        }

        if (!empty($source)) {
            $enqueueFunction($id, $source, $deps);
        }
    }

    /**
     * Método facilitador para a utilização de {@link Controller::addActionMedia()}
     * @param string $action 
     */
    protected function addActionScript($action = null) {
        $this->addActionMedia('script', $action);
    }

    /**
     * Método facilitador para a utilização de {@link Controller::addActionMedia()}
     * @param string $action 
     */
    protected function addActionStyle($action = null) {
        $this->addActionMedia('style', $action);
    }

    /**
     * Obtém as dependências de um script de uma action. Deve ser sobrescrita pelos controllers
     * decendentes para que o comportamento padrão seja alterado.
     * 
     * @param string $action
     */
    protected function getActionScriptDependencies($action) {
        $deps = array();
        return $deps;
    }

    /**
     * Obtém as dependencias de estilo uma action baseado em seu nome.
     * Deve ser sobrescrita pelos controllers decendentes para que o comportamento padrão seja 
     * alterado.
     * 
     * @param string $action
     * @return array 
     */
    protected function getActionStlyeDependencies($action) {
        $deps = array();
        return $deps;
    }

}
