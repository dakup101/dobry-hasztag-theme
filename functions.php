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
require_once(FUN . "cron-intervals.php");

// Custom Functions
require_once(FUN . "get-menu.php");
require_once(FUN . "php-polish-months.php");


// Post Types
require_once(FUN . "post-type-tiktok.php");
require_once(FUN . "post-type-youtube.php");
require_once(FUN . "post-type-instagram.php");


// ACF
require_once(FUN . "acf-options.php");
require_once(FUN . "acf-options-youtube.php");
// require_once(FUN . "acf-options-tiktok.php");

// Ajax
require_once(FUN . "ajax-media-content.php");