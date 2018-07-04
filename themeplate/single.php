<?php get_header(); ?>

<?php if(have_posts()):
    while(have_posts()):
        the_post(); ?>

        <div class="wrapper news-detail clear">
            <?php if(has_post_thumbnail()){ ?>
                <div class="post-image" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID) ); ?>');"></div>
            <?php } ?>
            <h2 class="post-title">
                <?php the_title(); ?>
            </h2>
            <div class="align_justify content">
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
