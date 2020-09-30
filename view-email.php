<?php
    /**
     * Template Name: View Email Page
     */
?>
<?php get_header(); ?>
<?php get_template_part( "template-parts/navigation" ); ?>

<section class="view-email">
    <div class="container">
			<div class="section-title">
				<h2><?php echo esc_html( 'View Subscription Email' ); ?></h2>
			</div>
        <div class="view-email-wrapper">
        <?php
        global $wpdb;
        $result = $wpdb->get_results("select * from store_email");
        ?>
            <table>
                <tr>
                    <th>Serial No</th>
                    <th>Email</th>
                    <th>Subscribe Time</th>
				</tr>
                <?php foreach( $result as $email ){ ?>
                    <tr>
                        <td><?php echo $email->id; ?></td>
                        <td><?php echo $email->email; ?></td>
                        <td><?php echo $email->time; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>

<?php get_footer(); ?>