<?php
/*
* This template for displaying the header
*/


get_header();

?>


<section id="body_area">

  <div class="container">

    <div class="row">

      <div class="col-md-9">

        <?php

        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>


            <div class="blog_area">

              <?php the_excerpt();     ?>

              <div class="post_thumb">

                <h2> <a href=" <?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?> </a> </h2>

              </div>

              <div class="post_details">

                <h2> <a href=" <?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>

              </div>


            </div>

        <?php

          endwhile;
        else :
          _e('no post found');
        endif;



        ?>

      </div>


      <div class="col-md-3">

        <h1> this is side bar</h1>

      </div>



    </div>
  </div>


</section>


<?php get_footer();    ?>