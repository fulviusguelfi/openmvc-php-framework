<?php

class BinModel extends Model {

    public function getTableStructure($table_name) {
        return $this->query("DESCRIBE {$table_name}");
    }

    public function getTables() {
        return $this->query("SHOW TABLES");
    }

    public function formType($tipo_db) {
        $ultima = substr($tipo_db, -1);
        if ($ultima == ")") {
            $primeira = strrpos($tipo_db, '(');
            $tipo_db = substr($tipo_db, 0, $primeira);
        }
        $types = array(
            "default" => "text", // TIPO DE FORM DEFAULT
            "int" => "number",
            "varchar" => "text",
            "text" => "textarea",
            "tinyint" => "checkbox",
        );
        if (array_key_exists($tipo_db, $types)) {
            return $types[$tipo_db];
        } else {
            return $types["default"];
        }
    }

}

?>
