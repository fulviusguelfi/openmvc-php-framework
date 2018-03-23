
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

require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/configs/autoload.php");
// you want all errors to be triggered

if (OPENMVC_DEBUG == true) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

if (function_exists('date_default_timezone_set'))
    date_default_timezone_set(TIMEZONE);

require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/functions.php");

require( "{$_SERVER['DOCUMENT_ROOT']}/../".INC . '/functions.php' );
require( "{$_SERVER['DOCUMENT_ROOT']}/../".INC . '/db.php' );


require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/exceptions.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/loader.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/models.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/views.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/controllers.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/forms.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/helpers.php");

function carregar_pagina($controller, $action, $param = NULL) {
    if ($param == NULL)
        execute_action($controller, $action);
    else
        execute_action($controller, $action, $param);

    @mysqli_close();
//    @mysql_close();
    exit;
}

function mapear_paginas($uri) {
    $uri = str_replace('-', '_', $uri);
    $slug = somente_slug($uri);
    if (!empty($slug)) {
        if (is_dir($_SERVER['DOCUMENT_ROOT'] . "/" . $slug[0])) {
            $slug[0] = $slug[1];
            $slug[1] = $slug[2];
            $slug[2] = $slug[3];
            if (empty($slug[0]))
                $slug[0] = "home";
        }
        if (isset($slug[1]) && !empty($slug[1])) {
            carregar_pagina("$slug[0]", "$slug[1]", $slug);
        } else {
            carregar_pagina("$slug[0]", "index", $slug);
        }
    } else {
        carregar_pagina("home", "index", $slug);
    }
}

function somente_slug($uri) {
    $uri = parse_url($uri);
    $slugs = explode("/", $uri['path']);
    $resposta = array();
    foreach ($slugs as $slug) {
        if ($slug !== "") {
            $resposta[] = $slug;
        }
    }
    return $resposta;
}