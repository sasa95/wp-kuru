<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title('|',true,'right');?> <?php bloginfo('name'); ?></title>
    <?php wp_head();?>
  </head>
  
  <body>
    <div id="wrapper">
      <header id="header" class="header header--main">
        <nav class="animated slideInDown navbar navbar-toggleable-md navbar-light" id="nav--main">
          <div class="container">
            <a class="navbar-brand float-left" href="<?php bloginfo('url');?>">LOGO</a>
            <button class="navbar-toggler collapsed float-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="hamburger-menu"></span>
              <span class="hamburger-menu"></span>
              <span class="hamburger-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
             <!--  <ul class="navbar-nav ml-auto mt-md-0 text-left">
                <li class="nav-item">
                  <a class="nav-link home-link active" href="<?php bloginfo('url');?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link video-link" href="video.html">Video</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link shop-link" href="shop.html">Shop</a>
                </li>
              </ul> -->
              <?php
                $args = array(
                  'menu'          => 'header-menu',
                  'menu_class'    => 'navbar-nav ml-auto mt-md-0 text-left',
                  'container'     => 'false' 
                );
                wp_nav_menu($args);
              ?>
            </div>
          </div>
        </nav>
          <p class="animated fadeIn quote quote--header">Be you, for yourself. No one is able to replace you.</p>
          <a href="#about" class="animated fadeIn button button--elegant" style="animation-delay: .9s;">Learn More</a>
          <img class="header__arrows animated fadeIn" src="<?php bloginfo('stylesheet_directory');?>/img/header/arrows.png" alt="" style="animation-delay: 1.2s;">
      </header><!-- #header -->