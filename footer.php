<footer class="footer">
    <div class="container">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="footer-logo">
        </div>
        <div class="footer-widgets">
            <div class="footer-widget about">
                <?php
                    if ( is_active_sidebar( "footer_about_widget" ) ) {
                        dynamic_sidebar( "footer_about_widget" );
                    }
                ?>
            </div>
            <div class="footer-widget importants-links">
                <h4><?php echo __( "Pages", "zentrela" ); ?></h4>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu',
                        'menu_id'        => 'footer_menu',
                        'container'      => false,
                    ) );
                ?>
            </div>
            <div class="footer-widget subscription">
                <h4>Subscribe</h4>				<div class="alert alert-success" style="display:none;color:aqua" role="alert">				  Data successfully stored !				</div>				<form method="post" id="sform" action="https://zentrela.devscred.com/wp-admin/admin-ajax.php?action=submitSubscriber">					<input type="email" class="email" required name="email" placeholder="Your Email" required >					<input class="button" type="submit" name="submit" value="Submit">				</form>
            </div>			
            <div class="footer-widget contact-info">
                <?php
                    if ( is_active_sidebar( "footer_contact_info" ) ) {
                        dynamic_sidebar( "footer_contact_info" );
                    }
                ?>
                <!-- <h4>Looking for more?</h4>
                <p>Stephen Smith<br>
                    (416) 694-8464<br>
                    500 Kingston Rd Toronto ON M4L<br> 1V3(Toronto ,Ontario)</p> -->
            </div>
        </div>
    </div>
</footer>
</main>

    <?php wp_footer(); ?>		<script>		jQuery('#sform').submit(function() {			jQuery('input[name="submit"]').val('Processing..');			jQuery.ajax({ 				data: jQuery(this).serialize(), 				type: jQuery(this).attr('method'),				url: jQuery(this).attr('action'),				success: function() {					jQuery('input[name="submit"]').val('Submit');					jQuery(".alert-success").show();				}			});			return false; 		});	</script>
  </body>
</html>