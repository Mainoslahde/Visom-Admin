<?php

/*
Plugin Name: Visom Admin Theme
Description: Visom Admin Theme
Author: MainosLähde Oy
Version: 1.0
Author URI: http://www.mainoslahde.fi
*/

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

function my_login_css() {
  echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('login.css  ', __FILE__). '">';
}

add_action('login_head', 'my_login_css');

?>