<?php
/* ===============================================================================
  Setting general
=============================================================================== */

/* 1. Setup folder
------------------------------------------------------------------------------- */
$templatepath = get_template_directory();

define('ADS_FUNCTIONS', $templatepath . '/functions/');
define('ADS_LIBS', $templatepath . '/libs/');
define('ADS_TEMPLATE',  $templatepath . '/templates/');
define('ADS_LAYOUT',  ADS_TEMPLATE . 'layout/');
define('ADS_THEME', get_template_directory_uri());

/* 2. File default
------------------------------------------------------------------------------- */
/* ----- Commont ----- */
include_once(ADS_FUNCTIONS . '/common.php');

/* ----- Admin ----- */
if (is_admin()) {
  include_once(ADS_FUNCTIONS . '/admin.php');
}

/* ----- Custom type ----- */
include_once(ADS_FUNCTIONS . '/custom_post_type.php');

/* ----- Shortcode ----- */
include_once(ADS_FUNCTIONS . '/shortcodes.php');

/* ----- Loop ----- */
include_once(ADS_FUNCTIONS . '/loop.php');

/* ----- Media ----- */
include_once(ADS_FUNCTIONS . '/media.php');

/* ----- Other ----- */
include_once(ADS_FUNCTIONS . '/other.php');
