<?php
// Enqueue the parent theme's stylesheet for a child theme

function hello_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'hello_child_enqueue_styles' );


// Register a custom post type called 'Projects'

function create_projects_post_type() {
    register_post_type('projects',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_projects_post_type');


// Remove empty widgets from the sidebar if no widgets are active

function remove_empty_widgets() {
    if ( !is_active_sidebar( 'sidebar-1' ) ) {
        remove_action( 'widgets_init', 'my_theme_sidebar' );
    }
}
add_action( 'wp', 'remove_empty_widgets' );


// Disable the WordPress admin bar for non-administrators

if ( !current_user_can( 'administrator' ) ) {
    add_filter( 'show_admin_bar', '__return_false' );
}
