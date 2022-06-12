<?php
/*
Plugin Name: Furikake
Plugin URI: https://wordpress.org/plugins/furikake/
Description: A plugin to add Japanese phonetic. powered by <a href="http://developer.yahoo.co.jp/webapi/jlp/furigana/v1/furigana.html">Yahoo!</a>. thx Yahoo!
Author: jidaikobo
Text Domain: furikake
Domain Path: /languages/
Version: 0.2.0
Author URI: http://www.jidaikobo.com/
Description:
License: GPL2

Copyright 2017 jidaikobo (email : support@jidaikobo.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

// === WP_INSTALLING ===
if (defined('WP_INSTALLING') && WP_INSTALLING)
{
	return;
}

// === language ===
load_plugin_textdomain(
	'furikake',
	FALSE,
	plugin_basename(dirname(__FILE__)).'/languages'
);

// === require ===
require_once 'classes/Furigana.php';
require_once 'classes/Settings.php';

// === set cookie ===
\Furikake\Furigana::setCookies();

// === admin_menu ===
function furikake_add_menu()
{
	add_menu_page(
		'furikake',
		'Furikake',
		'edit_users',
		__FILE__,
		array('\\Furikake\\settings', 'settings')
	);
}
add_action('admin_menu', 'furikake_add_menu');

// === add shortcode ===
add_shortcode('furikake', array('\\Furikake\\Furigana', 'furigana'));

// === add_filter ===
add_filter('plugin_action_links', array('\\Furikake\\Furigana', 'addLink'), 10, 2);

// === ob_filter() for add phonetic ===
add_filter('after_setup_theme', array('\\Furikake\\Furigana', 'bufferStart'), 20);
add_filter('shutdown', array('\\Furikake\\Furigana', 'bufferOut'), 20);
function ob_furikake($buffer)
{
	$buffer = \Furikake\Furigana::furigana(array(), $buffer);
	return $buffer;
}

// === add class to body ===
add_filter('body_class', function ($classes)
{
	$furikake_mode = get_option('furikake_mode') ? get_option('furikake_mode') : 0 ;
	$furikake_on = isset($_COOKIE['furikake']) && $_COOKIE['furikake'] == 'on';
	$furikake_on = $furikake_mode == 1 ? TRUE : $furikake_on;

	if ($furikake_on)
	{
		$classes[] = 'furikake_on';
	}

	return $classes;
});
