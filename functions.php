<?php
/**
 * Theme Functions and Definitions
 *
 * @package My_Simple_Theme
 */

if ( ! function_exists( 'my_simple_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function my_simple_theme_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'my-simple-theme' ),
            'footer'  => __( 'Footer Menu', 'my-simple-theme' ),
        ) );

        // Switch default core markup to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ) );

        // Custom logo support.
        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 250,
            'flex-height' => true,
            'flex-width'  => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'my_simple_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function my_simple_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'my-simple-theme-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue Google Font (Inter)
    wp_enqueue_style( 'my-simple-theme-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'my_simple_theme_scripts' );
