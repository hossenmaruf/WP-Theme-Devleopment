<?php



add_theme_support('title-tag');



add_theme_support('post-thumbnails', array('page', 'post'));
add_image_size('post-thumbnails', 950, 350, true);


function m_excerpt_more($more)
{

    // get_permalink(  $post->ID)
    return '<br> <br> <a class="redmore" href="'.get_permalink() . '">' . 'Read More' . '</a>';
}




add_filter('excerpt_more', 'm_excerpt_more');


function m_excerpt_lenght($leggth)
{

    return 40;
}

add_filter('excerpt_length', 'm_excerpt_lenght', 999);
