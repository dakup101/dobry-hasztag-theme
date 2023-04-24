<?php
define('THEME_DIR', trailingslashit(get_template_directory()));
define('THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
// Components & Assets
define('IMG', trailingslashit(esc_url(get_template_directory_uri() . '/dist/img/')));
define('FUN', THEME_DIR . "/inc/");
define('CMP', 'components/cmp');

// WP General
require_once(FUN . "scripts-styles.php");
require_once(FUN . "disable-guthenberg.php");
require_once(FUN . "disable-jquery.php");
require_once(FUN . "register-menus.php");
require_once(FUN . "supports.php");
require_once(FUN . "allow-svg.php");
require_once(FUN . "scripts-styles.php");
require_once(FUN . "scripts-styles.php");

// Custom Functions
require_once(FUN . "get-menu.php");