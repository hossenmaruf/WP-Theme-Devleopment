<?php



add_theme_support('title-tag');

function calling_js_css()
{

    wp_enqueue_style('m_style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all ');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');



    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');



    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'true ');
}

add_action('wp_enqueue_scripts', 'calling_js_css');


//google fronts

function m_add_google_fonts()
{

    wp_enqueue_style('m_google_fonts', 'https://fonts.googleapis.com/css2?family=DynaPuff&family=Roboto:wght@300&display=swap', $ver = false);
}

add_action('wp_enqueue_scripts', 'm_add_google_fonts');






//theme function


function m_customaizer_register($wp_customize)
{

    //header_area

    $wp_customize->add_section('m_header_area', array(
        'title' => __('Header Area', 'hossenmaruf'),
        'description' => 'change logo if you interested'
    ));

    $wp_customize->add_setting('m_logo', array(

        'default' => get_bloginfo('template_directory') . '/img/logo.png',

    ));


    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'm_logo', array(

        'label' => 'Logo Upload',
        'description' => 'if you interested change logo ',
        'setting' => 'm_logo',
        'section' => 'm_header_area'

    )));


    //menu position

    $wp_customize->add_section('m_menu_option', array(

        'title' => __('Menu Position Optain', 'hossenmaruf'),
        'description' => 'you can change the menu position'

    ));


    $wp_customize->add_setting('m_menu_position', array(

        'default' => 'right_menu',

    ));


    $wp_customize->add_control('m_menu_position', array(

        'label' => 'Menu Position',
        'description' => 'change the menu position',
        'setting' => 'm_menu_position',
        'section' => 'm_menu_option',
        'type' => 'radio',
        'choices' => array(

            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu'


        )




    ));
}

add_action('customize_register', 'm_customaizer_register');



//menu register


register_nav_menu('main_menu', __('Main_menu'), 'hossenmaruf');
