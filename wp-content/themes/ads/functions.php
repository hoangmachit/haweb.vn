<?php
/* ===============================================================================
  Setting general
=============================================================================== */

/* 1. Setup folder
------------------------------------------------------------------------------- */
$template_directory = get_template_directory();
$theme              = get_template_directory_uri();

define('__functions', $template_directory . '/functions/');
define('__libraries', $template_directory . '/libraries/');
define('__templates',  $template_directory . '/templates/');
define('__layout',  __templates . 'layout/');
define('__theme', $theme);

/* 2. File default
------------------------------------------------------------------------------- */
/* ----- _Functions ----- */
include_once(__functions . '_functions.php');

/* ----- Query ----- */
include_once(__functions . '_query.php');

/* ----- Admin ----- */
if (is_admin()) {
  include_once(__functions . '_admin.php');
}

/* ----- Custom type ----- */
include_once(__functions . '_post_type.php');

/* ----- Shortcode ----- */
include_once(__functions . '_shortcodes.php');

/* ----- Media ----- */
include_once(__functions . '_media.php');

/* ----- Other ----- */
include_once(__functions . '_other.php');

/* ----- Filter ----- */
include_once(__functions . '_admin_filter.php');
