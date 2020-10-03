<?php
    /**
     * Template Name: Science Page
     */
?>
<?php get_header(); ?>
<?php 
$science_banner_background = get_field( 'science_banner_background' );
$science_banner_title = get_field( 'science_banner_title' );
$science_banner_description = get_field( 'science_banner_description' );
$science_banner_chart = get_field( 'science_banner_chart' );
$science_banner_duration = get_field( 'science_banner_duration' );
$science_banner_button = get_field( 'science_banner_button' );
$science_banner_button_url = get_field( 'science_banner_button_url' );
$science_test_title = get_field( 'science_test_title' );
$science_test_description = get_field( 'science_test_description' );
$science_result_title = get_field( 'science_result_title' );
$science_result_content = get_field( 'science_result_content' );
$science_result_image = get_field( 'science_result_image' );
$science_study_title = get_field( 'science_study_title' );
$table_heading_study = get_field( 'table_heading_study' );
$table_heading_year = get_field( 'table_heading_year' );
$table_heading_download = get_field( 'table_heading_download' );
$science_feature_title = get_field( 'science_feature_title' );
?>

<?php get_template_part( "template-parts/navigation" ); ?>
<section
  class="science-banner"
  style="background-image: url(<?php if( !empty( $science_banner_background ) ){ echo $science_banner_background['url']; }?>)"
>
  <div class="container">
    <div class="science-banner-wrapper">
      	<div class="science-banner-wrapper-content">
	  		<?php if( $science_banner_title ) { ?>
				<h1><?php echo esc_html( $science_banner_title ); ?></h1>
			<?php } ?>
			<?php if( $science_banner_description ) { ?>
				<?php echo $science_banner_description; ?>
			<?php } ?>
      	</div>
      	<div class="science-banner-wrapper-chart">
		  	<?php if( !empty( $science_banner_chart ) ) { ?>
				<img src="<?php echo esc_url( $science_banner_chart['url'] ); ?>" alt="<?php echo esc_url( $science_banner_chart['alt'] ); ?>">
			<?php } ?>
			<div class="science-banner-wrapper-chart-content">
				<?php if( $science_banner_duration ) { ?>
					<span class="duration"><?php echo $science_banner_duration; ?></span>
				<?php } ?>
				<?php if( !empty( $science_banner_button ) ){ ?>
					<div class="magnetic">
						<a href="<?php echo $science_banner_button_url; ?>" class="button">
							<span class="button-area">
								<span data-text="<?php echo $science_banner_button ?>"><?php echo $science_banner_button ?></span>
							</span>
						</a>
					</div>
				<?php } ?>
			</div>
      </div>
    </div>
  </div>
  <div class="science-triangles">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
  </div>
</section>


  <section class="science-test">
    <div class="container">
        <div class="science-test-content">
			<?php if( $science_test_title ){ ?>
				<h2><?php echo $science_test_title; ?></h2>
			<?php } ?>
			<?php if( $science_test_description ) { ?>
				<?php echo $science_test_description; ?>
			<?php } ?>
        </div>
    </div>
    <div id="particles-gray-2"></div>
</section>

  <section class="science-result">
    <div class="container">
        <div class="science-result-wrapper">
			<?php if( !empty( $science_result_image ) ) { ?>
				<div class="science-result-wrapper-image">
					<img src="<?php echo esc_url( $science_result_image['url'] ); ?>" alt="<?php echo esc_url( $science_result_image['alt'] ); ?>">
				</div>
			<?php } ?>
            <div class="science-result-wrapper-content">
				<?php if( $science_result_title ){ ?>
					<h3><?php echo $science_result_title; ?></h3>
				<?php } ?>
				<?php if( $science_result_content ) { ?>
					<?php echo $science_result_content; ?>
				<?php } ?>
            </div>
        </div>
    </div>
    <div id="particles-gray-3"></div>
</section>

  <section class="science-study">
    <div class="container">
		<?php if( $science_study_title ){ ?>
			<div class="section-title">
				<h2><?php echo esc_html( $science_study_title ); ?></h2>
			</div>
		<?php } ?>
        <div class="science-study-wrapper">
            <table>
                <tr>
					<?php if( $table_heading_study ) { ?>
						<th><?php echo esc_html( $table_heading_study ); ?></th>
					<?php } ?>
					<?php if( $table_heading_year ) { ?>
						<th><?php echo esc_html( $table_heading_year ); ?></th>
					<?php } ?>
					<?php if( $table_heading_download ) { ?>
						<th><?php echo esc_html( $table_heading_download ); ?></th>
					<?php } ?>
				</tr>
				<?php if( have_rows('table_body_row') ): ?>
					<?php while( have_rows('table_body_row') ) : the_row(); 
						$study_title = get_sub_field( 'study_title' );
						$year = get_sub_field( 'year' );
						$download_link = get_sub_field( 'download_link' );
					?>
						<tr>
							<td>
								<?php if( $study_title ) { ?>
									<?php echo esc_html( $study_title ); ?>
								<?php } ?>
							</td>
							<td>
								<?php if( $year ) { ?>
									<?php echo esc_html( $year ); ?>
								<?php } ?>
							</td>
							<td>
								<?php if( $download_link ) { ?>
									<a href="<?php echo esc_url( $download_link['url'] );?>"><?php echo esc_html( 'PDF','zentrela'); ?></a>
								<?php } ?>
							</td>
						</tr>
					<?php endwhile; ?>
				<?php endif; ?>
            </table>
        </div>
    </div>
</section>

<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
<section class="science-feature <?php post_class(); ?>">
  	<div class="container">
		<div class="section-title">
			<?php if( $science_feature_title ) { ?>
				<h2><?php echo esc_html( $science_feature_title ); ?></h2>
			<?php } ?>
		</div>
		<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			<div class="science-feature-item ">
				<?php if( has_post_thumbnail() ){ ?>
					<div class="science-feature-item-image">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="science-feature-1" />
					</div>
				<?php } ?>
				<div class="science-feature-item-content">
					<?php 
						echo force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( wpautop(get_the_content()) ), 70, '...' ) ) );
                    ?>
					<div class="magnetic">
						<a href="<?php echo get_permalink(); ?>" class="button">
							<span class="button-area">
							<span data-text="Read Article">Read Article</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
  	</div>
  	<div id="particles-gray-4"></div>
</section>
 
<?php wp_reset_postdata(); ?>
<?php endif; ?>


<section class="science-service">
    <div class="container">
        <div class="science-service-wrapper">
			<?php if( have_rows('science_service_wrapper') ): ?>
				<?php while( have_rows('science_service_wrapper') ) : the_row(); 
					$science_service_item_title = get_sub_field( 'science_service_item_title' );
					$science_service_item_content = get_sub_field( 'science_service_item_content' );
				?>
				<div class="science-service-wrapper-item">
					<?php if( $science_service_item_title ) { ?>
						<h4><?php echo esc_html( $science_service_item_title ); ?></h4>
					<?php } ?>
					<?php if( $science_service_item_content ) { ?>
						<?php echo $science_service_item_content; ?>
					<?php } ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
    <div id="particles-gray-5"></div>
</section>

<?php get_footer(); ?>