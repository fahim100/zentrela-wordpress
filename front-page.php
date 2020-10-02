<?php
    /**
     * Template Name: Home Page
     */
?>
<?php get_header(); ?>

<?php get_template_part( "template-parts/navigation" ); ?>

<?php
	$hero_background = get_field('hero_background');
	$hero_title = get_field('hero_title');
	$hero_description = get_field('hero_description');
	$hero_button = get_field('hero_button');
	$hero_button_url = get_field('hero_button_url');
	$research_title = get_field( 'research_title' );
	$research_button = get_field( 'research_button' );
	$research_button_url = get_field( 'research_button_url' );
	$cta_image = get_field( 'cta_image' );
	$cta_title = get_field( 'cta_title' );
	$cta_button = get_field( 'cta_button' );
	$cta_button_url = get_field( 'cta_button_url' );
	$client_title = get_field( 'client_title' );
	$client_description = get_field( 'client_description' );
	$choose_team_type = get_field( 'choose_team_type' );
	$team_title = get_field( 'team_title' );
	$team_description = get_field( 'team_description' );
	$team_button = get_field( 'team_button' );
	$team_button_url = get_field( 'team_button_url' );
	$operational_title = get_field( 'operational_title' );
	$operational_description = get_field( 'operational_description' );
	$operational_button = get_field( 'operational_button' );
	$operational_button_url = get_field( 'operational_button_url' );
	$operational_left_image = get_field( 'operational_left_image' );
?>
  	<section class="hero" style="background-image: url(<?php echo $hero_background; ?>)">
		<div class="container">
			<div class="hero-content">
				<?php if( $hero_title ){ ?>
					<h1><?php echo $hero_title; ?></h1>
				<?php } ?>
				<?php if( $hero_description ){ ?>
					<p><?php echo $hero_description; ?></p>
				<?php } ?>
				<div class="magnetic">
					<a href="<?php echo $hero_button_url;?>" class="button">
					<span class="button-area">
						<span data-text="<?php echo $hero_button; ?>"><?php echo $hero_button; ?></span>
					</span>
					</a>
				</div>
			</div>
				<div class="hero-triangles">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
			</div>
		</div>
	</section>


<section class="operational">
  	<div class="container">
		<div class="section-title">
			<?php if( $operational_title ){ ?>
				<h2><?php echo $operational_title; ?></h2>
			<?php } ?>
			<?php if( $operational_description ){ ?>
				<?php echo $operational_description; ?>
			<?php } ?>
		</div>
		<div class="operational-content">
			<div class="operational-content-main">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/center.png" alt="center-image" />
				<div class="operational-content-obj desktop">
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/arrow-one.svg"
						class="arrow-one"
						alt="arrow"
						data-aos="fade-right"
						data-aos-once="true"
						data-aos-duration="700"
						data-aos-delay="300"
					/>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/arrow-two.svg"
						class="arrow-two"
						alt="arrow"
						data-aos="fade-right"
						data-aos-once="true"
						data-aos-duration="700"
						data-aos-delay="1000"
					/>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/arrow-three.svg"
						class="arrow-three"
						alt="arrow"
						data-aos="fade-right"
						data-aos-once="true"
						data-aos-duration="700"
						data-aos-delay="1600"
					/>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/op-one.svg"
						class="op-one"
						alt="Question"
						data-aos="fade-left"
						data-aos-once="true"
						data-aos-duration="700"
						data-aos-delay="800"
					/>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/op-two.svg"
						class="op-two"
						alt="Question"
						data-aos="fade-left"
						data-aos-once="true"
						data-aos-duration="700"
						data-aos-delay="1300"
					/>
					<img
						src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/op-three.svg"
						class="op-three"
						alt="Question"
						data-aos="fade-left"
						data-aos-once="true"
						data-aos-duration="700"
						data-aos-delay="1900"
					/>
				</div>
				<div class="operational-content-obj mobile">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/operational/mobile-op.svg" alt="mobile-op">
				</div>
				<?php if( !empty( $operational_left_image ) ){ ?>
					<img
					src="<?php echo esc_url( $operational_left_image['url'] ); ?>"
					class="left-image"
					alt="<?php echo esc_attr( $operational_left_image['alt'] ); ?>"
					data-aos="fade-right"
					data-aos-once="true"
					data-aos-duration="800"
					/>
				<?php } ?>
			</div>
			<div class="operational-content-bg">
			<div id="particles-white"></div>
				<?php if( !empty( $operational_button ) ) { ?>
					<div class="magnetic">
						<a href="<?php echo esc_url( $operational_button_url ); ?>" class="button">
							<span class="button-area">
								<span data-text="<?php echo esc_attr( $operational_button ); ?>"><?php echo esc_html( $operational_button ); ?></span>
							</span>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
  	</div>
</section>


  <section class="research">
  <div class="container">
    <div class="section-title">
      <?php if( $research_title ){ ?>
        <h2><?php echo $research_title; ?></h2>
      <?php } ?>
    </div>
    <div class="research-wrapper">
		<?php if( have_rows('research_item') ): ?>
			<?php while( have_rows('research_item') ) : the_row(); ?>
				<div class="research-item">
					<div class="research-item-image">
						<?php
						$research_item_image = get_sub_field('research_item_image');
						$research_item_title = get_sub_field('research_item_title');
						$research_item_description = get_sub_field('research_item_description');
						if( !empty( $research_item_image ) ){ ?>
						<img
							src="<?php echo esc_url($research_item_image['url']); ?>"
							alt="<?php echo esc_attr($research_item_image['alt']); ?>"
						/>
						<?php } ?>
					</div>
					<div class="research-item-content">
						<?php if( $research_title ){ ?>
							<h3><?php echo $research_item_title; ?></h3>
						<?php } ?>
						<?php if( $research_title ){ ?>
							<p><?php echo $research_item_description; ?></p>
						<?php } ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
	<div class="magnetic">
		<a href="<?php echo $research_button_url;?>" class="button">
			<span class="button-area">
				<span data-text="<?php echo $research_button; ?>"><?php echo $research_button; ?></span>
			</span>
		</a>
	</div>
  </div>
</section>


  <section class="cta">
  <div class="container">
    <div class="cta-wrapper">
		<div class="cta-wrapper-image">
			<?php if( !empty( $cta_image ) ){ ?>
			<img
				src="<?php echo esc_url($cta_image['url']); ?>"
				alt="<?php echo esc_attr($cta_image['alt']); ?>"
			/>
			<?php } ?>
		</div>
      	<div class="cta-wrapper-content">
			<?php if( $cta_title ){ ?>
				<h3><?php echo $cta_title; ?></h3>
			<?php } ?>
        <div class="magnetic">
          <a href="<?php echo $cta_button_url; ?>" class="button">
            <span class="button-area">
              <span data-text="<?php echo $cta_button; ?>"><?php echo $cta_button; ?></span>
            </span>
          </a>
        </div>
      </div>
      <div id="particles-gray"></div>
    </div>
  </div>
</section>


  <section class="client">
    <div class="container">
        <div class="section-title">
			<?php if( $client_title ){ ?>
				<h2><?php echo esc_html($client_title) ?></h2>
			<?php } ?>
			<?php if( $client_description ){ ?>
				<p><?php echo esc_html($client_description) ?></p>
			<?php } ?>
        </div>
        <div class="client-wrapper">
			<?php if( have_rows( 'client_item' ) ): ?>
				<?php while( have_rows( 'client_item' ) ) : the_row(); ?>
					<?php $client_item_logo = get_sub_field('client_item_logo');
						if( !empty( $client_item_logo ) ){ ?>
							<div class="client-wrapper-item">
								<img src="<?php echo esc_url($client_item_logo['url']); ?>" alt="<?php echo esc_attr($client_item_logo['alt']); ?>">
							</div>
						<?php } ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section>

<section class="objective">
	<div class="objective-slider">
		<?php if( have_rows( 'objective_slider_item' ) ): ?>
			<?php while( have_rows( 'objective_slider_item' ) ) : the_row(); ?>
				<?php 
				$objective_slider_item_image = get_sub_field('objective_slider_item_image'); 
				$objective_slider_item_title = get_sub_field('objective_slider_item_title'); 
				?>
					<div class="objective-slider-item">
						<?php if( !empty( $objective_slider_item_image ) ){ ?>
							<div class="objective-slider-item-image">
								<img src="<?php echo esc_url($objective_slider_item_image['url']); ?>" alt="<?php echo esc_attr($objective_slider_item_image['alt']); ?>">
							</div>
						<?php } ?>
						<?php if( $objective_slider_item_title ){ ?>
							<div class="objective-slider-item-content">
								<h2><?php echo esc_html($objective_slider_item_title) ?></h2>
							</div>
						<?php } ?>
						<div class="objective-slider-progress">
							<div class="progress"></div>
						</div>
					</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>


<section class="team <?php if( isset( $choose_team_type ) ){  echo $choose_team_type['value']; } ?> ">
	<div class="container">
		<div class="team-wrapper">
			<div class="team-grid">
				<?php if( have_rows( 'team_member' ) ): ?>
					<?php while( have_rows( 'team_member' ) ) : the_row(); ?>
						<?php 
							$team_member_image = get_sub_field('team_member_image');
							$team_member_name = get_sub_field('team_member_name');
							$team_member_designation = get_sub_field('team_member_designation');
						?>
						<div class="team-grid-item">
							<?php if( !empty( $team_member_image ) ){ ?>
								<div class="team-grid-item-image">
									<img src="<?php echo esc_url( $team_member_image['url']); ?>" alt="<?php echo esc_attr( $team_member_image['alt']); ?>" />
								</div>
							<?php } ?>
							<div class="team-grid-item-content">
								<?php if( $team_member_name ){ ?>
									<h5><?php echo esc_html( $team_member_name); ?></h5>
								<?php } ?>
								<?php if( $team_member_designation ){ ?>
									<p><?php echo esc_html( $team_member_designation); ?></p>
								<?php } ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="team-content">
				<?php if( $team_title ){ ?>
					<h2><?php echo esc_html( $team_title ); ?></h2>
				<?php } ?>
				<?php if( $team_description ){ ?>
					<p><?php echo esc_html( $team_description ); ?></p>
				<?php } ?>
				<?php if( $team_button ){ ?>
					<div class="magnetic">
						<a href="<?php echo esc_url( $team_button_url); ?>" class="button">
							<span class="button-area">
								<span data-text="<?php echo $team_button; ?>"><?php echo esc_html( $team_button ); ?></span>
							</span>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div id="particles-gray-1"></div>
</section>
<?php get_footer(); ?>