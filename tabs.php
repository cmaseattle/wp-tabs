<?php
/**
* Plugin Name: WP Tabs
* Plugin URI: http://github.com/cmaseattle/wp-tabs
* Description: Use shortcodes to tab content within the WYSIWYG editor
* Author: Creative Media Alliance
* Version: 0.0.1
* Author URI: http://creativemediaalliance.com
*
* This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
* General Public License as published by the Free Software Foundation; either version 2 of the License, 
* or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
* even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* You should have received a copy of the GNU General Public License along with this program; if not, write 
* to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
* General Public License as published by the Free Software Foundation; either version 2 of the License, 
* or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
* even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*
* You should have received a copy of the GNU General Public License along with this program; if not, write 
* to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

class WP_Tabs {
  var $settings;
  static function init() {
    add_shortcode('tab', array( __CLASS__, 'single_tab') );
    add_shortcode('tabs', array( __CLASS__, 'tabs_wrapper') );

    add_action( 'init', array(__CLASS__, 'register_scripts' ) );
    add_action( 'wp_enqueue_scripts', array(__CLASS__, 'enqueue_scripts' ) );
  }

  public static function single_tab($atts, $content = null) {
    $a = shortcode_atts( array(
      'title' => 'default',
      'show_title' => 'false'
    ), $atts);
    $tab_title = strtolower(preg_replace("/[\s_]/", "-", $a['title']));
    $header;
    if($a['show_title']==='true' || $a['show_title']==='True' || $a['show_title']==='TRUE')
      $header = '<h3 class="tab-title">'.$a['title'].'</h3>';
    return '<div class="tab-content" id="'.$tab_title.'" title="'.$a['title'].'">'.$header.$content.'</div>';
  }

  public static function tabs_wrapper($atts, $content = null) {
    $number_of_tabs = substr_count( $content, '[tab' );
    return '<div class="tabs-wrapper"><ul class="tabs"></ul>'.do_shortcode($content).'</div>';
  }

  static function register_scripts() {
    $dir = plugin_dir_url( __FILE__ );
    wp_register_script('wp-tabs-js', $dir . 'tabs.min.js', array('jquery'), '0.0.1' );
    wp_register_style( 'wp-tabs-css', $dir . 'tabs.min.css', false, '0.0.1' );
  }
  static function enqueue_scripts() {
    wp_enqueue_style('wp-tabs-css');
    wp_enqueue_script('wp-tabs-js');
  }
}

// FIGHT.
WP_Tabs::init();