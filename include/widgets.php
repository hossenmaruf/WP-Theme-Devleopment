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
}

add_action('widgets_init', 'm_widgets_register');
