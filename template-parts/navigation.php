<nav class="nav">
	<div class="nav-brand">
        <a href="<?php bloginfo( 'url' ); ?>">
            <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo();
            } else { ?>
                <h3><?php echo get_bloginfo( 'name' ); ?></h3>
            <?php } ?>
		</a>
	</div>
    <?php
        $args = array(
            'menu'           => 'Primary Menu',
            'theme_location' => 'primary_menu',
            'menu_class'     => 'nav-bar',
            'container'      => false,
            'add_li_class'   => 'nav-bar-item',
        );
        wp_nav_menu( $args );
    ?>
	<div class="offcanvas-toggle">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</div>
</nav>

<!-- Offcanvas Navigation Start -->
<nav class="offcanvas">
	<div class="offcanvas-close"></div>
    <?php
        wp_nav_menu( array(
            'menu'           => 'Primary Menu',
            'theme_location' => 'primary_menu',
            'menu_class'     => 'offcanvas-menu',
        ) );
    ?>
</nav>
<!-- Offcanvas Navigation End -->
<div class="offcanvas-overlay"></div>
<main>