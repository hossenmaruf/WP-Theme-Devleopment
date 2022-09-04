<?php


function calling_js_css()
{

    wp_enqueue_style('m_style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all ');

    wp_register_style('owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '2.3.4', 'all ');
    
    wp_register_style('owl.theme.default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4', 'all ');

    wp_register_style('bxslider', get_template_directory_uri() . '/css/bxslider.min.css', array(), '4.2.12', 'all ');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');



    wp_enqueue_style('bootstrap');
    wp_enqueue_style('owl.carousel.min');
    wp_enqueue_style('owl.theme.default');
    wp_enqueue_style('bxslider');
    wp_enqueue_style('custom');



    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery.min', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.1.1', 'true');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '2.3.4', 'true');
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/bxslider.min.js', array(), '4.2.12', 'true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true ');
}

add_action('wp_enqueue_scripts', 'calling_js_css');


//google fronts

function m_add_google_fonts()
{

    wp_enqueue_style('m_google_fonts', 'https://fonts.googleapis.com/css2?family=DynaPuff&family=Roboto:wght@300&display=swap', $ver = false);
}

add_action('wp_enqueue_scripts', 'm_add_google_fonts');
