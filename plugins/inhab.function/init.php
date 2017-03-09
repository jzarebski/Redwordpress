<?php
/**
* Plugin Name: My first plugin
* Plugin URI: http://test.com
* Description: my first plugin
* Version: 1.0.0
* Author: your name here
* Author URI: http://test.com
* License: GPL2
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'RF_DIR', dirname( __FILE__ ) );

include(RF_DIR."/lib/post_tax.php");
