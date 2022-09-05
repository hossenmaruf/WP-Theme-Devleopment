<?php

function m_widgets_register()
{

    register_sidebar(array(


        'name' => __('Main widgets area', 'hossenmaruf'),
        'id' => 'sideber-1',
        'description' => __('Apperas in the sideber', 'hossenmaruf'),
        'before_widget' => '<div class = "child_sideber">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class = "title" > ',
        'after_title' => '</h2>',


    ));


    register_sidebar(array(


        'name' => __('Footer-1', 'hossenmaruf'),
        'id' => 'footer-1',
        'description' => __('Apperas in the sideber', 'hossenmaruf'),
        'before_widget' => '<div class = "child_sideber">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class = "title" > ',
        'after_title' => '</h2>',


    ));
    register_sidebar(array(


        'name' => __('Footer-2', 'hossenmaruf'),
        'id' => 'footer-2',
        'description' => __('Apperas in the sideber', 'hossenmaruf'),
        'before_widget' => '<div class = "child_sideber">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class = "title" > ',
        'after_title' => '</h2>',


    ));
    register_sidebar(array(


        'name' => __('Footer-3', 'hossenmaruf'),
        'id' => 'footer-3',
        'description' => __('Apperas in the sideber', 'hossenmaruf'),
        'before_widget' => '<div class = "child_sideber">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class = "title" > ',
        'after_title' => '</h2>',


    ));

    
    register_sidebar(array(


        'name' => __('Home-1', 'hossenmaruf'),
        'id' => 'home-1',
        'description' => __('Apperas in the sideber', 'hossenmaruf'),
        'before_widget' => '<div class = "child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class = "title" > ',
        'after_title' => '</h2>',


    ));




}

add_action('widgets_init', 'm_widgets_register');
