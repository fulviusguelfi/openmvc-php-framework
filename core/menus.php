<?php

define("POSTS_MENU", "edit.php");
define("MIDIA_MENU", "upload.php");
define("LINK_MENU", "link-manager.php");
define("PAGINAS_MENU", "edit-pages.php");
define("COMENTARIOS_MENU", "edit-comments.php");

define("APARENCIA_MENU", "themes.php");
define("PLUGINS_MENU", "plugins.php");
define("USUARIOS_MENU", "users.php");
define("FERRAMENTAS_MENU", "tools.php");
define("CONFIGURACOES_MENU", "options-general.php");

class MenuItem
{

	var $label;
	var $route;
	var $parent;
	var $capability;

	public function __construct($label, $route, $parent = CLIENTE_MENU, $cap = "read")
	{
		$this->label = $label;
		$this->route = $route;
		$this->parent = $parent;
		$this->capability = $cap;
	}

}

