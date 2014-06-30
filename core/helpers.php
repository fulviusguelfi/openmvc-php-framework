<?php

class Helper extends Loader{

    /**
     * Este Método chama a view
     *
     * @param String $name
     * @param Array $data
     *
     */
    public function view($name, $data = array()){
        if( !empty($data))
            extract($data);
       	include("views/{$name}.php");
    }

}
