<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
function dazz_coming_soon_wp_script()
{
	wp_enqueue_media();
    wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('thickbox');
	wp_enqueue_style('dazz_csw-bootstrap_css', DAZZ_CSW_PLUGIN_URL.'assets/css/bootstrap.css');
	wp_enqueue_style('dazz_csw-font-awesome_min', DAZZ_CSW_PLUGIN_URL.'assets/css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('dazz_csw-rcsp_jquery-ui', DAZZ_CSW_PLUGIN_URL.'assets/css/rcsp_jquery-ui.css');
	wp_enqueue_style('dazz_csw-backend', DAZZ_CSW_PLUGIN_URL.'assets/css/backend.css');
	
	//dailog pop css
	wp_enqueue_style('dazz_csw-dialog', DAZZ_CSW_PLUGIN_URL.'assets/css/dialog/dialog.css');
	wp_enqueue_style('dazz_csw-dialog-box-style', DAZZ_CSW_PLUGIN_URL.'assets/css/dialog/dialog-box-style.css');
	wp_enqueue_style('dazz_csw-dialog-wilma', DAZZ_CSW_PLUGIN_URL.'assets/css/dialog/dialog-jamie.css');
	
	
	wp_enqueue_script('theme-preview');
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'jquery-ui-sortable' );
	wp_enqueue_script('dazz_csw-media-uploads',DAZZ_CSW_PLUGIN_URL.'assets/js/media-upload-script.js',array('media-upload','thickbox','jquery'));
	wp_enqueue_script('dazz_csw-time-picker', DAZZ_CSW_PLUGIN_URL.'assets/js/jquery-ui-timepicker.js',array('jquery','jquery-ui-datepicker'));
	wp_enqueue_script('dazz_csw-my-color-picker-script', DAZZ_CSW_PLUGIN_URL.'assets/js/my-color-picker-script.js', array( 'wp-color-picker' ), false, true );
	wp_enqueue_script('dazz_csw-bootstrap_min_js',DAZZ_CSW_PLUGIN_URL.'assets/js/bootstrap.min.js');
	
	//dailog pop js
	wp_enqueue_script('dazz_csw-snap-svg-min',DAZZ_CSW_PLUGIN_URL.'assets/js/dialog/snap.svg-min.js');
	wp_enqueue_script('dazz_csw-modernizr-custom',DAZZ_CSW_PLUGIN_URL.'assets/js/dialog/modernizr.custom.js');
	wp_enqueue_script('dazz_csw-classie',DAZZ_CSW_PLUGIN_URL.'assets/js/dialog/classie.js');
	wp_enqueue_script('dazz_csw-dialogFx',DAZZ_CSW_PLUGIN_URL.'assets/js/dialog/dialogFx.js'); 
	
}
?>