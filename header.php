<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title('|',true,'right');?> <?php bloginfo('name'); ?></title>
    <?php wp_head();?>
  </head>

  <body <?php body_class(); ?>>
    <div id="wrapper">
      <header id="header" class="header header--main">
        <nav class="navbar navbar-toggleable-md navbar-light" id="nav--main" data-aos="fade-down" data-aos-delay="200">
          <div class="container">
            <a class="navbar-brand float-left" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory');?>/img/logo.svg" alt="Brand Logo" width="30"><span class="logo-text">Kuru Sefu</span></a>
            <button class="navbar-toggler collapsed float-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-menu"></span>
              <span class="hamburger-menu"></span>
              <span class="hamburger-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
              <?php
                $args = array(
                  'menu'          => 'header-menu',
                  'menu_class'    => 'navbar-nav ml-auto mt-md-0 text-left',
                  'container'     => 'false' 
                );
                wp_nav_menu($args);
              ?>
               <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
            </div>
          </div>
        </nav>
          <p class="animated fadeIn quote quote--header" data-aos="fade" data-aos-delay="500">Be you, for yourself. No one is able to replace you.</p>
          <a href="<?php if(is_page('video')) {echo "#video-section";} else {echo "#about";}?>" class="button button--elegant" data-aos="fade-up" data-aos-offset="-100" data-aos-delay="700">Learn More</a>
          <img class="header__arrows" src="<?php bloginfo('stylesheet_directory');?>/img/header/arrows.png" alt=""  data-aos="fade" data-aos-offset="-100" data-aos-delay="900">
      </header><!-- #header -->