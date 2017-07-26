<?php if(is_page('shop')) { get_header('shop');} else { get_header(); }?>

<div id="content"><!-- #content -->
  <section class="section--shop pt-5" id="shop-section">
    <div class="container text-center">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <h1><?php the_title(); ?></h1>      
      <p><?php the_content(); ?></p>        
	
  	<?php endwhile; else : ?>
  	
  	  <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>
  	
  	<?php endif; ?>
    
    </div>
  </section>
</div>


<?php get_footer(); ?>


