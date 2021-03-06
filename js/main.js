AOS.init({
  duration: 1200,
  once:true
});

jQuery( document ).ready( function( $ ) {
  
  $(document).on('ready scroll',function() {
    var $nav = $('#nav--main');  
    var $header = $('.header');
    var $headerHight = $header.height();
    var $navbarToggler = $('.navbar-toggler');
    var $hambg = $('.hamburger-menu');
    if($(window).scrollTop() > $headerHight - 100){
      $nav.addClass('scrolledNav');
      $navbarToggler.addClass('togglerScrolled');
      $hambg.addClass('hambgScrolled');
    }
    else {
      $nav.removeClass('scrolledNav');
      $navbarToggler.removeClass('togglerScrolled');
      $hambg.removeClass('hambgScrolled');
    }
  });

  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
        && 
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });

    $('.button--add-to-cart.product_type_simple').click(function() {
      $(this).prev('.shop-item-link').addClass('shop-item-link--added');
    });

    $('body.single-product').find('.wp-post-image').addClass('img-fluid');

    if($('.summary.entry-summary').length>0){
       $( // wrap by jquery to convert to jQuery object
          $('.summary.entry-summary .woocommerce-Price-amount')[0] // get the dom element also you can use `get(0)`
          .nextSibling // get the textnode which is next to it
        ).wrap('<span class="price__range-dash"/>'); //  wrap the element by p tag
    }

   $(function(){
      $('#woo_pp_ec_button').attr('target', '_blank');
      $(document).ajaxComplete(function() {
        $('#woo_pp_ec_button').attr('target', '_blank');
    });
   });

  $('#contact-form').submit(function(e){
    var name = $('#contact-form #name').val();
    var email = $('#contact-form #email').val();
    var message = $('#contact-form #message').val();

    if (!name) {
      e.preventDefault();
      alertify.error('Please, fill in the name field.');
    }

    else
      if (!email) {
        e.preventDefault();
        alertify.error('Please, fill in the email field.');
      }

    else
       if (!message) {
        e.preventDefault();
        alertify.error('Please, fill in the message field.');
      }

      else {
        $.ajax({
            url: "https://formspree.io/sasadrmic032@gmail.com", 
            method: "POST",
            data: $(this).serialize(),
            dataType: "json"
        });
        e.preventDefault();
        $(this).get(0).reset();
        alertify.success('Message sent!');
      }

  });

});