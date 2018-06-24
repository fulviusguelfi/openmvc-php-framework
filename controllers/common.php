
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

class Common extends Controller {

    public function index() {
        $this->load_crud();
//        $this->view("common/index", array("var" => "Lorem Ipsum"));
    }

    public function load_crud($params = array()) {
        if (!empty($params)) {
            $_REQUEST['crud'] = (empty($_REQUEST['crud']) ? $params[2] : $_REQUEST['crud']);
            $_REQUEST['bootstrap'] = (empty($_REQUEST['bootstrap']) ? $params[3] : $_REQUEST['bootstrap']);
        }
        $this->load("components", "CrudGenerator");
        $this->CrudGenerator->bootstrap = true;
        $this->CrudGenerator->execute();
    }

    public function crud($params = array()) {
        if (!empty($params)) {
            $action = $params[2]; // create | delete
            $table = $params[3];
            $bootstrap = (!empty($params[4]) ? $params[4] : false);
        }
        if ($action == "create") {
            $this->load_crud(array(null, null, $table, $bootstrap));
        }
        if ($action == "delete") {
            unlink("{$_SERVER["DOCUMENT_ROOT"]}/../controllers/{$table}.php");
            unlink("{$_SERVER["DOCUMENT_ROOT"]}/../models/{$table}Model.php");
            unlink("{$_SERVER["DOCUMENT_ROOT"]}/../views/{$table}/list.php");
            unlink("{$_SERVER["DOCUMENT_ROOT"]}/../views/{$table}/edit.php");
            rmdir("{$_SERVER["DOCUMENT_ROOT"]}/../views/{$table}/");
            echo parse_view_console("<h3>Crud {$table} removido com sucesso.</h3><br>");
        }
    }

}

?>
