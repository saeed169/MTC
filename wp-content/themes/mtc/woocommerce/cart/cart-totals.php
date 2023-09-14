<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>

<?php do_action( 'woocommerce_before_cart_totals' ); ?>

<div id="order-summery" class="bg-white p-4 mt-3 mt-lg-0">
	<h3 class="fs-5 fw-600 text-darkGray"><?php esc_html_e( 'Order Summary', 'woocommerce' ); ?></h3>
	<div class="deatils">
		<p class="d-flex justify-content-between pt-3 mb-3 fw-500">
			<span class="text-lightGray"><?php esc_html_e( 'Subtotal', 'woocommerce' );?></span>
			<span><?php wc_cart_totals_subtotal_html(); ?></span>
		</p>
		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<p class="d-flex justify-content-between mb-3 fw-500">
				<span class="text-lightGray">Discount</span>
				<span class="text-success"><?php wc_cart_totals_coupon_html( $coupon ); ?></span>
			</p>
		<?php endforeach; ?>

		<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
			<p class="d-flex justify-content-between pt-3 mb-0 fw-600 border-top">
				<span class="text-gray"><?php esc_html_e( 'Total', 'woocommerce' ); ?></span>
				<span><?php wc_cart_totals_order_total_html(); ?></span>
			</p>
		<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
	</div>
</div>
<div>
	<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
</div>

<?php do_action( 'woocommerce_after_cart_totals' ); ?>


