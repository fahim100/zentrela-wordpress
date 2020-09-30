<?php
    /**
     * Template Name: Google Form Page
     */
?>
<?php get_header(); ?>
<?php get_template_part( "template-parts/navigation" ); ?>

<section class="participent" style="padding: 200px 0;">
    <div class="container">
        <div class="participent-wrapper">
        <?php
        while( have_posts() ){
            the_post();
        ?>
            <?php the_content(); ?>
        <?php
        }
        ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>