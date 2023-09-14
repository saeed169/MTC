<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="<?= get_template_directory_uri() . '/assets/images/logo.svg' ?>" >
<!-- Bootstrap 5 id english -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">

    <!-- Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/css/star-rating.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/themes/krajee-fas/theme.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/themes/krajee-svg/theme.min.css"
        integrity="sha512-q6XeY4ys7Foi9D1oD7BaADWxjvqeI+58MAg/f7a61vpnclnScvmdCHdFf+X8kNVxKUkhcyDoKfcNJa150v5MEw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
        integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- to load google font faster -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.min.css">

    <?php
        wp_head();
        $lang = get_locale();
        $uri = get_template_directory_uri();
    ?>
  
</head>
<!-- if arabic add class="rtl" dir="rtl" to body  -->
<body <?php body_class(); ?>>
    <?php
        $user = wp_get_current_user();
        $user_exist = $user->exists();
        echo $user_exist;
    ?>
    <header>
        <div class="top-header">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-between top-content">
                    <div class="d-flex align-items-center gap-2">
                        <div class="logo">
                            <a class="navbar-brand" href="home.html">
                                <?php the_custom_logo(); ?>
                            </a>
                        </div>
                        <div class="toggle">
                            <div class="menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="address">
                            <a data-bs-toggle="modal" href="#addressModal" role="button" class="text-white">
                                <span>Deliver To <i class="fas fa-chevron-down ms-1"></i></span>
                                <span class="d-block details">Street, city ... </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 search">
                        <?php aws_get_search_form( true ); ?>
                        <!-- <div class="input-group flex-nowrap">
                            <input type="text" class="form-control border-0" placeholder="Searching For ?" aria-label="text"
                                aria-describedby="addon-wrapping">
                            <span class="input-group-text bg-primary border-0 text-darkGray" id="addon-wrapping"><i class="fas fa-magnifying-glass"></i></span>
                        </div> -->
                    </div>
                    <div class="top-options d-flex align-items-center">
                        <div class="lang">
                            <a href="#">
                                <span class="me-1"><img src="<?= $uri . '/assets/images/icons/globe-icon.svg' ;?>" alt="globe icon" loading="lazy"></span>
                                <span class="font-ar">العربية</span>
                            </a>
                        </div>
                        <div class="before-login <?php if($user_exist == 1) echo 'd-none'?> "> <!-- Add class="d-none" if user not logged -->
                            <div class="sign-in">
                                <a data-bs-toggle="modal" href="#loginModal" role="button">
                                    <span class="me-1"><img src="<?= $uri .'/assets/images/icons/user-icon.svg" alt="user icon' ?>" loading="lazy"></span>
                                    <span>Login</span>
                                </a>
                            </div>
                        </div>
                        <div class="after-login <?php if($user_exist != 1) echo 'd-none'?>"> <!-- Remove class="d-none" if user logged -->
                            <div class="account">
                                <div class="content">
                                    <div class="name text-white">
                                            <span class="me-1"><img src="<?= $uri .'/assets/images/user.png' ?>" alt="profile-image"></span>
                                            <span class="user-name">My Account</span>
                                            <span class="close"><i class="fas fa-chevron-down"></i></span>
                                            <span class="open"><i class="fas fa-chevron-up"></i></span>
                                    </div>
                                    <span class="arrow"></span>
                                    <div class="dropdown">
                                        <ul>
                                            <li>
                                                <a class="dropdown-item" href="profile.html">
                                                    <img src="<?= $uri .'/assets/images/icons/user-circle-icon.svg'?>" alt="order-icon" loading="lazy">
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="orders.html">
                                                    <img src="<?= $uri . '/assets/images/icons/shopping-basket-colored-icon.svg' ?>" alt="order-icon" loading="lazy">
                                                    <span>Orders</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="refund-request.html">
                                                    <img src="<?= $uri .'/assets/images/icons/undo-icon.svg'?>" alt="refund-icon" loading="lazy">
                                                    <span>Refund Request</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="messages.html">
                                                    <img src="<?= $uri .'/assets/images/icons/comment-icon.svg'?>" alt="messages-icon" loading="lazy">
                                                    <span>Messages</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="wishlist.html">
                                                    <img src="<?= $uri .'/assets/images/icons/heart-icon.svg'?>" alt="wishlist-icon" loading="lazy">
                                                    <span>Wishlist</span>
                                                </a>
                                            </li>
                                            <li class="logout">
                                                <a class="dropdown-item justify-content-center" href="#">
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart">
                            <a href="<?= wc_get_cart_url(); ?>">
                                <span class="me-1"><img src="<?= $uri .'/assets/images/icons/cart-icon.svg'?>" alt="cart icon" loading="lazy"></span>
                                <span class="count">1</span>
                            </a>
                            <div class="dropdown">
                                <ul class="order-list">
                                    <li class="d-flex">
                                        <div class="product-img"><img src="assets/images/loader.gif" data-src="assets/images/products/product-4.png" alt="product image" class="lazyload"></div>
                                        <div>
                                            <p class="title text-lightGray mb-2">Seeds of Change Organic Quinoa, Brown</p>
                                            <p class="price">
                                                <span class="text-darkGray me-1">100KD</span>
                                                <span class="text-lightGray text-decoration-line-through">150KD</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="product-img"><img src="assets/images/loader.gif" data-src="assets/images/products/product-1.png" alt="product image" class="lazyload"></div>
                                        <div>
                                            <p class="title text-lightGray mb-2">Werther’s Original Caramel Hard Candies</p>
                                            <p class="price mb-0">
                                                <span class="text-darkGray me-1">100KD</span>
                                                <span class="text-lightGray text-decoration-line-through">150KD</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="product-img"><img src="assets/images/loader.gif" data-src="assets/images/products/product-2.png" alt="product image" class="lazyload"></div>
                                        <div>
                                            <p class="title text-lightGray mb-2">Lenovo v14 82c6006ged - core i3-10110u, 4gb ram, 1tb hdd</p>
                                            <p class="price mb-0">
                                                <span class="text-darkGray me-1">100KD</span>
                                                <span class="text-lightGray text-decoration-line-through">150KD</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="cart-footer">
                                    <div class="d-flex justify-content-between text-darkGray">
                                        <p>Total cart</p>
                                        <p class="fw-600">200KD</p>
                                    </div>
                                    <div class="cart-btns d-flex justify-content-center mt-3">
                                        <a href="cart.html" class="btn view-cart me-3 px-4 fs-7">View Cart</a>
                                        <a href="checkout.html" class="btn checkout btn-primary px-4 fs-7">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notifications">
                            <a data-bs-toggle="modal" href="#" role="button">
                                <span class="me-1"><img src="<?= $uri . '/assets/images/icons/bell-icon.svg'?>" alt="bell icon" loading="lazy"></span>
                                <span class="count">1</span>
                            </a>
                            <div class="dropdown">
                                <div class="d-flex justify-content-between my-2 title fs-7">
                                    <p class="text-dark fw-600 mb-0"> All Notifications</p>
                                    <a href="#" class="text-primary">Mark As Read</a>
                                </div>
                                <ul>
                                    <li class="unread">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="unread">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="read">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="read">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="unread">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="unread">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="unread">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="read">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="unread">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="title mb-0">Tilte</p>
                                                <p class="details text-lightGray fw-400">short details short details</p>
                                            </div>
                                            <div class="text-center">
                                                <p>11:20</p>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div id="menu" class="d-flex align-items-center">
                    <nav id="category-menu">
                        <ul>
                            <li class="sub-menu all-cate">
                                <span> 
                                    <span class="me-3">All Categories</span> 
                                    <i class="fas fa-caret-down"></i>
                                </span>
                                <div>
                                    <ul>
                                        <?php 
                                                $categories = get_terms( array(
                                                    'parent' => 0,
                                                    'taxonomy' => 'product_cat',
                                                    'hide_empty' => false,
                                                ) );
                                                $desired_category_slug  = 'grocery';
                                                if (! empty( $categories ) && ! is_wp_error( $categories )) :
                                                    foreach ($categories as $category) :
                                                        $parent_category_id = $category->term_id;
                                                        $category_name = $category->name;
                                                        $category_url = get_term_link( $parent_category_id, 'product_cat' );
                                            ?>
                                            <li class="sub-menu <?php if ( $category->slug === $desired_category_slug ) echo 'active'; ?> ">
                                                <a href="<?= $category_url;?>">
                                                    <span><?= $category_name; ?></span>
                                                    <i class="fas fa-chevron-right"></i> <i class="fas fa-chevron-down d-none"></i>
                                                </a>
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="row">
                                                                <?php
                                                                    $sub_categories = get_terms( array(
                                                                        'child_of' => $parent_category_id,
                                                                        'parent' => $parent_category_id,
                                                                        'hierarchical' => 0,
                                                                        'sort_column' => 'menu_order',
                                                                        'sort_order' => 'ASC',
                                                                        'taxonomy' => 'product_cat',
                                                                        'hide_empty' => false,
                                                                    ) );
                                                                    if (! empty( $sub_categories ) && ! is_wp_error( $sub_categories )) :
                                                                        foreach ($sub_categories as $category) :
                                                                            $sub_category_id = $category->term_id;
                                                                            $sub_category_name = $category->name;
                                                                            $sub_category_url = get_term_link( $sub_category_id, 'product_cat' );
                                                                ?>
                                                                <div class="col-md-3">
                                                                    <div class="sub-categoty">
                                                                        <p class="title"><?= $sub_category_name; ?></p>
                                                                        <?php
                                                                            $sub_categories2 = get_terms( array(
                                                                                'child_of' => $sub_category_id,
                                                                                'taxonomy' => 'product_cat',
                                                                                'hide_empty' => false,
                                                                            ) );
                                                                            if (! empty( $sub_categories2 ) && ! is_wp_error( $sub_categories2 )) :
                                                                                foreach ($sub_categories2 as $category) :
                                                                                    $sub_category_id2 = $category->term_id;
                                                                                    $sub_category_name2 = $category->name;
                                                                                    $sub_category_url2 = get_term_link( $sub_category_id2, 'product_cat' );
                                                                        ?>
                                                                        <a href="<?= $sub_category_url2; ?>"><?= $sub_category_name2; ?></a>
                                                                        <?php endforeach;?>
                                                                        <?php else: 
                                                                        echo "";
                                                                        ?>
                                                                            
                                                                    <?php endif;?>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach;?>
                                                                <?php else: 
                                                                echo "<div class='d-flex align-items-center justify-content-center'><p>No Data</p></div>";
                                                                ?>
                                                                    
                                                            <?php endif;?>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="img">
                                                                <img src="<?= get_template_directory_uri() .'/assets/images/hot-deal.png'?>" alt="category image" loading="lazy" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach;?>
                                            <?php else: 
                                            echo "No Data!";
                                            ?>
                                                
                                        <?php endif;?>
                                    </ul>
                                </div>
                               
                            </li>
                        </ul>
                    </nav>
                    <div id="main-menu">
                        <ul class="d-flex flex-wrap align-items-center gap-4">
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
                            ?>
                            <li>
                                <a href="<?= $category_url;?>"><?= $category_name; ?></a>
                            </li>
                            <?php endforeach;?>
                            <?php else: 
                            echo "No Data!";
                            ?>
                                
                        <?php endif;?>
                            <li class="sale">
                                <a href="#">
                                    <img src="<?= $uri .'/assets/images/icons/badge-icon.svg'?>" alt="badge icon" loading="lazy">
                                    <span>sale</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="modal main-modal fade" id="registerModal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 d-block pb-0">
                    <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <p class="text-darkGray fs-4 fw-bold mb-0">Create a new account</p>
                    </div>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="full-name" class="form-label">Full Name</label>
                            <input type="text" id="full-name" name="reg_full_name" class="form-control border-0" placeholder="Full name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" name="reg_email" class="form-control border-0" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="reg_phone" class="form-control border-0" placeholder="Phone Number">
                        </div>
                        <div>
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group password flex-nowrap mb-3">
                                <input type="password" id="password" name="reg_password" class="form-control border-0" placeholder="Password" aria-label="Password"
                                    aria-describedby="addon-wrapping2">
                                <span class="input-group-text" id="addon-wrapping2"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>
                        <div>
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <div class="input-group password flex-nowrap mb-3">
                                <input type="password" id="confirm-password" name="reg_confirm_password" class="form-control border-0" placeholder="Confirm Password" aria-label="Password"
                                    aria-describedby="addon-wrapping3">
                                <span class="input-group-text" id="addon-wrapping3"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 border-0 py-3 mt-3" type="submit" name="reg_btn_submit">Register</button>
                    </form>
                    <?php
                        global $wpdb;
                        if (isset($_POST['reg_btn_submit'])) {
                            $username =$wpdb->escape($_POST['reg_full_name']);
                            $email = $wpdb->escape($_POST['reg_email']);
                            $password = $wpdb->escape($_POST['reg_password']);
                            $confirmp = $wpdb->escape($_POST['reg_confirm_password']);
                            $error = array();
                            if (strpos($username, ' ') !== false) {
                                $error['username_space'] = "username has space";
                            }
                            if (empty($username)) {
                                $error['username_empty'] = "needed username";
                            }
                            if (username_exists($username)) {
                                $error['username_exists'] = "username already exists";
                            }
                            if (!is_email($email)) {
                                $error['email_valid'] = "email has no valid value";
                            }
                            if (email_exists($email)) {
                                $error['email_existence'] = "Email already exists";
                            }
                            if (strcmp($password, $confirmp) !== 0) {
                                $error['password'] = 'password didnt match';
                            }
                            if (count($error) == 0) {
                                wp_create_user($username, $password, $email);
                                echo "<scriptwindow.location='" . site_url() . "'</script>";
                                echo "<script>Swal.fire({
                                    title: '$succses_msg',
                                    icon: 'success',
                                    showConfirmButton: false
                                })
                                </script>";
                                //exit();
                            }else {  ?>
                            
                                <div class="registerx">
                                    <?php foreach($error as $err){ $f1 =$error['username_exists'];
                                        ?>
                                        <span style="font-weight: bold;font-size: 17px;"><?php echo $err; ?></span>
                                    <?php  } ?>
                                    <!-- <script>
                                        jQuery(function(){
                                        jQuery('#new-reg').show();
                                        jQuery('#new-reg').modal('show');
                                        jQuery('#new-reg').addClass('fade in');
                                    });
                                    </script> -->
                                </div> 
                            <?php }
                        }

                    ?>
                    <div class="mt-4 text-center">
                        <span class="text-gray">Already have an account?</span>
                        <a data-bs-toggle="modal" href="#loginModal" role="button" class="text-primary fw-600">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal main-modal fade" id="loginModal" aria-hidden="true" aria-labelledby="loginModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-0 d-block">
                <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center">
                    <h2 class="modal-title fs-5 fw-bolder text-darkGray mb-1" id="loginModalLabel">welcome back! </h2>
                    <p class="text-lightGray fw-600 mb-0">Sign in to your account</p>
                </div>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">E-mail</label>
                    <input type="email" id="loginEmail" name="login_username" placeholder="E-mail" class="form-control border-0">
                </div>
                <div>
                    <label for="password-login" class="form-label">Password</label>
                    <div class="input-group password flex-nowrap mb-3">
                        <input type="password" id="password-login" name="login_password" class="form-control border-0" placeholder="Password" aria-label="Password"
                            aria-describedby="addon-wrapping4">
                        <span class="input-group-text" id="addon-wrapping4"><i class="fas fa-eye"></i></span>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex justify-content-between flex-column flex-sm-row mb-5 mt-4 mt-sm-0">
                        <div class="form-check order-2 order-sm-1">
                            <input class="form-check-input" name="remember" type="checkbox" value="1" id="flexCheckChecked-1">
                            <label class="form-check-label" for="flexCheckChecked-1">Remmber me</label>
                        </div>
                        <div class="order-1 order-sm-2 mb-4 mb-sm-0">
                            <a data-bs-toggle="modal" href="#forgetPasswordModal" role="button" class="text-primary">Forget your password?</a>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary w-100 border-0 py-3" name="login_btn_submit">Login</button>
                </div>
              </form>

                <?php
                    global $user_ID;
                    global $wpdb;

                    if (isset($_POST['login_btn_submit'])) {
                        $username = $wpdb->escape($_POST['login_username']);
                        $password = $wpdb->escape($_POST['login_password']);
                        $login_array = array();
                        $login_array['user_login'] = $username;
                        $login_array['user_password'] = $password;
                        $verify_user = wp_signon($login_array, true);
                        if (!is_wp_error($verify_user)) {
                            $userID = $verify_user->ID;
                            wp_set_current_user( $userID, $login_array['user_login']  );
                            wp_set_auth_cookie( $userID, true, false );
                            do_action( 'wp_login',$login_array['user_login']  );
                            wp_redirect(( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
                            exit();
                            
                        } else { ?>
                    
                        <?php  foreach($verify_user as $verifys){
                                foreach( $verifys as $verify){?>
                                <div class="error"> <?php  echo $verify[0] ; ?> </div>
                                <?php  
                                    } 
                                ?>
                                    <script>
                                        jQuery(function(){
                                        jQuery('#loginModal').show();
                                        jQuery('#loginModal').modal('show');
                                        jQuery('#loginModal').addClass('fade in');
                                        });
                                </script>
                        <?php   } 
                        }
                    }
                ?>

                <?php 
                    /* $args = array(
                        'echo' => true,
                        'redirect' => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                        'form_id' => 'loginform',
                        'label_username' => __( 'Username' ),
                        'label_password' => __( 'Password' ),
                        'label_remember' => __( 'Remember Me' ),
                        'label_log_in' => __( 'Log In' ),
                        'id_username' => 'user_login',
                        'id_password' => 'user_pass',
                        'id_remember' => 'rememberme',
                        'id_submit' => 'wp-submit',
                        'remember' => true,
                        'value_username' => '',
                        'value_remember' => false
                    );  */
                ?>
                <?php /* wp_login_form( $args ); */ ?>
                
                
              <div class="mt-4 text-center">
                <span class="text-gray">Don't have an account? </span>
                <a data-bs-toggle="modal" href="#registerModal" role="button" class="text-primary fw-600">Register Now</a>
            </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal main-modal fade addressModal" id="addressModal" aria-hidden="true" aria-labelledby="addressModalLabel" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-0 d-block p-0">
                <h2 class="modal-title fs-6 text-darkGray mb-2" id="addressModalLabel">Select address</h2>
            </div>
            <div class="modal-body p-0">
              <form>
                <div class="address-card selected">
                    <input type="radio" name="address_input" class="d-none" checked>
                    <div class="details">
                        <div class="d-flex justify-content-between">
                            <h3 class="fs-6 fw-600">Work</h3>
                            <div class="default">Default </div>
                        </div>
                        <p class="text-lightGray mb-2">Muhammad Ali</p>
                        <p class="text-lightGray mb-2">Arzan Financial Group Tower, Mezzanine, Ahmed Al Jaber Street, Sharq, Kuwait City</p>
                        <p class="text-lightGray mb-2">+29 5 6 5 711 480 4</p>
                    </div>
                    <div class="card-btns d-flex justify-content-end gap-2">
                        <a href="#">Edit</a>
                    </div> 
                </div>
                <div class="address-card">
                    <input type="radio" name="address_input" class="d-none">
                    <div class="details">
                        <div class="d-flex justify-content-between">
                            <h3 class="fs-6 fw-600">Home</h3>
                        </div>
                        <p class="text-lightGray mb-2">Muhammad Ali</p>
                        <p class="text-lightGray mb-2">Arzan Financial Group Tower, Mezzanine, Ahmed Al Jaber Street, Sharq, Kuwait City</p>
                        <p class="text-lightGray mb-2">+29 5 6 5 711 480 4</p>
                    </div>
                    <div class="card-btns d-flex justify-content-end gap-3">
                        <a href="#">Edit</a>
                        <span class="text-lightGray">|</span>
                        <a href="#" class="text-red">Remove</a>
                    </div>  
                </div>
                <div class="d-flex justify-content-end btns gap-3">
                    <button class="btn btn-cancel" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-primary" type="button">Confirm</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
    
    <div class="modal main-modal fade" id="forgetPasswordModal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 d-block">
                    <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center">
                        <p class="fs-5 fw-600 mb-1">Forget password</p>
                        <div class="fw-400">
                            <span class="text-gray">Enter Your Registered email address and we`ll send you a verification code</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-4">
                            <input type="email" placeholder="Example .s@gmail.com" class="form-control border-0">
                        </div>
                        <div>
                            <a data-bs-toggle="modal" href="#verificationmodel" role="button" class="btn btn-primary w-100 border-0 py-3">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal main-modal fade" id="verificationmodel" aria-hidden="true"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 d-block">
                    <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-capitalize">
                        <p class="fs-5 fw-600 mb-1">Verification Code</p>
                        <div class="fw-400">
                            <span class="text-gray">Enter verification code send to your email</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="d-flex justify-content-center text-center mb-3">
                            <input name='code' class='code-input form-control' required>
                            <input name='code' class='code-input form-control' required>
                            <input name='code' class='code-input form-control' required>
                            <input name='code' class='code-input form-control' required>
                        </div>
                        <div class="text-center mb-5">
                            <p class="info">If you didn`t receive code <a href="#" class="text-primary">Resend</a></p>
                        </div>
                        <div>
                            <a data-bs-toggle="modal" href="#resetPasswordModal" role="button" class="btn btn-primary w-100 border-0 py-3">Verify</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal main-modal fade" id="resetPasswordModal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 d-block">
                    <button type="button" class="btn-close d-block" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-capitalize">
                        <p class="fs-5 fw-600 mb-1">Reset password</p>
                        <div class="fw-400">
                            <span class="text-gray">Enter New Password</span>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-4">
                            <label for="password-reset" class="form-label">Password</label>
                            <div class="input-group password flex-nowrap">
                                <input type="password" id="password-reset" class="form-control border-0" placeholder="********" aria-label="Password"
                                    aria-describedby="addon-wrapping5">
                                <span class="input-group-text" id="addon-wrapping5"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="confirm-password-reset" class="form-label">Confirm Password</label>
                            <div class="input-group password flex-nowrap">
                                <input type="password" id="confirm-password-reset" class="form-control border-0" placeholder="********" aria-label="Password"
                                    aria-describedby="addon-wrapping6">
                                <span class="input-group-text" id="addon-wrapping6"><i class="fas fa-eye"></i></span>
                            </div>
                        </div>
                        <div>
                            <button  class="btn btn-primary w-100 border-0 py-3" type="button">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-menu">
        <div class="menu-categories">
            <ul class="nav nav-tabs main-categories" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="category1-tab" data-bs-toggle="tab" data-bs-target="#category1" type="button" role="tab" aria-controls="category1" aria-selected="true">
                    <div class="brand-item d-flex flex-column justify-content-between align-items-center">
                        <div class="cat-img">
                            <img src="assets/images/categories/cat-image-1.png" alt="brand-1" loading="lazy">
                        </div>
                        <p class="text-capitalize mb-0">Electronics</p>
                    </div>
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category2-tab" data-bs-toggle="tab" data-bs-target="#category2" type="button" role="tab" aria-controls="category2" aria-selected="true">
                      <div class="brand-item d-flex flex-column justify-content-between align-items-center">
                          <div class="cat-img">
                              <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                          </div>
                          <p class="text-capitalize mb-0">Baby and Toddler</p>
                      </div>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category3-tab" data-bs-toggle="tab" data-bs-target="#category3" type="button" role="tab" aria-controls="category3" aria-selected="true">
                      <div class="brand-item d-flex flex-column justify-content-between align-items-center">
                          <div class="cat-img">
                              <img src="assets/images/categories/cat-image-3.png" alt="brand-1" loading="lazy">
                          </div>
                          <p class="text-capitalize mb-0">Personal Care</p>
                      </div>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category4-tab" data-bs-toggle="tab" data-bs-target="#category4" type="button" role="tab" aria-controls="category4" aria-selected="true">
                      <div class="brand-item d-flex flex-column justify-content-between align-items-center">
                          <div class="cat-img">
                              <img src="assets/images/categories/cat-image-4.png" alt="brand-1" loading="lazy">
                          </div>
                          <p class="text-capitalize mb-0">DIY and Tools</p>
                      </div>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category5-tab" data-bs-toggle="tab" data-bs-target="#category5" type="button" role="tab" aria-controls="category5" aria-selected="true">
                      <div class="brand-item d-flex flex-column justify-content-between align-items-center">
                          <div class="cat-img">
                              <img src="assets/images/categories/cat-image-5.png" alt="brand-1" loading="lazy">
                          </div>
                          <p class="text-capitalize mb-0">grocery</p>
                      </div>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category6-tab" data-bs-toggle="tab" data-bs-target="#category6" type="button" role="tab" aria-controls="category6" aria-selected="true">
                      <div class="brand-item d-flex flex-column justify-content-between align-items-center">
                          <div class="cat-img">
                              <img src="assets/images/categories/cat-image-6.png" alt="brand-1" loading="lazy">
                          </div>
                          <p class="text-capitalize mb-0">Home and Kitchen</p>
                      </div>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="category7-tab" data-bs-toggle="tab" data-bs-target="#category7" type="button" role="tab" aria-controls="category7" aria-selected="true">
                      <div class="brand-item d-flex flex-column justify-content-between align-items-center">
                          <div class="cat-img">
                              <img src="assets/images/categories/cat-image-7.png" alt="brand-1" loading="lazy">
                          </div>
                          <p class="text-capitalize mb-0">Toys</p>
                      </div>
                    </button>
                  </li>
            </ul>
            <div class="main-tab-content" id="main-TabContent">
                <div class="tab-pane fade show active" id="category1" role="tabpanel" aria-labelledby="category1-tab">
                    <div class="d-flex align-items-start">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <button class="nav-link active" id="category1-1-tab" data-bs-toggle="pill" data-bs-target="#category1-1" type="button" role="tab" aria-controls="category1-1" aria-selected="true">category2</button>
                          <button class="nav-link" id="category1-2-tab" data-bs-toggle="pill" data-bs-target="#category1-2" type="button" role="tab" aria-controls="category1-2" aria-selected="false">category2</button>
                          
                        </div>
                        <div class="tab-content" id="tabContent">
                            <div class="tab-pane fade show active" id="category1-1" role="tabpanel" aria-labelledby="category1-1-tab">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-category1-2-31" aria-expanded="true" aria-controls="collapse-category1-2-31">
                                            Category 3
                                        </button>
                                        </h2>
                                        <div id="collapse-category1-2-31" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap gap-1">
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-category1-2-32" aria-expanded="true" aria-controls="collapse-category1-2-32">
                                            Category 3
                                        </button>
                                        </h2>
                                        <div id="collapse-category1-2-32" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap gap-1">
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-category1-2-33" aria-expanded="true" aria-controls="collapse-category1-2-33">
                                            Category 3
                                        </button>
                                        </h2>
                                        <div id="collapse-category1-2-33" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap gap-1">
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="category1-2" role="tabpanel" aria-labelledby="category1-2-tab">
                                <div class="accordion" id="accordionExample-2">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-category1-21-31" aria-expanded="true" aria-controls="collapse-category1-21-31">
                                            Category 3
                                        </button>
                                        </h2>
                                        <div id="collapse-category1-21-31" class="accordion-collapse collapse" data-bs-parent="#accordionExample-2">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap gap-1">
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-category1-22-32" aria-expanded="true" aria-controls="collapse-category1-22-32">
                                            Category 3
                                        </button>
                                        </h2>
                                        <div id="collapse-category1-22-32" class="accordion-collapse collapse" data-bs-parent="#accordionExample-2">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap gap-1">
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-category1-23-33" aria-expanded="true" aria-controls="collapse-category1-23-33">
                                            Category 3
                                        </button>
                                        </h2>
                                        <div id="collapse-category1-23-33" class="accordion-collapse collapse" data-bs-parent="#accordionExample-2">
                                            <div class="accordion-body">
                                                <div class="d-flex flex-wrap gap-1">
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                    <div class="product-item d-flex flex-column justify-content-between align-items-center">
                                                        <div class="img">
                                                            <img src="assets/images/categories/cat-image-2.png" alt="brand-1" loading="lazy">
                                                        </div>
                                                        <p class="text-capitalize text-lightGray mb-0">Category 4</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="tab-pane fade" id="category2" role="tabpanel" aria-labelledby="category2-tab">
                    <p class="text-center">Baby and Toddler</p>
                </div>
                <div class="tab-pane fade" id="category3" role="tabpanel" aria-labelledby="category3-tab">
                    <p class="text-center">Personal Care</p>
                </div>
                <div class="tab-pane fade" id="category4" role="tabpanel" aria-labelledby="category4-tab">
                    <p class="text-center">DIY and Tools</p>
                </div>
                <div class="tab-pane fade" id="category5" role="tabpanel" aria-labelledby="category5-tab">
                    <p class="text-center">grocery</p>
                </div>
                <div class="tab-pane fade" id="category6" role="tabpanel" aria-labelledby="category6-tab">
                    <p class="text-center">Home and Kitchen</p>
                </div>
                <div class="tab-pane fade" id="category7" role="tabpanel" aria-labelledby="category7-tab">
                    <p class="text-center">Toys</p>
                </div>
            </div>
        </div>
    </div>