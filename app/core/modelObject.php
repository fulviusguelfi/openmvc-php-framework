<?php

class modelObject {

    private $fields;
    private $functions;
    private $name;

    function __construct($fields, $tableName) {
        $this->name = $tableName;
        if (!empty($fields)) {
            $this->OPENMVC_modelObject = $this->info = (array) $fields;
            foreach ($fields as $field => $value) {
                $this->fields[] = $field;
//            Set Propriety
                $this->{$field} = $value;
//            Create Setter
                $this->functions[] = $funcName = "set" . ucfirst($field);
                $this->{$funcName} = function($method, $arg) {
                    $field = lcfirst(substr($method, 3));
                    $this->$field = $arg;
                };
//            Create Getter
                $this->functions[] = $funcName = "get" . ucfirst($field);
                $this->{$funcName} = function($method) {
                    $field = lcfirst(substr($method, 3));
                    return $this->$field;
                };
            }
        } else {
            return (OBJECT) array();
        }
    }

    public function __call($method, $arguments) {
        if (in_array($method, $this->functions)) {
            return call_user_func_array(Closure::bind($this->$method, $this, get_called_class()), array_merge([$method], $arguments));
        } else if (in_array($method, $this->fields)) {
            return $this->{$method};
        } else {
            pr(get_parent_class());
            echo_error("Function or object \"{$method}\" not found on {$this->name} model!<br/>Check your call or database.", 500);
        }
    }

}
