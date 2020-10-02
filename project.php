<?php
	/**
	 * Template Name: Project Page
	 */
?>
<?php get_header(); ?>

<?php
$project_banner_background = get_field( 'project_banner_background' );
$project_info_image = get_field( 'project_info_image' );
$project_info_content = get_field( 'project_info_content' );
$project_benifit_title = get_field( 'project_benifit_title' );
$project_benifit_description = get_field( 'project_benifit_description' );
$project_benifit_button = get_field( 'project_benifit_button' );
$project_benifit_button_url = get_field( 'project_benifit_button_url' );
$product_heading_product = get_field( 'product_heading_product' );
$product_heading_method = get_field( 'product_heading_method' );
$product_heading_profile = get_field( 'product_heading_profile' );
$product_heading_effect = get_field( 'product_heading_effect' );
$product_button = get_field( 'product_button' );
$product_button_url = get_field( 'product_button_url' );
?>

<?php get_template_part( "template-parts/navigation" ); ?>

<section class="project-banner" style="background-image: url(<?php if( !empty( $project_banner_background ) ){ echo $project_banner_background['url']; }?>)">
    <div class="project-triangles">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
    </div>
</section>

<section class="project-info">
    <div class="container">
        <div class="project-info-wrapper">
			<div id="particles-white-1"></div>
			<?php if( !empty( $project_info_image ) ){ ?>
            <div class="project-info-wrapper-image">
                <img src="<?php echo esc_url( $project_info_image['url'] ); ?>" alt="<?php echo esc_attr( $project_info_image['alt'] ); ?>">
			</div>
			<?php } ?>
            <div class="project-info-wrapper-content">
				<?php if( $project_info_content ){ ?>
					<h3><?php echo esc_html( $project_info_content ); ?></h3>
				<?php } ?>
            </div>
        </div>
        <div class="progect-info-triangles">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
        </div>
    </div>
</section>

<section class="project-benefit">
    <div class="container">
        <div class="section-title">
			<?php if( $project_benifit_title ){ ?>
				<h2><?php echo esc_html( $project_benifit_title ); ?></h2>
			<?php } ?>
			<?php if( $project_benifit_description ){ ?>
				<?php echo $project_benifit_description; ?>
			<?php } ?>
			<?php if( $project_benifit_button ){ ?>
				<div class="magnetic">
					<a href="<?php echo esc_attr( $project_benifit_button_url ) ?>" class="button">
						<span class="button-area">
							<span data-text="<?php echo esc_attr( $project_benifit_button ) ?>"><?php echo esc_html( $project_benifit_button ) ?></span>
						</span>
					</a>
				</div>
			<?php } ?>
        </div>
    </div>
    <div id="particles-gray-6"></div>
</section>

<section class="project-product">
    <div class="container">
        <div class="project-product-wrapper desktop">
            <div class="product-heading">
                <div class="product">
					<?php if( $product_heading_product ){ ?>
						<span><?php echo $product_heading_product; ?></span>
					<?php } ?>
                </div>
                <div class="consumtion">
					<?php if( $product_heading_method ){ ?>
						<span><?php echo $product_heading_method; ?></span>
					<?php } ?>
                </div>
                <div class="consumer">
					<?php if( $product_heading_profile ){ ?>
						<span><?php echo $product_heading_profile; ?></span>
					<?php } ?>
                </div>
                <div class="effects">
					<?php if( $product_heading_effect ){ ?>
						<span><?php echo $product_heading_effect; ?></span>
					<?php } ?>
                </div>
            </div>
            <div class="product-body">
				<?php if( have_rows( 'product_item' ) ): ?>
					<?php while( have_rows( 'product_item' ) ) : the_row(); ?>
					<?php
					$product_item_image = get_sub_field( 'product_item_image' );
					$product_item_name = get_sub_field( 'product_item_name' );
					$product_item_method = get_sub_field( 'product_item_method' );
					$product_item_profile = get_sub_field( 'product_item_profile' );
					?>
						<div class="project-product-wrapper-item">
							<div class="product">
								<?php if( !empty( $product_item_image ) ){ ?>
									<img src="<?php echo esc_url( $product_item_image['url'] ); ?>" alt="<?php echo esc_attr( $product_item_image['alt'] ); ?>">
								<?php } ?>
								<?php if( $product_item_name ){ ?>
									<span><?php echo esc_html( $product_item_name ); ?></span>
								<?php } ?>
							</div>
							<div class="consumtion">
								<?php if( $product_item_method ){ ?>
									<span><?php echo esc_html( $product_item_method ); ?></span>
								<?php } ?>
							</div>
							<div class="consumer">
								<?php if( $product_item_profile ){ ?>
									<span><?php echo esc_html( $product_item_profile ); ?></span>
								<?php } ?>
							</div>
							<div class="effects">
								<ul>
								<?php if( have_rows( 'product_item_effect' ) ): ?>
									<?php while( have_rows( 'product_item_effect' ) ) : the_row(); ?>
									<?php
									$product_item_effect_thc_effect = get_sub_field( 'product_item_effect_thc_effect' );
									$product_item_effect_thc_effect_name = get_sub_field( 'product_item_effect_thc_effect_name' );
									?>
										<li>
											<?php if( $product_item_effect_thc_effect ){ ?>
												<span><?php echo esc_html( $product_item_effect_thc_effect ); ?>:</span>
											<?php } ?>
											<?php if( $product_item_effect_thc_effect_name ){ ?>
												<span><?php echo esc_html( $product_item_effect_thc_effect_name ); ?></span>
											<?php } ?>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
								</ul>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
		</div>
		<div class="project-product-wrapper mobile">
		<?php if( have_rows( 'product_item' ) ): ?>
			<?php while( have_rows( 'product_item' ) ) : the_row(); ?>
			<?php
				$product_item_image = get_sub_field( 'product_item_image' );
				$product_item_name = get_sub_field( 'product_item_name' );
				$product_item_method = get_sub_field( 'product_item_method' );
				$product_item_profile = get_sub_field( 'product_item_profile' );
			?>
				<div class="product-item">
					<div class="product-heading">
						<div class="product">
							<?php if( $product_heading_product ){ ?>
								<span><?php echo $product_heading_product; ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="project-product-wrapper-item">
						<div class="product">
							<?php if( !empty( $product_item_image ) ){ ?>
								<img src="<?php echo esc_url( $product_item_image['url'] ); ?>" alt="<?php echo esc_attr( $product_item_image['alt'] ); ?>">
							<?php } ?>
							<?php if( $product_item_name ){ ?>
								<span><?php echo esc_html( $product_item_name ); ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="product-heading">
						<div class="consumtion">
							<?php if( $product_heading_method ){ ?>
								<span><?php echo $product_heading_method; ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="project-product-wrapper-item">
						<div class="consumtion">
							<?php if( $product_item_method ){ ?>
								<span><?php echo esc_html( $product_item_method ); ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="product-heading">
						<div class="consumer">
							<?php if( $product_heading_profile ){ ?>
								<span><?php echo $product_heading_profile; ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="project-product-wrapper-item">
						<div class="consumer">
							<?php if( $product_item_profile ){ ?>
								<span><?php echo esc_html( $product_item_profile ); ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="product-heading">
						<div class="effects">
							<?php if( $product_heading_effect ){ ?>
								<span><?php echo $product_heading_effect; ?></span>
							<?php } ?>
						</div>
					</div>
					<div class="project-product-wrapper-item">
						<div class="effects">
							<ul>
							<?php if( have_rows( 'product_item_effect' ) ): ?>
								<?php while( have_rows( 'product_item_effect' ) ) : the_row(); ?>
								<?php
								$product_item_effect_thc_effect = get_sub_field( 'product_item_effect_thc_effect' );
								$product_item_effect_thc_effect_name = get_sub_field( 'product_item_effect_thc_effect_name' );
								?>
									<li>
										<?php if( $product_item_effect_thc_effect ){ ?>
											<span><?php echo esc_html( $product_item_effect_thc_effect ); ?>:</span>
										<?php } ?>
										<?php if( $product_item_effect_thc_effect_name ){ ?>
											<span><?php echo esc_html( $product_item_effect_thc_effect_name ); ?></span>
										<?php } ?>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
        </div>
		<?php if( $product_button ){ ?>
			<div class="magnetic">
				<a href="<?php echo esc_attr( $product_button_url ); ?>" class="button embaded-google-form">
					<span class="button-area">
						<span data-text="<?php echo esc_html( $product_button ); ?>"><?php echo esc_html( $product_button ); ?></span>
					</span>
				</a>
			</div>
		<?php } ?>
    </div>
    <div id="particles-gray-7"></div>
</section>

<?php get_footer(); ?>