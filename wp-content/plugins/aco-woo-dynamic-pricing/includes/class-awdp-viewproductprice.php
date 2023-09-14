<?php

/*
* @@ Product Price View
* Last updated version 4.0.0
*/

class AWDP_viewProductPrice
{

    public function product_price ( $rules, $price, $item_id, $product, $prodLists, $cartRules, $item_price, $display_price )
    {

        $result                         = [];
        $result['itemPrice']            = $item_price;
        $result['discountedPrice']      = '';
        $result['discountedMaxPrice']   = '';
        $result['discountedMinPrice']   = '';

        $suffix                         = get_option( 'woocommerce_price_display_suffix' ) ? get_option( 'woocommerce_price_display_suffix' ) : '';
		$suffixText                     = $suffix ? ' <small class="woocommerce-price-suffix">' . wp_kses_post( $suffix ) . '</small>' : '';

        if ( $rules != false && sizeof ( $rules ) >= 1 ) { 

            $prod_ID            = $product->get_data()['slug'];
            $variationCheck     = $product->is_type( 'variable' );
            $variations         = $variationCheck ? $product->get_children() : [];
            $converted_rate     = 1;
            $discountprice      = '';
            $mindiscountprice   = '';
            $maxdiscountprice   = '';
            $wdp_max_price      = 0;
            $wdp_min_price      = 0;
            $maxdiscount        = 0;
            $mindiscount        = 0;
            $discount           = 0;
            $ProductRuleActive  = false;

            $FeedProdID         = $product->get_id(); 
            $FeedPrice          = '';

            // $skip_ids           = [];

            // Dynmc Discount Call
            $quantity           = 0;

            foreach ( $rules as $rule ) {

                // Checking for restriction discount
                $dynmValue  = ( ( $rule['type'] == 'percent_product_price' || $rule['type'] == 'fixed_product_price' ) && array_key_exists ( 'dynamic_value', $rule ) ) ? $rule['dynamic_value'] : false; 
                $getDiscVal = $dynmValue ? awdp_dynamic_value ( $rule, $product, $price, $quantity, $prodLists, false ) : '';
                $dymcDisc   = $dynmValue ? ( $getDiscVal ? $getDiscVal : '' ) : floatval($rule['discount']);

                // $dymcDisc   = floatval($rule['discount']);

                // Skip if dicount value is not set or zero
                if ( $dymcDisc == '' || $dymcDisc <= 0 ) 
                    continue;
               
                // Get Product List
                $checkItem = call_user_func_array ( 
                    array ( new AWDP_Discount(), 'get_items_to_apply_discount' ), 
                    array ( $product, $rule, false, true ) 
                );

                $validateRules = call_user_func_array ( 
                    array ( new AWDP_Discount(), 'validate_discount_rules' ), 
                    array ( $product, $rule, ['cart_total_amount', 'cart_total_amount_all_prods', 'cart_items', 'cart_items_all_prods', 'cart_products'] ) 
                );

                if ( !$checkItem ) {
                    continue;
                }

                // Check if User if Logged-In
                if ( ( intval ( $rule['discount_reg_customers'] ) === 1 && !is_user_logged_in() ) || ( intval ( $rule['discount_reg_customers'] ) === 1 && is_user_logged_in() && ( !empty ( array_filter ( $rule['discount_reg_user_roles'] ) ) && empty ( array_intersect ( $rule['discount_cur_user_roles'], $rule['discount_reg_user_roles'] ) ) ) ) ) { 
                    continue;
                }

                // Validate Rules
                if ( !$validateRules ) {
                    continue;
                }

                if ( ( $rule['type'] == 'percent_product_price' || $rule['type'] == 'fixed_product_price' ) ) {

                    if ( $variationCheck ) { 

                        if ( $variations ) {

                            $wdp_max_price = $maxdiscountprice != '' ? $maxdiscountprice : $product->get_variation_price( 'max', true );
                            $wdp_min_price = $mindiscountprice != '' ? $mindiscountprice : $product->get_variation_price( 'min', true );

                            if ( $rule['type'] == 'fixed_product_price' ) {
                                $maxdiscountprice   = ( $wdp_max_price - $dymcDisc ) >= 0 ? ( $wdp_max_price - $dymcDisc ) : 0;
                                $mindiscountprice   = ( $wdp_min_price - $dymcDisc ) >= 0 ? ( $wdp_min_price - $dymcDisc ) : 0;
                            } else {
                                $maxdiscount        = $wdp_max_price * ( $dymcDisc / 100 ); 
                                $mindiscount        = $wdp_min_price * ( $dymcDisc / 100 );
                                $maxdiscountprice   = $wdp_max_price >= $maxdiscount ? ( $wdp_max_price - $maxdiscount ) : 0;
                                $mindiscountprice   = $wdp_min_price >= $mindiscount ? ( $wdp_min_price - $mindiscount ) : 0;
                            }

                        }
                        
                    } else {

                        $currentprice = $discountprice != '' ? $discountprice : $price;

                        if ( $currentprice > 0 ) {
                            if ( $rule['type'] == 'fixed_product_price' ) {
                                $discountprice  = ( $currentprice - $dymcDisc ) >= 0 ? ( $currentprice - $dymcDisc ) : 0;
                            } else {
                                $discount       = $currentprice * ( $dymcDisc / 100 );
                                $discountprice  = $currentprice >= $discount ? ( $currentprice - $discount ) : 0;
                            }
                        } else {
                            $discountprice = 0;
                        }

                    }

                    $ProductRuleActive = true;

                }

            }

            if ( $ProductRuleActive ) { 

                if ( $variationCheck ) { 

                    $max_price = $product->get_variation_price( 'max', true );
                    $min_price = $product->get_variation_price( 'min', true );

                    if ( $min_price == $mindiscountprice && $max_price == $maxdiscountprice ) {
                        return $item_price;
                    } else {
                        if ( $maxdiscountprice !== $mindiscountprice ) {
                            $item_price = '<p class="price">';
                            $item_price .= '<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.wc_format_price_range( $min_price, $max_price ).'</del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'.wc_format_price_range( $mindiscountprice, $maxdiscountprice ).'</ins>';
                            $item_price .= $suffixText;
                            $item_price .= '</p>';
                            $FeedPrice  = $maxdiscountprice;
                        }  else if ( $maxdiscountprice == $mindiscountprice && $mindiscountprice < $min_price ) {
                            $item_price = wc_format_sale_price ( $min_price * $converted_rate, $mindiscountprice * $converted_rate ).$suffixText;
                            $FeedPrice  = $mindiscountprice;
                        } else {
                            $item_price = wc_price( $mindiscountprice ).$suffixText;
                            $FeedPrice  = $mindiscountprice;
                        }
                    }

                } else {

                    if ( $discountprice < $price ) {
                        $item_price = $display_price ? wc_format_sale_price($display_price * $converted_rate, $discountprice * $converted_rate).$suffixText : wc_format_sale_price($price * $converted_rate, $discountprice * $converted_rate).$suffixText;
                        $FeedPrice  = $discountprice;
                    } else if ( $discountprice == 0 ) {
                        $item_price = wc_price(0);
                        $FeedPrice  = 0;
                    } else if ( $discountprice > $price ) {
                        $item_price = $display_price ? wc_format_sale_price($display_price * $converted_rate, $discountprice * $converted_rate).$suffixText : wc_format_sale_price($price * $converted_rate, $discountprice * $converted_rate).$suffixText;
                        $FeedPrice  = $discountprice;
                    } else if ( '' === $product->get_price() || 0 == $product->get_price() ) {
                        $item_price = wc_price(0);
                        $FeedPrice  = 0;
                    } 
                    
                }

                /*
                * Update Attribute Value 
                * ver @ 4.4.4
                */
                if ( metadata_exists ( 'post', $FeedProdID, AWDP_Feed_Attribute ) ) { 
                    update_post_meta ( $FeedProdID, AWDP_Feed_Attribute, $FeedPrice );
                } else {
                    add_post_meta ( $FeedProdID, AWDP_Feed_Attribute, $FeedPrice );
                }
                // End

            }

            $result['itemPrice']            = $item_price;
            $result['discountedPrice']      = $discountprice;
            $result['discountedMaxPrice']   = $maxdiscountprice;
            $result['discountedMinPrice']   = $mindiscountprice;

            return $result;

        }

        return $result;

    }

}