<?php 
    get_header();
    $uri = get_template_directory_uri();
?>
    <div id="main-wrapper">
        <div id="banner">
            <div class="container">
                <div class="owl-carousel banner-carousel">
                    <div class="item">
                        <div class="row align-items-center" data-aos="fade-in">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="content text-secondry mb-4 mb-lg-0">
                                    <h2 class="mb-3 fw-bold text-darkGray">Your Daily Needs</h2>
                                    <p class="lh-lg my-4 text-darkGray">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layoutIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                    <a href="#" class="btn bg-primary text-white view-more">
                                        <span class="me-1">Shop Now</span>
                                        <i class="fas fa-arrow-right-long"></i>

                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 order-1 order-lg-2 offset-xl-2 offset-lg-1">
                                <div class="img">
                                    <img src="<?= get_template_directory_uri() .'/assets/images/vector-img1.png'?>" alt="banner image" class="img-fluid" loading="lazy">
                                    <img src="<?= get_template_directory_uri() .'/assets/images/banner-img2.png'?>" alt="banner image" class="img-fluid" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center" data-aos="fade-in">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="content text-secondry mb-4 mb-lg-0">
                                    <h2 class="mb-3 fw-bold text-darkGray" >Your Daily
                                        Needs</h2>
                                    <p class="lh-lg my-4 text-darkGray">It is a long
                                        established fact that a reader will be distracted by the readable content of a page when
                                        looking at its layoutIt is a long established fact that a reader will be distracted by
                                        the readable content of a page when looking at its layout</p>
                                    <a href="#" class="btn bg-primary text-white view-more">
                                        <span class="me-1">Shop Now</span>
                                        <i class="fas fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 order-1 order-lg-2 offset-xl-2 offset-lg-1">
                                <div class="img">
                                    <img src="<?= get_template_directory_uri() .'/assets/images/vector-img1.png'?>" alt="banner image" class="img-fluid" loading="lazy">
                                    <img src="<?= get_template_directory_uri() .'/assets/images/banner-img2.png'?>" alt="banner image" class="img-fluid" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row align-items-center" data-aos="fade-in">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="content text-secondry mb-4 mb-lg-0">
                                    <h2 class="mb-3 fw-bold text-darkGray" >Your Daily
                                        Needs</h2>
                                    <p class="lh-lg my-4 text-darkGray">It is a long
                                        established fact that a reader will be distracted by the readable content of a page when
                                        looking at its layoutIt is a long established fact that a reader will be distracted by
                                        the readable content of a page when looking at its layout</p>
                                    <a href="#" class="btn bg-primary text-white view-more">
                                        <span class="me-1">Shop Now</span>
                                        <i class="fas fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 order-1 order-lg-2 offset-xl-2 offset-lg-1">
                                <div class="img">
                                    <img src="<?= get_template_directory_uri() .'/assets/images/vector-img1.png'?>" alt="banner image" class="img-fluid" loading="lazy">
                                    <img src="<?= get_template_directory_uri() .'/assets/images/banner-img2.png'?>" alt="banner image" class="img-fluid" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="categories" class="bg-white py-5">
            <div class="container">
                <div class="owl-carousel categories-carousel">
                    <?php 
                        $categories = get_terms( array(
                            'parent' => 0,
                            'taxonomy' => 'product_cat',
                            'hide_empty' => false,
                        ) );

                        if (! empty( $categories ) && ! is_wp_error( $categories )) :
                            foreach ($categories as $category) :
                                $category_id = $category->term_id;
                                $category_name = $category->name;
                                $category_url = get_term_link( $category_id, 'product_cat' );
                                $image_id = get_term_meta( $category_id, 'thumbnail_id', true );
                                if ( $image_id ) {
                                    $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                                }
                            ?>
                                <div class="item">  
                                    <div class="brand-item d-flex flex-column justify-content-between align-items-center text-center h-100">
                                        <div class="cat-img">
                                            <img src="<?= $image_url ?>" alt="brand-<?= $image_id;?>" loading="lazy">
                                        </div>
                                        <a href="<?= $category_url; ?>">
                                            <p class="text-capitalize mb-0"><?= $category_name ?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php else: 
                        echo "No Data!";
                        ?>
                            
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div id="top-products" class="py-5">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between  mb-5" data-aos="zoom-in">
                    <h2 class="text-secondary fs-4 fw-bold mb-0"><span>Top Products</span></h2>
                    <a href="#" class="text-darkGray view-more">
                        <span>View More</span>
                        <i class="fas fa-arrow-right-long"></i>
                    </a>
                </div>
                <div class="row">
                    <!-- do_shortcode( '[myProduct type="_wc_average_rating"]'); -->
                    <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 2,
                            'meta_key' => '_wc_average_rating',
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
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
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="card px-3 py-5 border-0 h-100" >
                                <div class="heart-like-button"> 
                                    <i class="fa fa-heart fa-lg"></i>
                                </div>
                                <?php 
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
                    <?php endwhile;?>
                </div>
            </div>
        </div>
        <div id="shop" class="py-5">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 text-center text-md-start mb-5 mb-md-0">
                        <h2 class="fw-600 fs-1 text-darkGray mb-4">
                            Don’t miss amazing 
                            <span class="d-block mt-2">Electronics deals</span>
                        </h2>
                        <a href="#" class="btn bg-primary text-white view-more">
                            <span class="me-1">Shop Now</span>
                            <i class="fas fa-arrow-right-long"></i>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="img">
                            <img data-src="<?= get_template_directory_uri() .'/assets/images/shop-img.png'?>" alt="offer image" class="img-fluid lazyload">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popular-products" class="py-5">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between  mb-5" data-aos="zoom-in">
                    <h2 class="text-secondary fs-4 fw-bold mb-0"><span>Popular  Product</span></h2>
                    <a href="#" class="text-darkGray view-more">
                        <span>View More</span>
                        <i class="fas fa-arrow-right-long"></i>
                    </a>
                </div>
                <div class="row">
                    <?php
                        $args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => 2,
                            'meta_key'  => 'total_sales',
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post();
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
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                            <div class="card px-3 py-5 border-0 h-100 licked" >
                                <div class="heart-like-button"> 
                                    <i class="fa fa-heart fa-lg"></i>
                                </div>
                                <?php 
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
                    <?php endwhile;?>
                </div>
            </div>
        </div>
        <div id="download" class="bg-white">
            <div class="container">
                <div class="row align-items-center" data-aos="fade-in">
                    <div class="col-lg-6 col-md-7 order-2 order-md-1">
                        <h2 class="fs-1 fw-600 mb-4 text-darkGray text-md-start text-center mb-5">
                            Get Our <span class="text-darkPrimary">Mobile App</span> 
                            <span class="text-darkGray d-block">It’s Make easy for you life !</span>
                        </h2>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <a class="btn-download me-3" href="#">
                                <img src="<?= get_template_directory_uri() .'/assets/images/loader.gif'?>" data-src="<?= get_template_directory_uri() .'/assets/images/app-store.png'?>" alt="app store image" class="lazyload">
                            </a>
                            <a class="btn-download" href="#">
                                <img src="<?= get_template_directory_uri() .'/assets/images/loader.gif'?>" data-src="<?= get_template_directory_uri() .'/assets/images/google-play.png'?>" alt="google play image" class="lazyload">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 order-1 order-md-2 text-center mb-4 mb-md-0">
                        <div class="img">
                            <img data-src="<?= get_template_directory_uri() .'/assets/images/vector-img1.png'?>" alt="screens" class="lazyload img-fluid">
                            <img data-src="<?= get_template_directory_uri() .'/assets/images/screens.pn'?>g" alt="screens" class="lazyload img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

    