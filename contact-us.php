<?php
    /**
     * Template Name: Contact Page
     */
?>
<?php get_header(); ?>
<?php
$contact_banner_background = get_field( 'contact_banner_background' );
$contact_form_title = get_field( 'contact_form_title' );
$contact_form_description = get_field( 'contact_form_description' );
?>

<?php get_template_part( "template-parts/navigation" ); ?>

<section class="contact" style="background-image: url(<?php if( !empty( $contact_banner_background ) ){ echo $contact_banner_background['url']; }?>)">
    <div class="container">
        <div class="contact-banner">
            <?php if( $contact_form_title ){ ?>
                <h2><?php echo esc_html( $contact_form_title ); ?></h2>
            <?php } ?>
            <?php if( $contact_form_description ){ ?>
                <p><?php echo esc_html( $contact_form_description ); ?></p>
            <?php } ?>
        </div>
    </div>
</section>

<section class="contact-form">
    <div class="container">
        <div class="contact-form-wrapper">
            <form name="cForm" class="form" id="cForm" method="post" action="">
                <?php 
                if ( get_field( "contact_form_shortcode" ) ) {
                    echo do_shortcode( get_field( "contact_form_shortcode" ));
                }
                ?>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>