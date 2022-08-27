<?php
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





    //footer position

    $wp_customize->add_section('m_footer_option', array(

        'title' => __('Footer Optain', 'hossenmaruf'),
        'description' => 'update footer'

    ));


    $wp_customize->add_setting('m_copyright_section', array(

        'default' => '@copy; Copyright 2022',

    ));


    $wp_customize->add_control('m_copyright_section', array(

        'label' => 'Copyright Text',
        'description' => 'change the copyright text',
        'setting' => 'm_copyright_section',
        'section' => 'm_footer_option',

    ));
}

add_action('customize_register', 'm_customaizer_register');
