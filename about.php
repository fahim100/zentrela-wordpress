<?php
    /**
     * Template Name: About Page
     */
?>
<?php get_header(); ?>
<?php
$about_banner_background = get_field('about_banner_background');
$about_banner_title = get_field('about_banner_title');
$about_banner_description = get_field('about_banner_description');
$about_banner_left_image = get_field('about_banner_left_image');
$about_client_title = get_field( 'client_title' );
$team_title = get_field( 'team_title' );
$business_team_title = get_field( 'business_team_title' );
$choose_team_type = get_field( 'choose_team_type' );
?>

<?php get_template_part( "template-parts/navigation" ); ?>
  <section class="about-banner" style="background-image: url(<?php if( !empty( $about_banner_background ) ){ echo $about_banner_background['url']; }?>)">
    <div class="container">
        <div class="about-banner-wrapper">
            <div class="about-banner-wrapper-content">
				<?php if( $about_banner_title ) { ?>
					<h1><?php echo esc_html( $about_banner_title ); ?></h1>
				<?php } ?>
				<?php if( $about_banner_description ) { ?>
					<h1><?php echo $about_banner_description; ?></h1>
				<?php } ?>
			</div>
			<?php if( !empty( $about_banner_background ) ) { ?>
				<div class="about-banner-wrapper-image">
					<img src="<?php echo esc_url( $about_banner_left_image['url'] ); ?>" alt="<?php echo esc_url( $about_banner_left_image['alt'] ); ?>">
				</div>
			<?php } ?>
        </div>
    </div>
    <div class="about-triangles">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle-shape.svg" alt="triange" />
    </div>
</section>

  <section class="about-client">
    <div class="container">
        <div class="section-title">
			<?php if( $about_client_title ){ ?>
				<h2><?php echo esc_html($about_client_title) ?></h2>
			<?php } ?>
        </div>
        <div class="about-client-wrapper">
			<?php if( have_rows( 'client_item' ) ): ?>
				<?php while( have_rows( 'client_item' ) ) : the_row(); ?>
					<?php $client_item_logo = get_sub_field('client_item_logo');
						if( !empty( $client_item_logo ) ){ ?>
							<div class="about-client-wrapper-item">
								<img src="<?php echo esc_url($client_item_logo['url']); ?>" alt="<?php echo esc_attr($client_item_logo['alt']); ?>">
							</div>
						<?php } ?>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section>

<section class="team <?php if( isset( $choose_team_type ) ){  echo $choose_team_type['value']; } ?> dark">
  	<div id="particles-white-2"></div>
  	<div class="container">
    	<div class="team-wrapper">
      		<div class="team-content">
			  	<?php if( $team_title ){ ?>
					<h2><?php echo esc_html( $team_title ); ?></h2>
				<?php } ?>
      		</div>
      		<div class="team-grid">
			  	<?php if( have_rows( 'team_member' ) ): ?>
					<?php while( have_rows( 'team_member' ) ) : the_row(); ?>
						<?php 
							$team_member_image = get_sub_field('team_member_image');
							$team_member_name = get_sub_field('team_member_name');
							$team_member_designation = get_sub_field('team_member_designation');
							$team_member_detail = get_sub_field('team_member_detail');
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
									<span><?php echo esc_html( $team_member_designation); ?></span>
								<?php } ?>
								<?php if( $team_member_detail ){ ?>
									<p><?php echo esc_html( $team_member_detail); ?></p>
								<?php } ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
    	</div>
  	</div>
</section>


<section class="team <?php if( isset( $choose_team_type ) ){  echo $choose_team_type['value']; } ?> light">
    <div id="particles-gray-8"></div>
    <div class="container">
        <div class="team-wrapper">
            <div class="team-content">
				<?php if( $business_team_title ){ ?>
					<h2><?php echo esc_html( $business_team_title ); ?></h2>
				<?php } ?>
            </div>
            <div class="team-grid">
			  	<?php if( have_rows( 'business_team_member' ) ): ?>
					<?php while( have_rows( 'business_team_member' ) ) : the_row(); ?>
						<?php 
							$team_member_image = get_sub_field('team_member_image');
							$team_member_name = get_sub_field('team_member_name');
							$team_member_designation = get_sub_field('team_member_designation');
							$team_member_detail = get_sub_field('team_member_detail');
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
									<span><?php echo esc_html( $team_member_designation); ?></span>
								<?php } ?>
								<?php if( $team_member_detail ){ ?>
									<p><?php echo esc_html( $team_member_detail); ?></p>
								<?php } ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
        </div>
    </div>
</section>
<?php get_footer(); ?>