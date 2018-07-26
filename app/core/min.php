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

require_once 'color.class.php';

function console_output($string, $color = "white", $noInfo = false, $resetColor = true) {
    $finalLine = "";

    if (!$noInfo) {
        $finalLine .= ConsoleColors::getColoredString("[" . date("Y-m-d H:i:s") . "]", 'purple') . " ";
    }

    echo $ret = $finalLine . ConsoleColors::getColoredString($string, $color, null, $resetColor);
    return $ret;
}

function parse_view_console($html) {
    global $openMVCRunFromConsole;
    if (isset($openMVCRunFromConsole) && $openMVCRunFromConsole) {
        $search = array(
            "</p>",
            "<br/>",
            "<br>",
            "</tr>",
            "<th>",
            "</th>",
            "<b>",
            "</b>",
            "<strong>",
            "</strong>",
            "<h1>",
            "</h1>",
            "<h2>",
            "</h2>",
            "<h3>",
            "</h3>",
            "<h4>",
            "</h4>",
            "<h5>",
            "</h5>",
            "<h2 class='openmvc-error'>",
            "</h2>",
            "&nbsp;",
            "&otilde;",
            "&atilde;",
            "&Otilde;",
            "&Atilde;",
            "&iacute;",
            "&Iacute;",
            "&ccedil;",
            "&Ccedil;",
            "<pre>",
            "</pre>",
        );
        $replace = array(
            "\n",
            "\n",
            "\n",
            console_output("++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n", "brown", true),
            console_output("", "cyan", true, false),
            console_output("", "default", true, false),
            console_output("", "blue", true, false),
            console_output("", "default", true, false),
            console_output("", "blue", true, false),
            console_output("", "default", true, false),
            console_output("", "yellow", true, false),
            console_output("", "default", true, false),
            console_output("", "yellow", true, false),
            console_output("", "default", true, false),
            console_output("", "yellow", true, false),
            console_output("", "default", true, false),
            console_output("", "yellow", true, false),
            console_output("", "default", true, false),
            console_output("", "yellow", true, false),
            console_output("", "default", true, false),
            console_output("", "red", true, false),
            console_output("", "default", true, false),
            " ",
            "õ",
            "ã",
            "Õ",
            "Ã",
            "í",
            "Í",
            "ç",
            "Ç",
            console_output("", "light_blue", true, false),
            console_output("", "default", true, false),
        );
        $html = strip_tags(str_replace($search, $replace, $html));
    }
    return $html;
}

$fileAutoLoad = "{$_SERVER['DOCUMENT_ROOT']}/../app/configs/autoload.php";
if (isset($openMVCRunFromConsole) && $openMVCRunFromConsole) {
    if (!file_exists($fileAutoLoad)) {
        console_output("OpenMVC ERROR:: ", "red");
        console_output("Não foi possível iniciar o OpenMVC Console Client!\n", "white", true);
        console_output("Verifique a constante OPENMVC_DOCUMENT_ROOT no arquivo app/configs/app.php.\n\n\n\n", "yellow", true);
        exit();
    }
    console_output("OpenMVC:: ", "green");
    console_output("Executando OpenMVC Console Client!\n", "white", true);
    console_output("Controller: {$_REQUEST['c']} | Action: {$_REQUEST['a']}\n", "cyan", true);
    console_output("Params:\n", "cyan", true);
    console_output(print_r($_REQUEST['p'], true) . "\n\n", "cyan", true);
}
require_once($fileAutoLoad);
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

require( "{$_SERVER['DOCUMENT_ROOT']}/../" . INC . '/functions.php' );
require( "{$_SERVER['DOCUMENT_ROOT']}/../" . INC . '/drivers/' . strtolower(DB_DRIVER) . '.php' );


require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/exceptions.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/loader.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/models.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/../app/core/modelObject.php");
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
                $slug[0] = "common";
        }
        if (isset($slug[1]) && !empty($slug[1])) {
            carregar_pagina("$slug[0]", "$slug[1]", $slug);
        } else {
            carregar_pagina("$slug[0]", "index", $slug);
        }
    } else {
        carregar_pagina("common", "index", $slug);
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
