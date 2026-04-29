<?php 
/*
This loop is used in the Archive and in the Home [.php] templates.
*/
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