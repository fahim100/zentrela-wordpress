<?php get_header(); ?>

<?php get_template_part( "template-parts/navigation" ); ?>

<section class="single-blog">
    <div class="container">
        <?php
        while( have_posts() ){
            the_post();
        ?>
            <div class="single-blog-wrapper">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="single-blog-feature">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>