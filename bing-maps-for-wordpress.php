<?php
/*
Plugin Name: Bing Maps for WordPress
Plugin URI: http://redyellow.co.uk/plugins/bing-maps-for-wordpress/
Description: Use a shortcode to create a Bing map on your site
Author: Rich Gubby
Version: 1.6
Author URI: http://redyellow.co.uk/
*/

if(!is_admin())
{
	// Activate the plugin
	require_once('content.php');
	new bingMapsForWordpressContent();
} else
{
	require_once('control_panel.php');
	new bingMapsForWordpressControlPanel(plugin_basename(__FILE__));
}