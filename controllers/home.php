<?php

class Home extends Controller {

    public function index() {
        $this->load("models", "binModel");
        $tables = $this->binModel->getTables();
        $this->view("home/index", array("tables" => $tables));
    }

}

?>
