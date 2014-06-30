<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

require_once("core/min.php");
mapear_paginas($_SERVER['REQUEST_URI']);

