<?php
/*
* The template for display search 
*/
get_header(); ?>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
           
          <div class="search_title">
            <h1 class="title"><?php printf(__('Search Result: %s' , 'hossenmaruf'), get_search_query() )  ;      ?>            




            </h1>









          </div>









        <?php get_template_part('template_part/blog_setup');  ?>



        <div id="page_nav">
          <?php if ('m_pagenav') {
            m_pagenav();
          } else { ?>
            <?php next_posts_link(); ?>
            <?php previous_posts_link(); ?>
          <?php } ?>


        </div>
      </div>


      <div class="col-md-3">

        <?php get_sidebar();     ?>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>