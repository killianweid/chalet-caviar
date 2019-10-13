<?php
/**
 * Created by PhpStorm.
 * User: kweidner
 * Date: 13/10/2019
 * Time: 17:41
 */

/**
 ** activation theme
 **/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
?>