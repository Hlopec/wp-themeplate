<?php get_header(); ?>

<!-- section -->
<section role="main">

    <h1><?php //the_title(); ?></h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php
        if($post->post_type != 'event'){
            global $wp_query;
            $wp_query->set_404();
            status_header( 404 );
            get_template_part( 404 ); exit();
        }
        ?>


        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="display: none">

            <?php the_content(); ?>

            <?php //comments_template( '', true ); // Remove if you don't want comments ?>

            <br class="clear">

            <?php //edit_post_link(); ?>

        </article>
        <!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

        <!-- article -->
        <article>

            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

        </article>
        <!-- /article -->

    <?php endif; ?>

</section>
<!-- /section -->

<?php
/**
 * redirect to normal template
 */
?>
<script>
    window.location.replace($('.eo-event-title a').attr('href'));
</script>
<?php get_footer(); ?>
