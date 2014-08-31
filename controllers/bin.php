<?php

class Bin extends Controller {

    public function init() {
        $this->load("models", "binModel");
    }

    public function crud($params) {
        $table_name = $params[2];
        $this->gerarCrud($table_name);
        echo "<center>";
        echo "<h2>Crud criado com sucesso para a tabela {$table_name}!</h2>";
        echo "<h4>Para acessar o crud entre nas URLs abaixo: <br/><br/> <a href='/{$table_name}/listar'>http://endereco.exemplo/{$table_name}/listar</a> <br/> <a href='/{$table_name}/editar'>http://endereco.exemplo/{$table_name}/editar</a></h4>";
        echo "<a href='/'><button>Voltar ao In&iacute;cio</button></a>";
        echo "</center>";
        echo "<pre>";
        print_r($table_structure);
        echo "</pre>";
    }

    public function gerarCrud($table_name) {
        $table_structure = $this->binModel->getTableStructure($table_name);
        $view_dir = $_SERVER[DOCUMENT_ROOT] . "/views/{$table_name}";
        // CREATE VIEWS DIR
        mkdir($view_dir, 0777, true);
        touch($view_dir);
        chmod($view_dir, 0777);
        // CREATE VIEW list.php
        if (!file_exists($view_dir . '/list.php')) {
            $this->makeViewList($view_dir, $table_structure, $table_name);
            touch($view_dir . '/list.php');
            chmod($view_dir . '/list.php', 0777);
        }
        // CREATE VIEW edit.php
        if (!file_exists($view_dir . '/edit.php')) {
            $this->makeViewEdit($view_dir, $table_structure);
            touch($view_dir . '/edit.php');
            chmod($view_dir . '/edit.php', 0777);
        }
        // CREATE CONTROLLER {$table_name}.php
        if (!file_exists($_SERVER[DOCUMENT_ROOT] . "/controllers/{$table_name}.php")) {
            $this->makeController($table_name);
            touch($_SERVER[DOCUMENT_ROOT] . "/controllers/{$table_name}.php");
            chmod($_SERVER[DOCUMENT_ROOT] . "/controllers/{$table_name}.php", 0777);
        }
        // CREATE MODEL {$table_name}.php
        if (!file_exists($_SERVER[DOCUMENT_ROOT] . "/models/{$table_name}Model.php")) {
            $this->makeModel($table_name);
            touch($_SERVER[DOCUMENT_ROOT] . "/models/{$table_name}Model.php");
            chmod($_SERVER[DOCUMENT_ROOT] . "/models/{$table_name}Model.php", 0777);
        }
    }

    public function makeModel($table_name) {
        if (!file_exists($_SERVER[DOCUMENT_ROOT] . "/models/{$table_name}Model.php")) {
            $fp = fopen($_SERVER[DOCUMENT_ROOT] . "/models/{$table_name}Model.php", "wa");
            $php = file_get_contents($_SERVER[DOCUMENT_ROOT] . "/bin/files/TABLE_Model.php");
            $php = str_replace("CLASS_NAME_TABLE_", ucwords($table_name), $php);
            $php = str_replace("TABLE_", $table_name, $php);
            fwrite($fp, $php);
            fclose($fp);
        }
    }

    public function makeController($table_name) {
        if (PATH_SEPARATOR == ":") {
            $quebra = "\r\n";
        } else {
            $quebra = "\n";
        }
        if (!file_exists($_SERVER[DOCUMENT_ROOT] . "/controllers/{$table_name}.php")) {
            $fp = fopen($_SERVER[DOCUMENT_ROOT] . "/controllers/{$table_name}.php", "wa");
            $php = file_get_contents($_SERVER[DOCUMENT_ROOT] . "/bin/files/TABLE_.php");
            $php = str_replace("CLASS_NAME_TABLE_", ucwords($table_name), $php);
            $php = str_replace("TABLE_", $table_name, $php);

            $LOAD_MODELS = "";
            $LIST_RELATIONS = "";
            $VAR_RELATIONS = "";
            $CONDITIONS = "";
            $OBJECTS = "";

            $DB_KEY = "Tables_in_" . DB_NAME;
            $tables = $this->binModel->getTables();
            $table_structure = $this->binModel->getTableStructure($table_name);
            foreach ($table_structure as $keyStructure => $structure) {
                foreach ($tables as $keyTable => $table) {
                    if (
                            ($structure->Field == "id_" . $table->$DB_KEY) ||
                            ($structure->Field == "ID_" . $table->$DB_KEY) ||
                            ($structure->Field == $table->$DB_KEY . "_id") ||
                            ($structure->Field == $table->$DB_KEY . "_ID")
                    ) {
                        $this->makeModel($table->$DB_KEY);
                        $LOAD_MODELS .='        $this->load("models", "' . $table->$DB_KEY . 'Model");' . $quebra;
                        $LIST_RELATIONS .= '$' . $table->$DB_KEY . ' = $this->' . $table->$DB_KEY . 'Model->list_();' . $quebra;
                        $VAR_RELATIONS .= ', "' . $table->$DB_KEY . '" => $' . $table->$DB_KEY . '';
                    }
                }
                $inputType = $this->binModel->formType($structure->Type);
                if ($inputType == "checkbox") {
                    $CONDITIONS .= 'if(!empty($_POST[' . $structure->Field . ']) && $_POST[' . $structure->Field . ']){';
                    $CONDITIONS .= '$_POST[' . $structure->Field . '] = 1;';
                    $CONDITIONS .= '}else{';
                    $CONDITIONS .= '$_POST[' . $structure->Field . '] = 0;';
                    $CONDITIONS .= '}' . $quebra;
                }
                if ($inputType == "file") {

                    $OBJECTS .= 'if (!empty($_FILES["' . $structure->Field . '"]["tmp_name"]))' . $quebra;
                    $OBJECTS .= '                $obj->' . $structure->Field . ' = file_get_contents($_FILES["' . $structure->Field . '"]["tmp_name"]);' . $quebra;
                }
            }
            $php = str_replace("/* LOAD_MODELS */", $LOAD_MODELS, $php);
            $php = str_replace("/* LIST_RELATIONS */", $LIST_RELATIONS, $php);
            $php = str_replace("/* VAR_RELATIONS */", $VAR_RELATIONS, $php);
            $php = str_replace("/* CONDITIONS */", $CONDITIONS, $php);
            $php = str_replace("/* OBJECTS */", $OBJECTS, $php);

            fwrite($fp, $php);
            fclose($fp);
        }
    }

    public function makeViewList($view_dir, $table_structure, $table_name) {
        if (PATH_SEPARATOR == ":") {
            $quebra = "\r\n";
        } else {
            $quebra = "\n";
        }
        $fp = fopen($view_dir . '/list.php', 'wa');
        $php = "<table>" . $quebra
                . "<thead>" . $quebra
                . "<tr>" . $quebra;
        foreach ($table_structure as $key => $obj) {
            if ($obj->Field != "id" && $obj->Field != "ID") {
                $php .= "<th>" . ucwords($obj->Field) . "</th>" . $quebra;
            }
        }
        $php .= "<th>A&ccedil;&otilde;es</th>" . $quebra;
        $php .= "</tr>" . $quebra
                . "</thead>" . $quebra
                . "<tbody>" . $quebra
                . '<?php foreach($list as $key => $obj): ?>' . $quebra
                . '<tr>' . $quebra;
        foreach ($table_structure as $key => $obj) {
            if ($obj->Field != "id" && $obj->Field != "ID") {
                $php .= '<td><?php echo $obj->' . $obj->Field . '; ?></td>' . $quebra;
            } else {
                $fieldId = $obj->Field;
            }
        }
        $php .= '<td>'
                . '<a href="/' . $table_name . '/editar/<?php echo $obj->' . $fieldId . '; ?>">Editar</a>&nbsp;'
                . '<a href="/' . $table_name . '/deletar/<?php echo $obj->' . $fieldId . '; ?>">Deletar</a>'
                . '</td>' . $quebra;
        $php .= '</tr>' . $quebra
                . '<?php endforeach; ?>' . $quebra;
        $php .= '</tbody>' . $quebra
                . '</table>' . $quebra;
        fwrite($fp, $php);
        fclose($fp);
    }

    public function makeViewEdit($view_dir, $table_structure) {
        if (PATH_SEPARATOR == ":") {
            $quebra = "\r\n";
        } else {
            $quebra = "\n";
        }
        $fp = fopen($view_dir . '/edit.php', 'wa');
        $DB_KEY = "Tables_in_" . DB_NAME;
        $tables = $this->binModel->getTables();
        foreach ($tables as $keyTable1 => $table1) {
            $mytables[] = "id_" . $table1->$DB_KEY;
            $mytables[] = "ID_" . $table1->$DB_KEY;
            $mytables[] = $table1->$DB_KEY . "_id";
            $mytables[] = $table1->$DB_KEY . "_ID";
        }
        $php = "<form method='POST' enctype='multipart/form-data'>" . $quebra;
//        print_r($table_structure);
        foreach ($table_structure as $key => $obj) {
            $escreveu = 0;
            if ($obj->Field != "id" && $obj->Field != "ID") {
                foreach ($tables as $keyTable => $table) {
//                    echo $obj->Field . " => " . $table->$DB_KEY . "<br/>";
                    if ((
                            ($obj->Field == "id_" . $table->$DB_KEY) ||
                            ($obj->Field == "ID_" . $table->$DB_KEY) ||
                            ($obj->Field == $table->$DB_KEY . "_id") ||
                            ($obj->Field == $table->$DB_KEY . "_ID")) &&
                            !$escreveu
                    ) {
                        $relationTable_structure = $this->binModel->getTableStructure($table->$DB_KEY);
                        foreach ($relationTable_structure as $value) {
                            if ($value->Field == 'id' || $value->Field == 'ID') {
                                $idTable = $value->Field;
                            }
                        }
                        //CREATE SELECT RELATION TABLES
                        $php .='<div>' . $quebra;
                        $php .='<select  name="' . $obj->Field . '" id="' . $obj->Field . '_ID">' . $quebra;
                        $php .='<?php foreach($' . $table->$DB_KEY . ' as $key => $obj' . $table->$DB_KEY . '): ?>' . $quebra;
                        $php .='<option value="<?php echo $obj' . $table->$DB_KEY . '->' . $idTable . '?>" <?php echo ($obj' . $table->$DB_KEY . '->' . $idTable . '== $obj->' . $obj->Field . ' ? "selected" : "")?>><?php echo $obj' . $table->$DB_KEY . '->' . $idTable . '?></option>' . $quebra;
                        $php .='<?php endforeach; ?>' . $quebra;
                        $php .='</select>' . $quebra;
                        $php .='<label for="' . $obj->Field . '_ID">' . ucwords($table->$DB_KEY) . '</label>' . $quebra;
                        $php .= '</div>' . $quebra;
                        $escreveu = 1;
                    } else if (!$escreveu && !in_array($obj->Field, $mytables)) {
//                        echo $obj->Type." <br/>";
                        $inputType = $this->binModel->formType($obj->Type);
                        if ($inputType == "checkbox") {
                            //CREATE CHECKBOX
                            $php .= '<div><input type="' . $inputType . '" id="' . $obj->Field . '_ID" placeholder="' . ucwords($obj->Field) . '" name="' . $obj->Field . '" <?php echo ($obj->' . $obj->Field . '? "checked" : "")?> ><label for="' . $obj->Field . '_ID">' . ucwords($obj->Field) . '</label></div>' . $quebra;
                        } else if ($inputType != "textarea") {
                            //CREATE DEFAULT
                            $php .= '<div><input type="' . $inputType . '" id="' . $obj->Field . '_ID" placeholder="' . ucwords($obj->Field) . '" name="' . $obj->Field . '" value="' . ($inputType != 'file' ? '<?php echo $obj->' . $obj->Field . ' ?>' : '') . '"><label for="' . $obj->Field . '_ID">' . ucwords($obj->Field) . '</label></div>' . $quebra;
                        } else if ($inputType == "textarea") {
                            //CREATE TEXTAREA
                            $php .= '<div><textarea id="' . $obj->Field . '_ID" placeholder="' . ucwords($obj->Field) . '" name="' . $obj->Field . '" ><?php echo $obj->' . $obj->Field . ' ?></textarea><label for="' . $obj->Field . '_ID">' . ucwords($obj->Field) . '</label></div>' . $quebra;
                        }
                        $escreveu = 1;
                    }
                }
            } else {

                $php .= '<input type="hidden" name="' . $obj->Field . '" value="<?php echo $obj->' . $obj->Field . ' ?>">' . $quebra;
            }
        }
        $php .= '<div><input type="submit"></div>' . $quebra
                . '</form>' . $quebra;
        fwrite($fp, $php);
        fclose($fp);
    }

}

?>
