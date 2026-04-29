<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>
            <?php 
        printf(
            /* translators: %s: query term */
            esc_html__( 'Search Results for: %s', 'picostrap5' ),
            '<span class="text-light">"' . get_search_query() . '"</span>'
        );
        ?>
        </h1>
<p></p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Search</li>
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
                ?>
<div class="col-lg-4">
    <article>

        <div class="post-img">
            <?php the_post_thumbnail('medium', ['class' => 'w-100']);    ?>
        </div>

        <p class="post-category"><?php the_category(', '); ?></p>

        <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

        <div class="d-flex align-items-center">
            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="" class="img-fluid post-author-img flex-shrink-0">
            <div class="post-meta">
                <p class="post-author"><?php the_author(); ?></p>
                <p class="post-date">
                    <time><?php the_date() ?></time>
                </p>
            </div>
        </div>
    </article>
</div>
                <?php
                
            endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
        ?>
    </div>

    <div class="row">
      <div class="col lead text-center w-100">
        <div class="d-inline-block"><?php picostrap_pagination() ?></div>
      </div><!-- /col -->
    </div> <!-- /row -->
  </div>
</section>


 
<?php get_footer();
