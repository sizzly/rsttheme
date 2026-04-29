<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


if (have_posts()):
    while (have_posts()): the_post();
?>
<!-- Page Title -->
<div class="page-title dark-background">
    <div class="container position-relative">
        <h1><?php the_title(); ?></h1>
        <p>
            <?php
                // Get the post content and limit it to a specific number of words (e.g., 60 words)
                $excerpt = wp_trim_words( the_excerpt(), 60, '' );
                echo $excerpt;
            ?>
        </p>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li class="current"><?php the_title(); ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Page Title -->

<div class="container">
    <div class="row">
        <div class="col-lg-8">

            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
                <div class="container">
                    <article class="article">

                        <div class="post-img">
                            <?php
                                $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <img src="<?php echo $featured_image_url; ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="title"><?php the_title(); ?></h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/about"><?php the_author(); ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time><?php the_date(); ?></time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <?php the_content(); ?>
                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><?php the_category(', '); ?></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <?php
                                echo get_the_tag_list('<ul class="tags"><li>', '</li><li>', '</li></ul>');
                            ?>
                        </div><!-- End meta bottom -->
                    </article>
                </div>
            </section><!-- /Blog Details Section -->

            <section id="blog-comments" class="blog-comments section">
                <div class="container">
                    <h4 class="comments-count"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></h4>
                    <?php
                        if (!get_theme_mod("singlepost_disable_comments")) if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    ?>
                </div>
            </section>

            <section id="comment-form" class="comment-form section">
                <div class="container">
	                <?php rst_comment_form(); // Render comments form. ?>
                </div>
            </section><!-- /Comment Form Section -->

        </div>

        <div class="col-lg-4 sidebar">
            <div class="widgets-container">
                <div class="blog-author-widget widget-item">
                    <div class="d-flex flex-column align-items-center">
                        <img src="<?php echo get_avatar_url( get_the_author_meta( 'user_email' ), array('size' => 120)); ?>" class="rounded-circle flex-shrink-0" alt="">
                        <h4><?php the_author(); ?></h4>
                        <?php if (get_the_author_meta('description') != ''): ?>    
                            <p><?php echo get_the_author_meta('description'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class=" widget-item">
                    <h3 class="widget-title">Search</h3>
                    <?php get_search_form(); ?>
                </div>

                <div class="categories-widget widget-item">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="mt-3">
                        <?php
                            $args = array(
                                'hide_empty' => false, // Set to true to hide categories with no posts
                                'orderby'    => 'name',
                                'taxonomy'   => 'category' // Default taxonomy is 'category'
                            );
                            $categories = get_categories( $args );

                            if ( ! empty( $categories ) ) {
                                foreach ( $categories as $category ) {
                                    echo '<li>';
                                    // Link to the category archive page
                                    echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                                    // Optional: display category post count
                                    echo ' (' . esc_html( $category->count ) . ')';
                                    echo '</li>';
                                }
                            } else {
                                echo '<p>No categories found.</p>';
                            }
                        ?>
                    </ul>
                </div>

                <div class="recent-posts-widget widget-item">
                    <h3 class="widget-title">Recent Posts</h3>
                    <?php
                        // Get the 5 most recent posts
                        $recent_posts = get_posts( array(
                            'numberposts' => 5, // Number of posts to retrieve
                            'post_status' => 'publish'
                        ));
                        if ( ! empty( $recent_posts ) ) {
                            foreach ( $recent_posts as $post ) {
                                setup_postdata( $post ); // Setup post data for use with template tags
                                $thumbnail_url = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
                                $post_date_string = $post->post_date;
                                // Convert the date string to a Unix timestamp
                                $timestamp = strtotime( $post_date_string );

                                // Format the timestamp to display the time (e.g., 'g:i a' for 12-hour format with am/pm)
                                $time_format = 'M j, Y'; // Customize the format using PHP date characters
                                $post_time = date( $time_format, $timestamp );

                                echo '<div class="post-item"><img src="' . $thumbnail_url . '" alt="" class="flex-shrink-0"><div><h4><a href="' . get_permalink( $post->ID ) . '">' . $post->post_title . '</a></h4><time>' . $post_time . '</time></div></div>';
                            }
                            wp_reset_postdata(); // Reset post data
                        }
                    ?>
                </div>

                <div class="tags-widget widget-item">
                    <h3 class="widget-title">Tags</h3>
                    <ul>
                        <?php
                            $tags = get_tags(); // Retrieves all tags
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    $tag_link = get_tag_link($tag->term_id); // Gets the URL for the tag archive
                                    ?>
                                    <li>
                                        <a href='<?php echo esc_url($tag_link); ?>' title='<?php echo esc_attr($tag->name); ?>' class='<?php echo esc_attr($tag->slug); ?>'>
                                            <?php echo esc_html($tag->name); ?> <!-- Displays name and post count -->
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    endwhile;
 else :
     _e( 'Sorry, no posts matched your criteria.', 'picostrap5' );
 endif;
 ?>
<?php get_footer();
