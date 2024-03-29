<?php
  /*
    Template Name: Contact Page
  */
get_header(); ?>


<div class="page-container">
  <div class="page-banner-img"></div>

  <div class="body-content-container">
    <div class="content-container">

      <div class="page-header-text">
        contact us
      </div>

      <div class="page-blurb">
        Please get in touch with any questions or to arrange your free no-obligation quote. We try to respond to all queries as quickly as possible. 
      </div>

      <div class="contact-form-container">
        <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
            <div class="entry-content-page">
                <?php the_content(); ?> <!-- Page Content -->
            </div><!-- .entry-content-page -->

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
        ?>
      </div>


    </div>
  </div>
</div>

<?php get_footer(); ?>
