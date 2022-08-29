<?php
/*
* The template for 404
*/
get_header(); ?>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 error_page   ">

        <p> 404 error - page not found </p>

        <div class="error_search">

          <?php get_search_form(); ?>

        </div>

        <a href="<?php echo home_url();?> " class = "homepage"> Homepage </a>

      </div>
    </div>

  </div>
  </div>
</section>

<?php get_footer(); ?>