<?php

class Test extends Model {
    
    var $assertions;
    
    public function __construct(){
        parent::__construct();
        error_reporting(0);
        $this->assertions = array();
        try {
            $this->exec();
        } catch(TestException $e){
            // Nada
        }
        $this->results();
    }
    
    public function exec(){
        throw new TestException("Não implementado");
    }
    
    public function results(){
        $resultados = $this->assertions;
        $sucesso = true;
        foreach($resultados as $resultado){
            if(!$resultado['result']){
                $sucesso = false;
                break;
            }
        }
        $mensagem = ($sucesso) ? "sucesso" : "falhou";
        require_once("views/test/resultado.php");
    }
    
    protected function assertEquals($expected, $value, $text = NULL){
        $json_expected = json_encode($expected);
        $json_value = json_encode($value);
        $test = ($text !== NULL) ? $text : "{$json_expected} equals {$json_value}?";
        $response = $expected === $value;
        $result = array("test" => $test, "result" => $response);
        $this->assertions[] = $result;
        if(! $response){
            throw new TestException();
        }
    }
    
    protected function assertNotEmpty($value, $text = NULL){
        $json_value = json_encode($value);
        $test = ($text !== NULL) ? $text : "{$json_value} is NOT empty?";
        $response = ! empty($value);
        $result = array("test" => $test, "result" => $response);
        $this->assertions[] = $result;
        if(! $response){
            throw new TestException();
        }
    }
    
    protected function assertEmpty($value, $text = NULL){
        $json_value = json_encode($value);
        $test = ($text !== NULL) ? $text : "{$json_value} is empty?";
        $response = empty($value);
        $result = array("test" => $test, "result" => $response);
        $this->assertions[] = $result;
        if(! $response){
            throw new TestException();
        }
    }
    
    protected function execute_action($controller, $action){
        ob_start();
        execute_action($controller, $action);
        ob_clean();
    }
    
    protected function truncate($table){
        $this->query("TRUNCATE TABLE {$table}");
    }
    
}