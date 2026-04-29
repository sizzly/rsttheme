<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
        <p><?php bloginfo('description') ?></p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current"><?php echo get_the_title(get_option('page_for_posts')); ?></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

<section id="blog-posts" class="blog-posts section">
  <div class="container">
    <div class="row gy-4">
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                
              get_template_part('loops/cards');
                
            endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        ?>
    </div>
      </section>

        <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <?php rst_pagination() ?>
        </div>
      </div>

    </section><!-- /Blog Pagination Section -->
 
<?php get_footer();