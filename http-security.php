<?php
/*
Plugin Name: HTTP headers to improve web site security
Description: Use your HTTP header to improve security of your web site
Version: 2.3.1
Author: Carl Conrad
Author URI: https://carlconrad.net
License: GPL2
Text Domain: http-security
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once( 'include/functions.php' );
require_once( 'include/http-headers.php' );
require_once( 'include/settings.php' );

if ( is_admin() ){ // admin actions
  add_action( 'admin_menu', 'http_security_options_page' );
  add_action( 'admin_init', 'register_http_security_settings' );
}
else {
  // non-admin enqueues, actions, and filters
}