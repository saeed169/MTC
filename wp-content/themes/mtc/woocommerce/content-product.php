<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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
$uri = get_template_directory_uri();
global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-xl-4 col-sm-6 mb-4">
	<div class="card px-3 py-5 border-0 h-100" >
		<div class="heart-like-button"> 
			<i class="fa fa-heart fa-lg"></i>
		</div>
		<?php 
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

			if($product_sale) :
		?>
			<div class="discount"><?= $product_price_precent.'%'; ?> Off</div>
		<?php endif; ?>

		<div class="img">
			<a href="<?= $product_link; ?>">
				<img src="<?= $uri . '/assets/images/loader.gif'?>" data-src="<?= $product_image; ?>" class="card-img-top lazyload" alt="product-1">
			</a>
		</div>
		<div class="card-body px-0 pb-0 h-100">
			<div class="d-flex flex-column justify-content-between h-100">
				<div>
					<h6 class="card-title"><a href="<?= $product_link; ?>" class="text-lightGray "><?= $product_title; ?></a></h6>
					<div class="d-flex align-items-center mb-2">
					<?php if ($average = $product->get_average_rating()) : ?>
						<div class="rating-pro">
							<input id="input-1" name="input-1" class="rating rating-loading" value="<?= $average; ?>" data-min="0" data-max="5" data-step="0.1" data-theme="krajee-fas" disabled>
							<!-- <?php echo do_shortcode('[woocommerce_rating]') ?> -->
						</div>
						<div class="reviews-count ms-1">
							<a href="#">(<?= $product->get_rating_count();?>) Reviews</a>
						</div>
						
					<?php endif; ?>
					</div>
					<div class="price">
						<?php 
							if($product_sale) :
						?>
							<span class="current fw-bold me-2 text-darkGray"><?= $product_sale . $currency ?></span>
							<span class="old text-decoration-line-through fs-7"><?= $product_price . $currency ?></span>
						<?php else: 
						?>
							<span class="current fw-bold me-2 text-darkGray"><?= $product_price . $currency ?></span>
						<?php endif; ?>
					</div>
				</div>
				<div>
					<?php
						echo apply_filters(
							'woocommerce_loop_add_to_cart_link',
							sprintf(
								'<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="btn add-to-cart ajax_add_to_cart border-0 w-100 mt-4 py-2">
									<span class="me-1"><img src="%s" alt="basket icon" loading="lazy"></span>
									<span>Add To Cart</span>
								</a>
								',
								esc_url($product->add_to_cart_url()),
								esc_attr($product->id),
								esc_attr($product->get_sku()),
								esc_attr($uri . '/assets/images/icons/shopping-basket-icon.svg'),
								$product->is_purchasable() ? 'add_to_cart_button' : '',
								esc_attr($product->product_type),
								esc_html($product->add_to_cart_text())
							),
							$product
						);
					?>
				</div>
			</div>
			
		</div>
	</div>
</div>