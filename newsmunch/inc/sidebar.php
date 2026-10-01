<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function newsmunch_widgets_init() {	
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name' => __( 'WooCommerce Widget Area', 'newsmunch' ),
			'id' => 'newsmunch-woocommerce-sidebar',
			'description' => __( 'This Widget area for WooCommerce Widget', 'newsmunch' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<div class="widget-header"><h4 class="widget-title">',
			'after_title' => '</h4></div>',
		) );
	}
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'newsmunch' ),
		'id' => 'newsmunch-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'newsmunch' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="widget-header"><h4 class="widget-title">',
		'after_title' => '</h4></div>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Front Page Left Sidebar Section', 'newsmunch'),
		'id'            => 'frontpage-left-sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-header"><h4 class="widget-title">',
		'after_title'   => '</h4></div>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Front page Content Section', 'newsmunch'),
		'id'            => 'frontpage-content',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="widget-header"><h4 class="widget-title">',
		'after_title'   => '</h4></div>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Front Page Right Sidebar Section', 'newsmunch'),
		'id'            => 'frontpage-right-sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-header"><h4 class="widget-title">',
		'after_title'   => '</h4></div>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Menu Side Docker Widget Area', 'newsmunch'),
		'id'            => 'menu-side-docker-area',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-header"><h4 class="widget-title">',
		'after_title'   => '</h4></div>',
	) );
	
	
	
	$newsmunch_footer_widget_column = get_theme_mod('newsmunch_footer_widget_column','4');
	for ($i=1; $i<=$newsmunch_footer_widget_column; $i++) {
		register_sidebar( array(
			'name' => __( 'Footer  ', 'newsmunch' )  . $i,
			'id' => 'newsmunch-footer-widget-' . $i,
			'description' => __( 'The Footer Widget Area', 'newsmunch' )  . $i,
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<div class="widget-header"><h4 class="widget-title">',
			'after_title' => '</h4></div>',
		) );
	}
}
add_action( 'widgets_init', 'newsmunch_widgets_init' );