<?php

function mtc_theme_support(){
    add_theme_support('title-tag'); // title of website page
    add_theme_support('custom-logo'); // logo image
    add_theme_support('post-thumbnails'); // post image
}
add_action('after_setup_theme', 'mtc_theme_support');


function mtc_menus(){
    $locations = array(
        'primary' => 'Desctop Primary Top menu',
        'footer' => 'footer menu',
    );
    $field_options = array(
        'label' => 'Active',
        'type' => 'checkbox',
        'default' => '',
    );
    register_nav_menus($locations);
}

add_action('init','mtc_menus');

// function mtc_register_styles(){
//     $version = wp_get_theme()->get('Version');
//     wp_enqueue_style('mtc-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css', array(), '5.0.2' ,'all');
//     // $lang = get_locale();
//     // if($lang == 'en_US'){
//     // } else{
//     //   wp_enqueue_style('mtc-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.rtl.min.css', array(), '5.0.2' ,'all');
//     // }
//     wp_enqueue_style('mtc-fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' ,'all');
//     wp_enqueue_style('mtc-starRating', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/css/star-rating.min.css', array(), '4.1.2' ,'all');
//     wp_enqueue_style('mtc-starRatingTheme', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/themes/krajee-fas/theme.min.css', array(), '4.1.2' ,'all');
//     wp_enqueue_style('mtc-starRatingSVGTheme', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/themes/krajee-svg/theme.min.css', array(), '4.1.2' ,'all');
//     wp_enqueue_style('mtc-owlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '2.3.4' ,'all');
//     wp_enqueue_style('mtc-aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4' ,'all');
//     wp_enqueue_style('mtc-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1' ,'all');
//     wp_enqueue_style('mtc-fontType', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;900&display=swap', array(), '1.0' ,'all');
// 	wp_enqueue_style('mtc-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), '1.8' ,'all');
// 	wp_enqueue_style('mtc-slickTh', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array(), '1.8' ,'all');
// 	wp_enqueue_style('mtc-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', array(), '3.5' ,'all');
//     wp_enqueue_style('mtc-style', get_template_directory_uri() .'/assets/css/style.min.css', array(), '1.0.0' ,'all');

// }

// add_action('wp_enqueue_scripts', 'mtc_register_styles');


// function mtc_register_scripts(){
//     wp_enqueue_script('mtc-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js',array(), '3.5.1', true);
//     wp_enqueue_script('mtc-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js',array(), '1.16.1', true);
//     wp_enqueue_script('mtc-bootstrap-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js',array(), '5.0.2', true);
//     wp_enqueue_script('mtc-starRating', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/js/star-rating.min.js',array(), '4.1.2', true);
//     wp_enqueue_script('mtc-starRatingTheme', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/themes/krajee-fas/theme.min.js',array(), '4.1.2', true);
//     wp_enqueue_script('mtc-aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js',array(), '2.3.4', true);
//     wp_enqueue_script('mtc-lazysizes', 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js',array(), '5.3.2', true);
//     wp_enqueue_script('mtc-owlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',array(), '2.3.4', true);
// 	wp_enqueue_script('slickjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',array(), '1.8', true);
// 	wp_enqueue_script('slickjs', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js',array(), '3.5', true);
	
//     wp_enqueue_script('mtc-sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11',array(), '1.0.0', true);
//     wp_enqueue_script('mtc-mainScript', get_template_directory_uri() . '/assets/js/main.js',array(), '1.0.0', true);

// }

// add_action('wp_enqueue_scripts', 'mtc_register_scripts');

/* Woocommerce */
if(class_exists('Woocommerce')){
    
    /* Woocommerce support */
    function mtc_add_woocommerce_support(){
        add_theme_support('woocommerce');
    }
    add_action('after_setup_theme', 'mtc_add_woocommerce_support');

    // Remove Woocommerce style
    // add_filter('woocommerce_enqueue_styles','__return_false');

    //Remove Shop Title
    add_filter('woocommerce_show_page_title','__return_false');
    add_filter( 'show_admin_bar', '__return_false' );

    // Add Support
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}

add_action('init', function(){
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
});

function get_products($atts ) {
    extract( shortcode_atts( array(
        'type' => 'total_sales'

    ), $atts ) );
    $args = array(
        'post_type'=> 'product',
        'posts_per_page' => 2,
        'meta_key'  => $type,
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) {
        $loop->the_post();
        global $product;
        $product_id = $product->ID;
        $product_title = get_the_title();
        $product_image = get_the_post_thumbnail_url($product_id, 'post-thumbnail');
        $product_link = get_permalink($product_id);
        $currency = get_woocommerce_currency_symbol();
        $product_price = get_post_meta(get_the_ID(), '_regular_price', true);
        $product_sale = get_post_meta(get_the_ID(), '_sale_price', true);
        if($product_sale){
            $product_price_precent = round($product_sale / $product_price * 100);
        }
    } 
    $output = '<div class="othershortcodecontent">Test</div>';
    return $output;
}
add_shortcode( 'myProduct', 'get_products' );


// woocommerce defaults breadcrumb
add_filter('woocommerce_breadcrumb_defaults', 'mtc_woocommerce_breadcrumbs');
function mtc_woocommerce_breadcrumbs()
{
    return array(
        'delimiter' => '',
        'wrap_before' => '<nav aria-label="breadcrumb" itemprop="breadcrumb"><ol class="breadcrumb mb-0 text-capitalize">',
        'wrap_after' => '</ol></nav>',
        'before' => '<li class="breadcrumb-item active">',
        'after' => '</li>',
        'home' => _x('Home', 'breadcrumb', 'woocommerce'),

    );
}

//Sort by
add_filter( 'woocommerce_catalog_orderby', 'mtc_change_sorting_options_order', 10, 1 );

function mtc_change_sorting_options_order( $options ){
    $options = array(
        'menu_order' => __( 'Default sorting', 'woocommerce' ), // you can change the order of this element too
		'price'      => __( 'Price (Lowest Price)', 'woocommerce' ), // I need sorting by price to be the first
		'price-desc' => __( 'Price (highest Price) ', 'woocommerce' ),
        'date'       => __( 'Newest', 'woocommerce' ), // Let's make "Sort by latest" the second one
		'popularity' => __( 'Popularity', 'woocommerce' ),
		
	);
	
	return $options;
}

function get_star_rating()
{
    global $woocommerce, $product;
    $average = $product->get_average_rating();
    echo '<input id="input-1" name="input-1" class="rating rating-loading" value="'.$average.'" data-min="0" data-max="5" data-step="0.1" data-theme="krajee-fas">';
};

add_shortcode('woocommerce_rating', 'get_star_rating' );

// Update Cart Without reload Page
function enqueue_woocommerce_ajax_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('wc-ajax-update-cart', get_stylesheet_directory_uri() . '/js/ajax-update-cart.js', array('jquery'), '1.0', true);
    wp_localize_script('wc-ajax-update-cart', 'wc_ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'security' => wp_create_nonce('wc-ajax-update-cart-nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_woocommerce_ajax_scripts');

function update_cart_ajax() {
    check_ajax_referer('wc-ajax-update-cart-nonce', 'security');

    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    $quantity = (int) $_POST['quantity'];

    if ($cart_item_key && $quantity >= 0) {
        WC()->cart->set_quantity($cart_item_key, $quantity, true);
    }

    wp_send_json_success();
}
add_action('wp_ajax_update_cart', 'update_cart_ajax');
add_action('wp_ajax_nopriv_update_cart', 'update_cart_ajax');


add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 12 );
function new_loop_shop_per_page( $cols ) {
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}


// Saeed Func