<?php

/**
 * Plugin Name: . Example Shortcode
 * Description: Use <strong>[example-shortcode]</strong> for a post/page or for a template file use <strong>&lt;?php echo do_shortcode("[example-shortcode]"); ?&gt;</strong> Note: You can also send additional params by using <strong>[example-shortcode key1='value1' key2='value2']</strong> or <strong>&lt;?php echo do_shortcode("[example-shortcode key1='value1' key2='value2']"); ?&gt;</strong>
 * Version: 1.0.0
 * Author: JeffL
 */

/*
 *  Add plugin to menu
 */
function example_shortcode_set_plugin_menu_item() {

    // config settings
    $page_title = 'Example Shortcode';
    $menu_title = 'Example Shortcode';
    $capability = 'manage_options';
    $menu_slug  = 'example-shortcode';
    $function   = 'example_shortcode_admin_function';
    $icon_url   = 'dashicons-media-code';
    $position   = 100;

    // add new menu item
    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

add_action( 'admin_menu', 'example_shortcode_set_plugin_menu_item' );

/*
 * Add Shortcode
 */
function example_shortcode ( $atts = '' )
{
    // set default values for attributes
    $values = shortcode_atts( array(
        'key1' => 0,
        'key2' => 0,
    ), $atts );

    // show values
    print_r($values);
}

add_shortcode('example-shortcode', 'example_shortcode');

/*
 * Admin Function
 */
function example_shortcode_admin_function ()
{
    $html = "<div class='wrap'>
                <h1>Admin Page</h1>
             </div>";

    echo $html;
}

