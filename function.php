<?php
function my_simple_theme_assets()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_simple_theme_assets');