<?php
function load_stylesheets()
{
    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), false, 'all');
    wp_enqueue_style('reset');
    
    wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
    wp_enqueue_style('styles');

    wp_register_style( 'font_awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );
    wp_enqueue_style('font_awesome');

    wp_register_style( 'lato', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap' );
    wp_enqueue_style('montserrat');

    wp_register_style( 'amatic', 'https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap' );
    wp_enqueue_style('amatic');
    
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs()
{
    wp_register_script('gsap', get_template_directory_uri() . '/js/gsap.js', '', 1, true);
    wp_enqueue_script('gsap');

    wp_register_script('menu', get_template_directory_uri() . '/js/sliding-menus.js', '', 1, true);
    wp_enqueue_script('menu');

    // wp_register_script('accordion', get_template_directory_uri() . '/js/accordion.js', '', 1, true);
    // wp_enqueue_script('accordion');

    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null, false );
    wp_enqueue_script('jQuery');

    wp_register_script( 'gsap-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', null, null, false );
    wp_enqueue_script('gsap-cdn');
}
add_action('wp_enqueue_scripts', 'loadjs');

// add page slug as class to body
function add_slug_body_class( $classes ) {
    global $post;
 if ( isset( $post ) ) {
    $classes[] = $post->post_name;
 }
 return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );


//add SVG support
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');

//AFC