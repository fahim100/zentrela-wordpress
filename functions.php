<?php 

if( site_url("http://localhost/zentrela") ){
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme() -> get( "Version" ) );
}

function zentrela_load_assets(){
    load_theme_textdomain( "zentrela" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( "custom-logo" );
    add_theme_support( "custom-background" );
    register_nav_menus( 
        array(
            'primary_menu' => __( 'Primary Menu', 'zentrela' ),
            'footer_menu'  => __( 'Footer Menu', 'zentrela' ),
        ) 
    );
    add_theme_support( "post-formats", array("image", "quote", "video", "audio") );
}
add_action( "after_setup_theme", "zentrela_load_assets" );

function zentrela_assets(){

    // wp_enqueue_style( 'sweetalert-css', get_template_directory_uri() . '/assets/plugins/sweet-alert/sweetalert2.min.css' );
    wp_enqueue_style( 'critical-css', get_template_directory_uri() . '/assets/css/critical.css' );
    wp_enqueue_style( 'non-critical-css', get_template_directory_uri() . '/assets/css/non-critical.css' );
    // main css
    wp_enqueue_style( "style", get_stylesheet_uri(), null, VERSION );

    // main js
    wp_enqueue_script( "headroom-js", get_template_directory_uri() . "/assets/plugins/headroom/headroom.js", array( 'jquery' ), VERSION, true );
    wp_enqueue_script( "aos-js", get_template_directory_uri() . "/assets/plugins/aos/aos.js", array( 'jquery' ), VERSION, true );
    wp_enqueue_script( "tweenmax-js", get_template_directory_uri() . "/assets/plugins/tweenmax/TweenMax.min.js", array( 'jquery' ), VERSION, true );
    wp_enqueue_script( "particles-js", get_template_directory_uri() . "/assets/plugins/particles/particles.min.js", array( 'jquery' ), VERSION, true );
    wp_enqueue_script( "slick-js", get_template_directory_uri() . "/assets/plugins/slick/slick.min.js", array( 'jquery' ), VERSION, true );
    // wp_enqueue_script( 'sweetalert-js', get_template_directory_uri() . '/assets/plugins/sweet-alert/sweetalert2.min.js', array( 'jquery' ), VERSION, true );
    wp_enqueue_script( "main-js", get_template_directory_uri() . "/assets/js/script.js", array( 'jquery' ), VERSION, true );
}

add_action( "wp_enqueue_scripts", "zentrela_assets" );

// Add classes in navigation
function zentrela_add_class( $classes, $item, $args ) {
    
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter( "nav_menu_css_class", "zentrela_add_class", 1, 3 );

function zentrela_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer About Widget', 'zentrela' ),
        'id'            => 'footer_about_widget',
        'description'   => __( 'Widgets in this area will be shown under footer about widget.', 'zentrela' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Contact Info', 'zentrela' ),
        'id'            => 'footer_contact_info',
        'description'   => __( 'Widgets in this area will be shown under footer contact info.', 'zentrela' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'zentrela_widgets' );

