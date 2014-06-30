<?php

require_once("config.php");

if (function_exists('date_default_timezone_set'))
    date_default_timezone_set(TIMEZONE);

require_once("core/functions.php");

require( INC . '/functions.php' );
require( INC . '/db.php' );


require_once("core/exceptions.php");
require_once("core/loader.php");
require_once("core/models.php");
require_once("core/views.php");
require_once("core/controllers.php");
require_once("core/forms.php");
require_once("core/helpers.php");
require_once("core/components.php");

function carregar_pagina($controller, $action, $param = NULL) {
    if ($param == NULL)
        execute_action($controller, $action);
    else
        execute_action($controller, $action, $param);

    @mysqli_close();
    @mysql_close();
    exit;
}

function mapear_paginas($uri) {
    $slug = somente_slug($uri);
    if (!empty($slug)) {
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
