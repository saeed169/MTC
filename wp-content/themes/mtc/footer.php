<footer>
    <div id="footer" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <div class="img">
                        <img data-src="assets/images/logo.svg" alt="logo iamge" class="lazyload">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <h3 class="fs-5 mb-3 fw-600">Location</h3>
                    <p class="mb-0 font-weight-bold countery">Egypt -</p>
                    <p class="str">Samia Elgamal St, Mansoura</p>
                    <div class="social-icon">
                        <a href="#" class="me-2"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="me-2"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <h3 class="fs-5 mb-3 fw-600">Contact Us</h3>
                    <p>If you have any questions or need help, feel free to contact with our team.</p>
                    <div class="d-flex mb-2">
                        <span class="icon me-2"><i class="fas fa-phone"></i></span>
                        <span class="me-2">(002)</span>
                        <span class="category">011 571 148 798</span>
                    </div>
                    <div class="d-flex">
                        <span class="icon me-2"><i class="fas fa-envelope"></i></span>
                        <span class="category">mTc support @ gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <h3 class="fs-5 mb-3 fw-600">Usefull Links</h3>
                    <ul class="links">
                        <li class="mb-2"><a href="home.html" class="active">Home</a></li>
                        <li class="mb-2"><a href="brands.html">Brands</a></li>
                        <li class="mb-2"><a href="about.html">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center bg-white py-2">
        <div class="container">
            <p class="text-gray mb-0 fw-400 py-2">Copyright ©2023 Roqay. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Start SideBar Add-to-Cart  -->
<div class="body-overlay sidebar"></div>
<div id="sidebar" class="modal-sidebar-cart">
    <div class="cart-content">
        <div class="product-selected d-flex">
            <div class="img">
                <img src="assets/images/products/product-4.png" alt="product image" loading="lazy">
            </div>
            <div>
                <p class="title text-lightGray fs-7 mb-2">Seeds of Change Organic Quinoa, Brown</p>
                <p class="price">
                    <span class="text-darkGray me-1">100KD</span>
                    <span class="text-lightGray text-decoration-line-through">150KD</span>
                </p>
            </div>
        </div>
        <div class="product-selected d-flex">
            <div class="img">
                <img src="assets/images/products/product-1.png" alt="product image" loading="lazy">
            </div>
            <div>
                <p class="title text-lightGray fs-7 mb-2">Werther’s Original Caramel Hard Candies</p>
                <p class="price">
                    <span class="text-darkGray me-1">100KD</span>
                    <span class="text-lightGray text-decoration-line-through">150KD</span>
                </p>
            </div>
        </div>
        <div class="total text-darkGray d-flex justify-content-between mt-3">
            <h6>Total cart</h6>
            <p class="fw-600">500 KD</p>
        </div>
        <div class="btns mt-3">
            <a href="checkout.html" class="btn btn-primary btn-checkout fw-600 w-100 mb-3">Check Out</a>
            <a href="javascript:void(0)" class="btn btn-continue text-darkGray w-100">Continue Shopping</a>
        </div>
    </div>
</div>
<!-- End SideBar Add-to-Cart  -->

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
                <form>
                    <div class="mb-3">
                        <label for="full-name" class="form-label">Full Name</label>
                        <input type="text" id="full-name" class="form-control border-0" placeholder="Full name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" class="form-control border-0" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control border-0" placeholder="Phone Number">
                    </div>
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group password flex-nowrap mb-3">
                            <input type="password" id="password" class="form-control border-0" placeholder="Password"
                                aria-label="Password" aria-describedby="addon-wrapping2">
                            <span class="input-group-text" id="addon-wrapping2"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <div>
                        <label for="confirm-password" class="form-label">Confirm Password</label>
                        <div class="input-group password flex-nowrap mb-3">
                            <input type="password" id="confirm-password" class="form-control border-0"
                                placeholder="Confirm Password" aria-label="Password" aria-describedby="addon-wrapping3">
                            <span class="input-group-text" id="addon-wrapping3"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 border-0 py-3 mt-3" type="button">Register</button>
                </form>
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
                    <h2 class="modal-title fs-5 fw-bolder text-darkGray mb-1" id="loginModalLabel">welcome back!
                    </h2>
                    <p class="text-lightGray fw-600 mb-0">Sign in to your account</p>
                </div>
            </div>
            <div class="modal-body">

                <form method="POST">

                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">User</label>
                        <input type="text" id="loginEmail" placeholder="User" name="username"
                            class="form-control border-0">
                    </div>
                    <div>
                        <label for="password-login" class="form-label">Password</label>
                        <div class="input-group password flex-nowrap mb-3">
                            <input type="password" id="password-login" name="password" class="form-control border-0"
                                placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping4">
                            <span class="input-group-text" id="addon-wrapping4"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="d-flex justify-content-between flex-column flex-sm-row mb-5 mt-4 mt-sm-0">
                            <div class="form-check order-2 order-sm-1">
                                <input class="form-check-input" name="remember" type="checkbox" value="1"
                                    id="flexCheckChecked-1">
                                <label class="form-check-label" for="flexCheckChecked-1">Remmber me</label>
                            </div>
                            <div class="order-1 order-sm-2 mb-4 mb-sm-0">
                                <a data-bs-toggle="modal" href="#forgetPasswordModal" role="button"
                                    class="text-primary">Forget your password?</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary w-100 border-0 py-3" type="submit"
                            name="btn_submit">Login</button>
                    </div>
                </form>

                <?php
                        // global $user_ID;
                        // global $wpdb;

                        // if (isset($_POST['btn_submit'])) {
                        //     $username = $wpdb->escape($_POST['username']);
                        //     $password = $wpdb->escape($_POST['password']);
                        //     $login_array = array();
                        //     $login_array['user_login'] = $username;
                        //     $login_array['user_password'] = $password;
                        //     $verify_user = wp_signon($login_array, true);
                            
                        //     if (!is_wp_error($verify_user)) {
                        //         echo "<script>window.location='" . site_url() . "'</script>";
                        //     } else { 
                            
                        if (isset($_POST['btn_submit'])) {
                            $username = sanitize_user($_POST['username']);
                            $password = sanitize_text_field($_POST['password']);
                        
                            // Perform custom validation if needed
                        
                            $creds = array(
                                'user_login'    => $username,
                                'user_password' => $password,
                                'remember'      => true,
                            );
                        
                            $user = wp_signon($creds, false);
                        
                            if (is_wp_error($user)) {
                                echo "Login Error";
                            } else {
                                
                                wp_redirect(home_url('/dashboard/')); 
                                exit();
                            }
                        }
                ?>

                <div class="mt-4 text-center">
                    <span class="text-gray">Don't have an account? </span>
                    <a data-bs-toggle="modal" href="#registerModal" role="button" class="text-primary fw-600">Register
                        Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal main-modal fade addressModal" id="addressModal" aria-hidden="true" aria-labelledby="addressModalLabel"
    tabindex="-1">
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
                            <p class="text-lightGray mb-2">Arzan Financial Group Tower, Mezzanine, Ahmed Al Jaber
                                Street, Sharq, Kuwait City</p>
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
                            <p class="text-lightGray mb-2">Arzan Financial Group Tower, Mezzanine, Ahmed Al Jaber
                                Street, Sharq, Kuwait City</p>
                            <p class="text-lightGray mb-2">+29 5 6 5 711 480 4</p>
                        </div>
                        <div class="card-btns d-flex justify-content-end gap-3">
                            <a href="#">Edit</a>
                            <span class="text-lightGray">|</span>
                            <a href="#" class="text-red">Remove</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end btns gap-3">
                        <button class="btn btn-cancel" type="button" data-bs-dismiss="modal"
                            aria-label="Close">Cancel</button>
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
                        <span class="text-gray">Enter Your Registered email address and we`ll send you a verification
                            code</span>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-4">
                        <input type="email" placeholder="Example .s@gmail.com" class="form-control border-0">
                    </div>
                    <div>
                        <a data-bs-toggle="modal" href="#verificationmodel" role="button"
                            class="btn btn-primary w-100 border-0 py-3">Send</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal main-modal fade" id="verificationmodel" aria-hidden="true" tabindex="-1">
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
                        <a data-bs-toggle="modal" href="#resetPasswordModal" role="button"
                            class="btn btn-primary w-100 border-0 py-3">Verify</a>
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
                            <input type="password" id="password-reset" class="form-control border-0"
                                placeholder="********" aria-label="Password" aria-describedby="addon-wrapping5">
                            <span class="input-group-text" id="addon-wrapping5"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="confirm-password-reset" class="form-label">Confirm Password</label>
                        <div class="input-group password flex-nowrap">
                            <input type="password" id="confirm-password-reset" class="form-control border-0"
                                placeholder="********" aria-label="Password" aria-describedby="addon-wrapping6">
                            <span class="input-group-text" id="addon-wrapping6"><i class="fas fa-eye"></i></span>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary w-100 border-0 py-3" type="button">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="scrollTop" class="icon-angle-up">
    <i class="fas fa-angle-up"></i>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://fastly.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/js/star-rating.min.js"
    integrity="sha512-BjVoLC9Qjuh4uR64WRzkwGnbJ+05UxQZphP2n7TJE/b0D/onZ/vkhKTWpelfV6+8sLtQTUqvZQbvvGnzRZniTQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.1.2/themes/krajee-fas/theme.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
<!--Slick Silder-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>
<script>
$(document).ready(function() {
    $('.address-card').click(function() {
        $(this).addClass('selected').siblings('.selected').removeClass('selected');
        $(this).find('input').prop('checked', true);
    })
})
var rtlVal = $('body').attr('dir') == 'rtl' ? true : false;

$(".banner-carousel").owlCarousel({
    items: 1,
    rtl: rtlVal,
    dots: true,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    navText: ["<span><i class='fas fa-chevron-left'></i></i></span>",
        "<span><i class='fas fa-chevron-right'></i></i></span>"
    ],
    loop: true,
});
$(".categories-carousel").owlCarousel({
    rtl: rtlVal,
    dots: false,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    navText: ["<span><i class='fas fa-chevron-left'></i></i></span>",
        "<span><i class='fas fa-chevron-right'></i></i></span>"
    ],
    loop: true,
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 2,
        },
        768: {
            items: 3,
        },
        992: {
            items: 5,
        },
        1200: {
            items: 7,
        },
    },
});

$(".special-products-carousel").owlCarousel({
    rtl: rtlVal,
    dots: false,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    navText: ["<span><i class='fas fa-chevron-left'></i></i></span>",
        "<span><i class='fas fa-chevron-right'></i></i></span>"
    ],
    loop: true,
    margin: 20,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 4,
        },
    },
});
$(".most-popular-carousel").owlCarousel({
    rtl: rtlVal,
    dots: false,
    nav: true,
    autoplay: false,
    autoplayHoverPause: true,
    navText: ["<span><i class='fas fa-chevron-left'></i></i></span>",
        "<span><i class='fas fa-chevron-right'></i></i></span>"
    ],
    loop: true,
    margin: 20,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 4,
        },
    },
});
$(".rating").rating({
    clearButton: '',
    clearCaption: '',
    'size': 'sm',
    starCaptions: function(val) {
        return '(' + val + ')';
    }
});
// verification Code
const inputElements = [...document.querySelectorAll('input.code-input')]
inputElements.forEach((ele, index) => {
    ele.addEventListener('keydown', (e) => {
        // if the keycode is backspace & the current field is empty
        // focus the input before the current. Then the event happens
        // which will clear the "before" input box.
        if (e.keyCode === 8 && e.target.value === '') inputElements[Math.max(0, index - 1)].focus()
    })
    ele.addEventListener('input', (e) => {
        const [first, ...rest] = e.target.value
        e.target.value = first ?? ''
        const lastInputBox = index === inputElements.length - 1
        const didInsertContent = first !== undefined
        if (didInsertContent && !lastInputBox) {
            // continue to input the rest of the string
            inputElements[index + 1].focus()
            inputElements[index + 1].value = rest.join('')
            inputElements[index + 1].dispatchEvent(new Event('input'))
        }
    })
});

$('.slider-single').slick({
    rtl: rtlVal,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
    useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});

$('.slider-nav')
    .on('init', function(event, slick) {
        $('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
        //rtl: rtlVal,
        slidesToShow: 3.5,
        slidesToScroll: 3.5,
        dots: false,
        vertical: true,
        verticalSwiping: true,
        focusOnSelect: true,
        infinite: false,
        responsive: [
            /* {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 2.5,
                }
            }, */
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    verticalSwiping: false,
                }
            }
        ]
    });

$('.slider-single').on('afterChange', function(event, slick, currentSlide) {
    $('.slider-nav').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.slider-nav .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
});

$('.slider-nav').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');

    $('.slider-single').slick('slickGoTo', goToSingleSlide);
});
</script>

<?php wp_footer();?>
</body>

</html>