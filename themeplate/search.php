<?php get_header(); ?>


    <div class="wrapper">
        <div>
            <div class="padding3p-0"><a class="return" href="<?php echo site_url(); ?>">&laquo; Back to Home</a></div>
            <h2>Search Results</h2>
        </div>
        <div class="content">
            <?php query_posts('posts_per_page=-1&s='.$s);
            get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>
        </div>
    </div>


<?php get_footer(); ?>