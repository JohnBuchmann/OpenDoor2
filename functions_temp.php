<?php
/**
 *
 * This theme uses PSR-4 and OOP logic instead of procedural coding
 * Every function, hook and action is properly divided and organized inside related folders and files
 * Use the file `config/custom/custom.php` to write your custom functions
 *
 * @package awps
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'awps\\init' ) ) :
	new \awps\init();
endif;






add_action("wp_enqueue_scripts", "opendoor_enqueue");
function opendoor_enqueue() {
	//combined and minified js for all 3rd party scripts
    wp_enqueue_script('turnkey_vendor', esc_url(get_template_directory_uri()) . '/assets/js/vendor.js', array('jquery'), '', true);
}



add_action( 'wp_enqueue_scripts', 'opendoor_mystyles');
function opendoor_mystyles()
{

    wp_enqueue_style( 'turnkey_style', esc_url(get_template_directory_uri()) . '/assets/css/style.min.css', array(), '', 'screen'  );
    wp_enqueue_style( 'turnkey_bootstrap', esc_url(get_template_directory_uri()) . '/assets/css/bootstrap.min.css', array(), '', 'screen'  );




}

