<?php

require_once("core/min.php");

if (isset($_REQUEST["p"])) {
    execute_action($_REQUEST['c'], $_REQUEST['a'], $_REQUEST["p"]);
} else {
    execute_action($_REQUEST['c'], $_REQUEST['a']);
}

    