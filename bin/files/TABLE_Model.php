<?php

class CLASS_NAME_TABLE_Model extends Model {

    var $name = "TABLE_";

    public function delete_($id) {
        return $this->deletar($id);
    }

    public function insert_($dados) {
        return $this->salvar($dados);
    }

    public function list_($page = null, $max_for_page = null) {
        return $this->listar($page, $max_for_page);
    }

    public function get_($id) {
        return $this->get($id);
    }

}

?>
