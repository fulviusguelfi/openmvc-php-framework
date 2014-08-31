<?php

class CLASS_NAME_TABLE_ extends Controller {

    public function init() {
        $this->load("models", "TABLE_Model");
        /* LOAD_MODELS */
    }

    public function index() {
        $this->listar();
    }

    public function listar($page = null, $max_for_page = null) {
        $list = $this->TABLE_Model->list_($page, $max_for_page);
        $this->view("TABLE_/list", array("list" => $list));
    }

    public function deletar($param) {
        $id = (!isset($_REQUEST[id]) ? @$param[2] : @$_REQUEST[id]);
        $this->TABLE_Model->delete_($id);
        $this->redirect("/TABLE_/listar");
    }

    public function adicionar($param) {
        $this->editar($param);
    }

    public function editar($param) {
        $id = (!isset($_REQUEST[id]) ? @$param[2] : @$_REQUEST[id]);
        /* LIST_RELATIONS */
        if (empty($_POST)) {
            $obj = $this->TABLE_Model->get_($id);
        } else {
            /* CONDITIONS */
            $obj = (object) $_POST;
            /* OBJECTS */
            $salvo = $this->TABLE_Model->insert_($obj);
        }
        $this->view("TABLE_/edit", array("obj" => $obj /* VAR_RELATIONS */));
    }

}

?>
