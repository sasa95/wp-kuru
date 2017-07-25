<?php 
/*
	Template Name: Video
*/
?>

<?php get_header(); ?>
	<div id="content"><!-- #content -->
        <section class="section--video py-5" id="video-section">
          <div class="container">
            <h1 class="text-center mb-5 font-weight-normal">Videos</h1>
            <?php query_posts('category_name=videos&posts_per_page=2'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<div class="single-video-container">
				<h2 class="entrytitle video-title" id="post-<?php the_ID();?>"><?php the_title();?></h2>
				 <div class="embed-responsive embed-responsive-16by9">
            		<iframe class="embed-responsive-item" allowfullscreen src="//www.youtube.com/embed/<?php echo get_the_content();?>" ></iframe>
          		</div>
			</div>

			<?php endwhile; endif; ?>
			<?php kvcodes_pagination_fn(); ?>
			<?php wp_reset_query(); ?>
          </div>
        </section>
    </div><!-- #content -->
<?php get_footer(); ?>