<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

// defined( 'ABSPATH' ) || exit;
?>

<div class="top-breadcrumb py-3">
	<div class="container">
		<?php do_action( 'woocommerce_before_main_content' ); ?>			
	</div>
</div>

<div id="cart-content" class="pb-5">
	<div class="container">
		<h6 class="text-lightGray mb-3">There are <span class="text-primary"><?= count( WC()->cart->get_cart() ) ?></span> products in your cart</h6>
		<div class="row">
			<div class="col-xl-8 col-lg-9">
				<form class="woocommerce-cart-form new_cart" action="<?= esc_url( wc_get_cart_url() ); ?>" method="post">
					<div id="cart-list">
						<table class="table">
							<thead class="thead-dark">
							<tr>
								<th> <?php esc_html_e( 'Product', 'woocommerce' ); ?> </th>
								<th> <?php esc_html_e( 'Price', 'woocommerce' ); ?> </th>
								<th> <?php esc_html_e( 'Quantity', 'woocommerce' ); ?> </th>
								<th> <?php esc_html_e( 'Subtotal', 'woocommerce' ); ?> </th>
								<th></th>
							</tr>
							</thead>
							<tbody>
								<?php
									foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
										$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
										$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
										$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
										$currency = get_woocommerce_currency_symbol();
										$thumbnail_id = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image_id(), $cart_item, $cart_item_key );
										$thumbnail_url = wp_get_attachment_image_url( $thumbnail_id, 'full' );

										if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
											$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
								?>
									<tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
										<td class="name" data-column="Product">
											<a href="<?= $product_permalink; ?>" class="d-flex">
												<span class="img d-flex align-items-center justify-content-center me-2">
													<img src="assets/images/loader.gif" data-src="<?= $thumbnail_url;?>" alt="product" class="lazyload img-fluid">
												</span>
												<h3 class="fs-6 text-lightGray mt-4 fw-600">
													<?= $product_name; ?>
												</h3>
											</a>
										</td>
										<td class="price" data-column="Price">
											<?php 
												if($_product->get_sale_price() != '') :
											?>
												<span class="current me-3 text-lightGray">
													<?=
														$currency.' '.$_product->get_sale_price();
													?>
												</span>
											<?php endif; ?>
											<?php 
												if($_product->get_regular_price() != '') :
											?>
												<span class="old d-lg-block d-xl-inline-block <?php if($_product->get_sale_price() != '') {echo 'text-decoration-line-through';}  ?> text-gray fs-6 fw-400">
													<?= 
														$currency.' '.$_product->get_regular_price();
													?>
												</span>
											<?php endif; ?>
										</td>
										<td class="quantity" data-column="Quantity">
											<div>
												<input type="button" value="-" class="qtyminus minus cart-qty-btn">
												<input type="text" name="<?= "cart[{$cart_item_key}][qty]";?>" data-id="443" readonly="" 
													value="<?= $cart_item['quantity']; ?>" class="qty cart-qty-input"
													pro_price="<?php if($_product->get_sale_price()) echo $_product->get_sale_price(); else echo $_product->get_regular_price(); ?>">
												<input type="button" value="+" class="qtyplus plus cart-qty-btn">
											</div>
										</td>
										<td class="total text-lightGray fw-600" data-column="Total">
											<?php
												echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), '', $cart_item_key );
											?>
										</td>
										<td>
											<?php
												echo apply_filters(
													'woocommerce_cart_item_remove_link',
													sprintf(
														'<a href="%s" aria-label="%s" data-product_id="%s" data-product_sku="%s" class="text-red"><i class="fas fa-trash-can fa-lg"></i></a>',
														esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
														esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
														esc_attr( $product_id ),
														esc_attr( $_product->get_sku() )
													),
													$cart_item_key
												);
											?>
										</td>
									</tr>
									<?php
									}
								}
								?>
							</tbody>
						</table>
					</div>
				</form>
			</div>
			<div class="col-xl-4 col-lg-3">
				<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

				<div class="cart-collaterals">
					<?php
						/**
						 * Cart collaterals hook.
						 *
						 * @hooked woocommerce_cross_sell_display
						 * @hooked woocommerce_cart_totals - 10
						 */
						do_action( 'woocommerce_cart_collaterals' );
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
