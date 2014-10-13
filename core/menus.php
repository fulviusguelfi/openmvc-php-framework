
<?php

/*
  Este arquivo é parte do OpenMvc PHP Framework

  OpenMvc PHP Framework é um software livre; você pode redistribuí-lo e/ou
  modificá-lo dentro dos termos da Licença Pública Geral GNU como
  publicada pela Fundação do Software Livre (FSF); na versão 2 da
  Licença, ou (na sua opinião) qualquer versão.

  Este programa é distribuído na esperança de que possa ser  útil,
  mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
  MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
  Licença Pública Geral GNU para maiores detalhes.

  Você deve ter recebido uma cópia da Licença Pública Geral GNU
  junto com este programa, se não, escreva para a Fundação do Software
  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
?>
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

class MenuItem {

    var $label;
    var $route;
    var $parent;
    var $capability;

    public function __construct($label, $route, $parent = CLIENTE_MENU, $cap = "read") {
        $this->label = $label;
        $this->route = $route;
        $this->parent = $parent;
        $this->capability = $cap;
    }

}
