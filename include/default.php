<?php



add_theme_support('title-tag');



add_theme_support('post-thumbnails', array('page', 'post' , 'service'));
add_image_size('post-thumbnails', 950, 350, true);


function m_excerpt_more($more)
{

    // get_permalink(  $post->ID)
    return '<br> <br> <a class="redmore" href="' . get_permalink() . '">' . 'Read More' . '</a>';
}




add_filter('excerpt_more', 'm_excerpt_more');


function m_excerpt_lenght($leggth)
{

    return 40;
}

add_filter('excerpt_length', 'm_excerpt_lenght', 999);


//page nev function


function m_pagenav()
{
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
      <div class="wp_pagenav">';
    if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' . $current . '<span>of</span>' . $max . '</p>';
    echo $pages . paginate_links($args);
    if ($max > 1) echo '</div><pre>';
}
