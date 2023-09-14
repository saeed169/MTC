<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
* Hook: woocommerce_before_single_product.
*
* @hooked woocommerce_output_all_notices - 10
*/
// do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$product_images = $product->get_gallery_image_ids();

?>

<div id="pro-details-content">
    <div class="top-breadcrumb py-3">
        <div class="container">
            <?php do_action( 'woocommerce_before_main_content' ); ?>
        </div>
    </div>

    <div class="container">
        <div id="product-main-details" class="bg-white p-5 mb-5">
            <div class="row" data-aos="fade-in">
                <div class="col-lg-6" <?php wc_product_class( '', $product ); ?>>
                    <div id="product-slider" class="mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="slider slider-nav">

                                    <?php 
                                            if (!empty($product_images)) :
                                                foreach ($product_images as $image_id) :
                                                    $image_url = wp_get_attachment_url($image_id);
                                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
										?>
                                    <div>
                                        <a href="<?= $image_url;?>" class="border">
                                            <img src="<?= $image_url;?>" alt="<?= $image_alt;?>">
                                        </a>
                                    </div>

                                    <?php endforeach;endif;?>

                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="slider slider-single">

                                    <?php 
                                            if (!empty($product_images)) :
                                                foreach ($product_images as $image_id) :
                                                    $image_url = wp_get_attachment_url($image_id);
                                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
										?>
                                    <div>
                                        <a href="<?= $image_url;?>" data-fancybox="gallery">
                                            <img src="<?= $image_url;?>" alt="<?= $image_alt;?>">
                                        </a>
                                    </div>

                                    <?php endforeach;endif;?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info h-100">
                        <div class="p-4">
                            <div class="name">
                                <h5 class="card-title text-lightGray fw-600 mb-0"> <?php the_title(); ?></h5>
                            </div>
                            <div class="d-flex align-items-center my-3">
                                <div class="rating-pro">
                                    <input id="input-11" name="input-11" class="rating rating-loading" value="3.5"
                                        data-min="0" data-max="5" data-step="0.1" data-theme="krajee-fas">

                                </div>

                                <div class="reviews-count ms-1">
                                    <span class="fs-7">
                                        <!-- (50) Reviews -->
                                        <?php
                                                if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' && ( $count = $product->get_rating_count() ) )
                                                    printf( _n( '%s review ', '%s reviews', $count, 'woocommerce' ), $count, '' );
                                                else
                                                    _e( 'Reviews', 'woocommerce' );
                                            ?>
                                        <?php if(!$count){echo "(0)";};?>
                                    </span>
                                </div>
                            </div>
                            <div class="price">
                                <?php
                                        $currency = get_woocommerce_currency_symbol();
                                        $price = get_post_meta( get_the_ID(), '_regular_price', true);
                                        $sale = get_post_meta( get_the_ID(), '_sale_price', true);
                                    ?>
                                <span class="current fw-bold me-2 text-darkGray"><?= $sale . " " . $currency;?></span>
                                <span
                                    class="old text-decoration-line-through fs-7"><?= $price . " " . $currency;?></span>
                            </div>

                            <div class="desc fw-400 py-4 text-lightGray">
                                <p>
                                    <?php the_excerpt();?>
                                </p>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-3 product-btns">
                                <div class="quantity">

                                    <input type="button" value="-" class="qtyminus minus cart-qty-btn">
                                    <input type="text" name="quantity" data-id="443" readonly="" value="2"
                                        class="qty cart-qty-input">
                                    <input type="button" value="+" class="qtyplus plus cart-qty-btn">
                                    <br>

                                    <?//= do_shortcode('[custom_quantity_input]');?>

                                </div>
                                <div>
                                    <!-- <a href="javascript:void(0);" class="btn btn-wishlist"> -->
                                    <!-- <i class="fas fa-heart fa-lg"></i> -->

                                    <!-- </a> -->
                                    <a role="button" tabindex="0" name="add-to-wishlist" aria-label="Add to Wishlist"
                                        class="tinvwl_add_to_wishlist_button tinvwl-icon-heart tinvwl-position-after tinvwl-loop tinvwl-product-in-list
                                            btn btn-wishlist"
                                        data-tinv-wl-list="
                                            {&quot;1&quot;:{&quot;ID&quot;:1,&quot;title&quot;:&quot;&quot;,&quot;status&quot;:&quot;share&quot;,&quot;share_key&quot;:&quot;2b816f&quot;,&quot;in&quot;:[0]}}"
                                        data-tinv-wl-product="12" data-tinv-wl-productvariation="0"
                                        data-tinv-wl-productvariations="[]" data-tinv-wl-producttype="simple"
                                        data-tinv-wl-action="addto">
                                        <i class="fas fa-heart fa-lg"></i>
                                    </a>

                                </div>
                                <?php
                                        global $product;

                                        echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                            sprintf( '<a href="%s" class="btn btn-primary add-to-cart px-5" rel="nofollow" data-product_id="%s" data-product_sku="%s">
                                            <i class="fas fa-shopping-cart me-2" loading="lazy"></i>
                                            Add To Cart
                                            </a>',
                                                esc_url( $product->add_to_cart_url() ),
                                                esc_attr( $product->id ),
                                                esc_attr( $product->get_sku() ),
                                                $product->is_purchasable() ? 'add_to_cart_button' : '',
                                                esc_attr( $product->product_type ),
                                                esc_html( $product->add_to_cart_text() )
                                            ),
                                        $product );
                                    ?>
                                <div>
                                    <!-- <a href="javascript:void(0);" class="btn btn-primary add-to-cart px-5">
                                            <span class="me-1">
                                                <img src="assets/images/icons/shopping-basket-icon.svg"
                                                    alt="basket icon" loading="lazy"></span>
                                            <span>Add To Cart</span>
                                        </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="product-tabs" class="bg-white py-3">
            <ul class="nav nav-tabs mb-3" id="product-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link me-3 active" id="product-details-tab" data-bs-toggle="pill"
                        data-bs-target="#product-details" type="button" role="tab" aria-controls="product-details"
                        aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link me-3" id="product-specifications-tab" data-bs-toggle="pill"
                        data-bs-target="#product-specifications" type="button" role="tab"
                        aria-controls="product-specifications" aria-selected="false">Specifications</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link me-3" id="product-reviews-tab" data-bs-toggle="pill"
                        data-bs-target="#product-reviews" type="button" role="tab" aria-controls="product-reviews"
                        aria-selected="false">Reviews </button>
                </li>
            </ul>
            <div class="tab-content" id="product-tabContent">
                <div class="tab-pane fade show active px-3 px-md-5" id="product-details" role="tabpanel">
                    <div class="details">
                        <h6 class="fw-bold mb-3">Product Overview:</h6>
                        <p>
                            Caramel Hard Candies is a premium grocery item that promises to elevate your
                            culinary
                            experiences. Whether you're an enthusiastic home cook, a seasoned chef, or simply
                            someone who appreciates the pleasure of good food, this product is perfect for you.
                            It's
                            our way of bringing a touch of excellence to your kitchen and dining table.
                        </p>
                        <h6 class="fw-bold my-3">Key Features:</h6>
                        <ol>
                            <li>Superior Quality: We believe in delivering nothing short of perfection. That's
                                why
                                [Product Name] is made from the finest ingredients, carefully selected by our
                                experts to meet the highest standards of quality.</li>
                            <li>Unmatched Taste: Indulge your taste buds with the exquisite flavors of [Product
                                Name]. It's designed to add a burst of taste and richness to your dishes, making
                                every meal a delightful experience.</li>
                            <li>Health and Nutrition: We understand the importance of a healthy lifestyle, and
                                [Product Name] reflects our commitment to your well-being. Packed with essential
                                nutrients, this product is a wholesome addition to your daily diet.</li>
                            <li>Versatility: From breakfast to dinner and everything in between, [Product Name]
                                proves to be incredibly versatile. You can use it in a wide range of recipes,
                                allowing you to explore your culinary creativity to the fullest.</li>
                            <li>Sustainable and Ethical: We care about our planet, and that's why [Product Name]
                                is
                                sourced responsibly and sustainably. By choosing this product, you are
                                contributing
                                to a greener and more ethical future.</li>
                        </ol>
                        <p>
                            How to Use: [Product Name] can be used in various ways to enhance your dishes.
                            Sprinkle
                            it on salads, soups, and stews for an added layer of flavor. Incorporate it into
                            your
                            baking recipes for a unique twist. The possibilities are endless, and we encourage
                            you
                            to experiment and enjoy!
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-specifications" role="tabpanel">
                    <div class="d-flex justify-content-between py-3 px-5">
                        <span>Unit</span>
                        <span>45</span>
                    </div>
                    <div class="d-flex justify-content-between py-3 px-5">
                        <span>Brand</span>
                        <span>Pampers premium</span>
                    </div>
                </div>
                <div class="tab-pane fade px-3 px-md-5" id="product-reviews" role="tabpanel">
                    <div class="reviews">
                        <h6 class="text-darkGray fw-600">Rating & Reviews </h6>
                        <div class="product-reviews">
                            <div class="overall text-center pb-4">
                                <h5 class="fs-4 text-darkGray mb-0 fw-bold">4.5</h5>
                                <div class="rating-pro">
                                    <input id="input-111" name="input-111" class="review-rating rating-loading"
                                        value="4.5" data-min="0" data-max="5" data-step="0.1" data-theme="krajee-fas"
                                        readonly>
                                    <!-- for arabic-ver dir="rtl" -->
                                </div>
                                <p class="text-lightGray fs-7 fw-400 mb-0">Based on 46 ratings</p>
                            </div>
                            <h6 class="text-darkGray fw-600 my-4">16 Customer Reviews</h6>
                            <div class="users-reviews">
                                <div class="review mb-4 ">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="d-flex gap-2 mb-2">
                                            <div class="img">
                                                <img src="assets/images/loader.gif"
                                                    data-src="assets/images/reviews/client-1.png" alt="client image"
                                                    class="lazyload">
                                            </div>
                                            <div class="details">
                                                <h6 class="text-darkGray mb-0">Ali ibraheem</h6>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <div class="rating-pro">
                                                        <input id="input-22" name="input-22"
                                                            class="rating review-rating rating-loading" value="4.5"
                                                            data-min="0" data-max="5" data-step="0.1"
                                                            data-theme="krajee-fas" readonly>
                                                        <!-- for arabic-ver dir="rtl" -->
                                                    </div>
                                                    <p class="fs-7 text-darkGray fw-600 mb-0">Great</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="time fs-7 text-lightGray fw-400">On 16 July 2023</p>
                                        </div>
                                    </div>
                                    <p class="fs-7 text-lightGray fw-400">It helps us in making healthy food. I
                                        like
                                        it</p>
                                </div>
                                <div class="review mb-4 ">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="d-flex gap-2 mb-2">
                                            <div class="img">
                                                <img src="assets/images/loader.gif"
                                                    data-src="assets/images/reviews/client-2.png" alt="client image"
                                                    class="lazyload">
                                            </div>
                                            <div class="details">
                                                <h6 class="text-darkGray mb-0">Maryem Ali</h6>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <div class="rating-pro">
                                                        <input id="input-23" name="input-23"
                                                            class="rating review-rating rating-loading" value="4.5"
                                                            data-min="0" data-max="5" data-step="0.1"
                                                            data-theme="krajee-fas" readonly>
                                                        <!-- for arabic-ver dir="rtl" -->
                                                    </div>
                                                    <p class="fs-7 text-darkGray fw-600 mb-0">It is safe in oil,
                                                        of
                                                        course, and it is healthy</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="time fs-7 text-lightGray fw-400">On 16 July 2023</p>
                                        </div>
                                    </div>
                                    <p class="fs-7 text-lightGray fw-400">It is excellent for potatoes and the
                                        brown
                                        ones have a very good crunch. I swear to God they are big and wide</p>
                                </div>
                                <div class="review mb-4 ">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <div class="d-flex gap-2 mb-2">
                                            <div class="img">
                                                <img src="assets/images/loader.gif"
                                                    data-src="assets/images/reviews/client-3.png" alt="client image"
                                                    class="lazyload">
                                            </div>
                                            <div class="details">
                                                <h6 class="text-darkGray mb-0">Mostafa sanad</h6>
                                                <div class="d-flex flex-wrap align-items-center gap-2">
                                                    <div class="rating-pro">
                                                        <input id="input-24" name="input-24"
                                                            class="rating review-rating rating-loading" value="5"
                                                            data-min="0" data-max="5" data-step="0.1"
                                                            data-theme="krajee-fas" readonly>
                                                        <!-- for arabic-ver dir="rtl" -->
                                                    </div>
                                                    <p class="fs-7 text-darkGray fw-600 mb-0">Very Good</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="time fs-7 text-lightGray fw-400">On 16 July 2023</p>
                                        </div>
                                    </div>
                                    <p class="fs-7 text-lightGray fw-400">Very healthy and quick to prepare food
                                    </p>
                                </div>
                            </div>
                            <div id="pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link page-prev"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                                        <li class="page-item">
                                            <a class="page-link page-next" href="#"><i
                                                    class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>