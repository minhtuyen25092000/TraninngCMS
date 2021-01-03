<?php
define('TPL_DIR_URI', get_template_directory_uri());

function svh_enqueue_styles(){
	wp_enqueue_style('bootstrap', TPL_DIR_URI . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('all', TPL_DIR_URI . '/assets/css/all.css');
	wp_enqueue_style('custom-animate', TPL_DIR_URI . '/assets/css/custom-animate.css');
	wp_enqueue_style('material', TPL_DIR_URI . '/assets/css/material-design-iconic-font.min.css');
	wp_enqueue_style('progressbar', TPL_DIR_URI . '/assets/css/progressbar.css');
	wp_enqueue_style('responsive', TPL_DIR_URI . '/assets/css/responsive.css');
	wp_enqueue_style('slick', TPL_DIR_URI . '/assets/css/slick.min.css');
	wp_enqueue_style('style', TPL_DIR_URI . '/assets/css/style.css');
	wp_enqueue_style('swiper', TPL_DIR_URI . '/assets/css/swiper.min.css');
	wp_enqueue_style('venobox', TPL_DIR_URI . '/assets/css/venobox.css');
	wp_enqueue_style('trangchu', TPL_DIR_URI . '/assets/css/trangchu.css');
	wp_enqueue_style('core', TPL_DIR_URI . 'style.css');
	
}
add_action('wp_enqueue_scripts', 'svh_enqueue_styles');

function svh_enqueue_scripts(){
    wp_enqueue_script('popper', TPL_DIR_URI . 'assets/vendor/popper/popper.min.js', ['jquery']);
    wp_enqueue_script('bootstrap', TPL_DIR_URI . 'assets/vendor/bootstrap/bootstrap.min.js', ['jquery']);
}
add_action('wp_enqueue_scripts', 'svh_enqueue_scripts');

function register_svh_menus() {
    register_nav_menus([
		'main-menu' => __( 'Main Menu' )
    ]);
}
add_action('init', 'register_svh_menus');

function selected_class($classes, $item){
	if(in_array('current-menu-item', $classes)){
		$classes[] = 'selected';
	}
	return $classes;
}
add_filter('nav_menu_css_class','selected_class', 10,2);

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );
# Khai báo hằng số TPL_DIR bằng đường dẫn đến thư mục theme
define('TPL_DIR', get_stylesheet_directory());

# Yêu cầu load file class-wp-bootstrap-navwalker.php
function register_navwalker(){
	require_once TPL_DIR . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Thêm VNĐ cho woo
add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
 $currencies['vnd'] = __( 'Việt Nam Đồng', 'woocommerce' );
 return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
 switch( $currency ) {
 case 'vnd': $currency_symbol = 'VNĐ'; break;
 }
 return $currency_symbol;
}
//thêm css
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_stylesheet_directory_uri() . '/assets/css/woocommerce.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_theme_support('woocommerce');

add_action( 'wp_enqueue_scripts', 'quadlayers_enqueue_css' );

function quadlayers_enqueue_css(){    
    wp_enqueue_style(  'checkout_style',
        get_stylesheet_directory_uri() . '/assets/css/checkout-style.css'
    );
}
/*---------------------------------------------------------------*/
	add_action('wp_ajax_Post_filters', 'Post_filters');
	add_action('wp_ajax_nopriv_Post_filters', 'Post_filters');
	function Post_filters() {
	    if(isset($_POST['data'])){
		    $data = $_POST['data']; // nhận dữ liệu từ client
		    echo '<ul style="background-color: #e6e8e8;">';
		    $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&s='.$data);
		    global $wp_query; $wp_query->in_the_loop = true;
		    while ($getposts->have_posts()) : $getposts->the_post();
		        echo '<li><a style=" color: black;
				padding-left: 10px;" target="_blank" href="'.get_the_permalink().'">'.get_the_title().'</a></li>'; 
		    endwhile; wp_reset_postdata();
		    echo '</ul>';
		    die(); 
	    }
	}
	function themename_custom_logo_setup() {
		$defaults = array(
		'height'      => 80,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	   'unlink-homepage-logo' => true, 
		);
		add_theme_support( 'custom-logo', $defaults );
	   }
	   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );