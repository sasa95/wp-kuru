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
      <header id="header" class="header--no-bg">
        <nav class="scrolledNav navbar navbar-toggleable-md navbar-light" id="nav--main">
          <div class="container">
            <a class="navbar-brand float-left" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory');?>/img/logo.svg" alt="Brand Logo" width="30"><span class="logo-text">Kuru Sefu</span></a>
            <button class="togglerScrolled navbar-toggler collapsed float-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-menu hambgScrolled"></span>
              <span class="hamburger-menu hambgScrolled"></span>
              <span class="hamburger-menu hambgScrolled"></span>
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
      </header><!-- #header -->