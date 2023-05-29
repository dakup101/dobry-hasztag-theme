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
require_once(FUN . "image-sizes.php");


// Custom Functions
require_once(FUN . "get-menu.php");
require_once(FUN . "php-polish-months.php");
require_once(FUN . "php-polish-months-by-number.php");
require_once(FUN . "php-polish-days-by-number.php");
require_once(FUN . "schedule-return-days.php");
require_once(FUN . "schedule-return-months.php");



// Post Types
require_once(FUN . "post-type-tiktok.php");
require_once(FUN . "post-type-youtube.php");
require_once(FUN . "post-type-instagram.php");
require_once(FUN . "post-type-people.php");
require_once(FUN . "post-type-schedule.php");


// ACF
require_once(FUN . "acf-options.php");
require_once(FUN . "acf-options-youtube.php"); // + YouTube Api
require_once(FUN . "acf-options-instagram.php"); // + Instagram Api
// require_once(FUN . "acf-options-tiktok.php"); // + TikTok Api

// Ajax
require_once(FUN . "ajax-media-content.php");
require_once(FUN . "ajax-people-content.php");
require_once(FUN . "ajax-schedule-content.php");
require_once(FUN . "ajax-schedule-content-by-month.php");