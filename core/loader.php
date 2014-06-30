<?php

class Loader
{
	/**
	 * Coleção de instâncias de objetos carregados armazenados estaticamente, evitando a duplicidade
	 * de objetos em memória.
	 * 
	 * @var type 
	 */
	private static $loadedItems = array();
	
	public function __construct()
	{
		// Configuracoes iniciais
	}

	/**
	 * Carrega uma classe específica
	 * 
	 * @param String $item
	 * @param String $name
	 */
	public function load($item, $name)
	{
		$loadedItem = $this->getLoadedItem($item, $name);
		
		if(null !== $loadedItem)
		{
			return $loadedItem;
		}
		
		$file = null;
		
		if ($item == "components")
			$file = "controllers/{$item}/{$name}.php";
		else
			$file = "{$item}/{$name}.php";
			
		if(empty($file) || !file_exists($file))
			return; // TODO: Lançar erro como exception???
		
		require_once $file;
		
		$name = str_replace('/', '_', $name);
		$klass = ucfirst($name);
		
		if ($item == "models")
			$instance = new $klass();
		else
			$instance = new $klass($name);
		
		$this->registerLoadedItem($item, $name, $instance);
	}
	
	private function registerLoadedItem($item, $name, $instance)
	{
		if(!isset(self::$loadedItems[$item]))
			self::$loadedItems[$item]  = array();
		
		self::$loadedItems[$item][$name] = $instance;
		$this->$name = $instance;
	}
	
	protected function getLoadedItem($item, $name)
	{
		$collection = isset(self::$loadedItems[$item]) ? self::$loadedItems[$item] : null;
		$loadedItem = null;
		if(null !== $collection)
		{
			$loadedItem = isset($collection[$name])  ? $collection[$name] : null;
			
			if(null !== $loadedItem)
				if(!isset($this->$name))
				$this->$name = $loadedItem;
		}
		
		
		return $loadedItem;
	}

	/**
	 * Compara controller e action com a excecução atual
	 * 
	 * @param String $controller
	 * @param String $action
	 * $return Boolean
	 */
	public function isControllerAction($controller, $action)
	{

		if ($controller == Mvc::getController() && $action == Mvc::getAction())
			return true;
		else
			return false;
	}

	/**
	 * 
	 * Registra no wordpress o caminho de um arquivo javascript
	 * 
	 * @param String $name
	 * @param String $src - Optional
	 */
	public function register_js($name, $src = null)
	{
		if (empty($src))
			$src = "/media/js/{$name}.js";

		//echo "<script type=\"text/javascript\" src=\"{$src}\"></script>";
		//wp_register_script($name, $src);
		$this->load_js($name);
	}

	/**
	 * Carrega um js já registrado
	 * 
	 * @param String $name
	 */
	public function load_js($name)
	{
		//wp_enqueue_script( $name );
	}

	/**
	 * Vefiica se a url atual correponde
	 * a url requisitada
	 * @param String $url
	 * @return Boolean
	 */
	public function isUrl($url)
	{

		if (stristr($GLOBALS['PHP_SELF'], $url))
			return true;
		else
			return false;
	}

}
