<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1><?php the_title(); ?></h1>
        <?php if ( is_single() ) : ?>
            <!-- Code to execute only on a single "post" or custom post type -->
            <p><?php the_excerpt(); ?></p>
        <?php endif; ?>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current"><?php the_title(); ?></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

<div id="container-content-page" class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1 py-5">
            <?php 

            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
            ?>
        </div>
    </div>
</div>


<?php get_footer();