<?php

class Filter extends Loader {

	public $name;
	
	/**
	 * Define o número de argumentos aceitos pelo filtro
	 * @see add_filter()
	 * @var int
	 */
	protected $acceptArgs = 1;
	
	/**
	 * Define a prioridade a qual o filtro será executado.
	 * @var int
	 */
	protected $priority = 1;


	public function __construct($name = null){
        // Configuracoes iniciais
        $this->setName($name);
    }
	
	public function getAcceptedArgs() {
		return ($this->acceptArgs >= 1) ? $this->acceptArgs : 1;
	}
	
	public function getPriority() {
		return ($this->priority >= 1) ? $this->priority : 1;
	}
    
    public function exec($param){
        throw new Exception("Não implementado");
    }
    /**
     * @Author Thiago Valentoni Guelfi
     * @Since 02-12-2010
     * 
     * Recebe um parametro nome e salva no campo $name da classe Filter
     * 
     * @param String $name
     */
    public function setName( $name ){
    	$this->name = $name;
    	
    }
    /**
     * @Author Thiago Valentoni Guelfi
     * @since 03-12-2010
     * 
     * Retorna o nome da Action atual
     * @return String
     */
    public function getName(){
    	return $this->name;
    }
    
    /**
     * 
     * Excuta um filter dentro do controller
     * 
     * @param String $controller
     * @param String $action
     */
    public function execFilter( $controller , $name, &$params = null){
    	
    	
		 if ( !empty( $params)){
	
       		 execute_action($controller, "filter_".$name."_".$this->getName(), $params);
		 
		 }else 
       		execute_action($controller, "filter_".$name."_".$this->getName());
    }
}