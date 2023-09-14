$(function () {
  /*console*/
  ("use strict");
  $(document).ready(function(){
    var documentDir = $('body').attr('dir') == 'rtl' ? 'left' : 'right';
    var header = $("header");
    //sticky-header
    $(window).scrollTop() >= header.height() && $(window).width() >= 768
      ? header.addClass("sticky-header").fadeIn()
      : header.removeClass("sticky-header");

    $(window).scroll(function () {
      //if condition
      $(window).scrollTop() >= header.height() && $(window).width() >= 768
        ? header.addClass("sticky-header").fadeIn()
        : header.removeClass("sticky-header");
    });
    /* active link */
    $("header .menuLinks li").click(function () {
      $(this).addClass("active").siblings().removeClass("active");
    });

    $('header .all-cate > div > ul > .sub-menu').mouseover(function() {
      $('header .all-cate > div > ul > .sub-menu.active').removeClass('active');
      $(this).addClass('active');
    }).mouseout(function() {
      $('header .all-cate > div > ul > .sub-menu.active').removeClass('active');
      $('header .all-cate > div > ul > .sub-menu:first-child').addClass('active');
    });

  // toggle menu
  $("header .toggle").click(function () {
    $("#mobile-menu, header .toggle .menu-icon").toggleClass("open");
    $(".body-overlay").toggleClass("appear");
    $('#main-wrapper, footer').fadeToggle('100');
  });

  // heart Button
    $(".heart-like-button").click(function(){
        $(this).parent().toggleClass("liked");
    });
    $(".btn-wishlist").click(function(){
        $(this).toggleClass("liked");
    });

    var scrollButton = $("#scrollTop");
    $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
        scrollButton.fadeIn();
      } else {
        scrollButton.fadeOut();
      }
    });

    //click to scroll top
    scrollButton.click(function () {
      $('html,body').animate({
          scrollTop: 0
      }, 500);
    });

    // Add to Cart
    /* $('.card .card-body a.add-to-cart').on('click', function(e){
        e.preventDefault();
        $('#sidebar.modal-sidebar-cart').addClass('open');
        $('.body-overlay').addClass('appear');
    }); */

    $(document).on('click', 'a.ajax_add_to_cart', function(e) {
      e.preventDefault();

      var $button = $(this);
      var productID = $button.attr('data-product_id');
      var data = {
          action: 'add_to_cart',
          product_id: productID
      };

      $.ajax({
          url: window.location.href + '?wc-ajax=add_to_cart',
          type: 'POST',
          data: data,
          success: function(response) {
              // Update any necessary elements or trigger custom actions
              $('#sidebar.modal-sidebar-cart').addClass('open');
              $('.body-overlay').addClass('appear');
          }
      });
    });

    $('#sidebar.modal-sidebar-cart .btn-continue, .body-overlay').click(function(){
        $('#sidebar.modal-sidebar-cart').removeClass('open');
        $('#categories-page .filters').removeClass('open');
        $('#mobile-menu').removeClass('open');
        $('.body-overlay').removeClass('appear');
    });

    $('#filter-btn').click(function(){
      $('#categories-page .filters').addClass('open');
      $('.body-overlay').addClass('appear');
    })

    // cart number
    $('#cart-list .quantity').on('click', '.qtyplus', function (e) {
      $(this).addClass('clicked');
      let $input = $(this).prev('input.qty');
      let val = parseInt($input.val());
      $input.val(val + 1).change();
      updateQty($input, 'plus');
    });

    $('#cart-list .quantity').on('click', '.qtyminus', function (e) {
        $(this).addClass('clicked');
        let $input = $(this).next('input.qty');
        var val = parseInt($input.val());
        if (val > 1) {
          $input.val(val - 1).change();
          updateQty($input,'mins');
        }
    });

    function updateQty(qtyInput, type){
      let item_quantity = qtyInput.val();
      let cart_item_key = qtyInput.attr( 'name' ).replace(/cart\[([\w]+)\]\[qty\]/g, "$1");
      let currentVal = parseFloat(item_quantity);
      let product_price = parseFloat(parseFloat(qtyInput.attr( 'pro_price' )).toFixed(2));
      $.ajax({
          type: 'POST',
          url: wc_ajax_params.ajax_url,
          data: {
            action: 'update_cart',
            cart_item_key: cart_item_key,
            quantity: currentVal,
            security: wc_ajax_params.security
          },
          success: function(data) {
            // update subtottal of product
            let elementText = $(qtyInput).closest('tr').find( 'td.total bdi' ).contents()[0].nodeValue;
            
            let elementTextDir = elementText.trim().split("\n")[0].replace(",", "");
            let elementTextNum = parseFloat(parseFloat(elementTextDir).toFixed(2));
            let currentSubtotal = type == 'plus' ? 
                                parseFloat(elementTextNum + product_price).toFixed(2) : 
                                parseFloat(elementTextNum - product_price).toFixed(2);
            $(qtyInput).closest('tr').find( 'td.total bdi' ).contents()[0].nodeValue = currentSubtotal;

            // Update total Price
            let totalText = $('.deatils .woocommerce-Price-amount bdi').contents()[0].nodeValue;
            let totalTextDir = totalText.trim().split("\n")[0].replace(",", "");
            let totalTextNum = parseFloat(parseFloat(totalTextDir).toFixed(2));
            let currentTotal = type == 'plus' ? 
                                parseFloat(totalTextNum + product_price).toFixed(2) : 
                                parseFloat(totalTextNum - product_price).toFixed(2);
            $('.deatils .woocommerce-Price-amount bdi').each(function(){
              $(this).contents()[0].nodeValue = currentTotal;
            })

            $(qtyInput).closest('tr').find('.clicked').removeClass('clicked');
          }
      });  
    }

    // show and hide password
    $('.password .input-group-text').click(function(){
      var inputType = ($(this).parent().find('input').attr('type') == 'password') ?  'text' : 'password';
      $(this).parent().find('input').attr('type',inputType)
    })
  })

  /* Insialize animation on scroll */
  function initiateAnimation() {
    AOS.init({
      delay: 200, // values from 0 to 3000, with step 50ms
      duration: 900, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: true,
    });
  }
  initiateAnimation();

});
