<?php
/**
 * @Author Thiago Valentoni Guelfi
 * 
 * Classe usada para gerenciar as Actions do WordPress
 * 
 ******************************************************/

class Action extends Loader {
    
	var $name;
	protected $acceptedArgs = 1;
	protected $priority = 10;
	
	/**
	 * O construtor set um nome para a Action
	 * @param String $name
	 */
	
    public function __construct( $name = null){
        // Configuracoes iniciais
        $this->setName($name);
    }
	
	public function getAcceptedArgs() {
		return $this->acceptedArgs;
	}
	
	public function getPriority() {
		return $this->priority;
	}
    
    /**
     * Salva o nome da Action
     * @param String $name
     */
    private function setName( $name){
    	$this->name = $name;
    }
     
    /**
     * Retorna o nome da Action
     */
    private function getName(){
    	return $this->name;
    }
    
    /**
     * 
     * Callback para quando iniciar uma ação
     * @throws Exception
     */
    public function exec(){
        throw new Exception("Não implementado");
    }
    
    
    /**
     * 
     * Excuta um ação dentro do controller
     * 
     * Esse método pega automaticamente o nome da ação e executa no controller
     * O usuario também pode executar ações de outros controllers ao passar o nome
     * do controller
     * 
     * @param String $name
     * @param String $controller
     * @param Mixed $param
     * @return Mixed
     */
    public function execAction( $controller = null,  $name, &$param = null){
		
    	if ( empty($controller)){
    		 $controller = Mvc::getController();
    	}
   
    	if ( empty($param)){
   			
    		execute_action($controller, "action_".$name."_".$this->getName());
    		
    	}else{
    		execute_action($controller, "action_".$name."_".$this->getName(), $param);
    	}
    }
    

    
    /**
     * Adiciona um filtro e executa o callback na classe 
     * do filtro
     * 
     * @param String $filter
     * @param String $callback
     */
    public function addFilter( $filter , $callback){
    	$this->load("filters", $filter );
    	add_filter($filter, array(&$this->$filter,$callback));	
    }
    

  
}