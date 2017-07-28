<?php 

add_theme_support('woocommerce');
add_theme_support( 'wc-product-gallery-lightbox' );

// Stylesheets
function kuru_theme_styles() {
	wp_enqueue_style( 'aos_css', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css' );
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Droid+Serif:700i|PT+Sans:400,700' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts','kuru_theme_styles' );

// Scripts
function kuru_theme_scripts() {
	wp_enqueue_script('bootstrap_js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('aos_js','https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js','','',true);
	wp_enqueue_script('main_js',get_template_directory_uri() . '/js/main.js',array('jquery', 'bootstrap_js'),'',true);
}
add_action('wp_enqueue_scripts','kuru_theme_scripts' );

// Menu

add_theme_support('menus');

function register_theme_menus(){
	register_nav_menus(
		array(
			'header-menu'	=>__('Header Menu')
		)
	 );
}
add_action('init','register_theme_menus');

// Woocommerce
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

// Change add to cart text on archives depending on product type
add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->get_type();
	
	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'View', 'woocommerce' );
		break;
		case 'simple':
			return __( 'Add to cart', 'woocommerce' );
		break;
		case 'variable':
			return __( 'Select', 'woocommerce' );
		break;
		default:
			return __( 'Read more', 'woocommerce' );
	}
	
}


// Remove sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );



// Posts per page
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}

// Pagination
function kvcodes_pagination_fn($pages = '', $range = 2){  
     $showitems = ($range * 2)+1;     // This is the items range, that we can pass it as parameter depending on your necessary. 

     global $paged;  // Global variable to catch the page counts
     if(empty($paged)) $paged = 1;

     if($pages == '') {   // paged is not defined than its first page. just assign it first page.    
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
            $pages = 1;
     }   

     if(1 != $pages) { //For other pages, make the pagination work on other page queries     
         echo "<div class='kvc_pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)    {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))   
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

// add_filter('body_class','my_class_names');
// function my_class_names($classes) {
//     return array();
// }

add_filter( 'body_class', 'adjust_body_class' );
function adjust_body_class( $classes ) { 
 
    foreach ( $classes as $key => $value ) {
        if ( $value == 'woocommerce-page' || $value == 'woocommerce') unset( $classes[ $key ] );
    }

   if ( is_shop())
      $classes[] = 'neat-stuff';
     
    return $classes; 
     
}
// Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php).
// Used in conjunction with https://gist.github.com/DanielSantoro/1d0dc206e242239624eb71b2636ab148
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
 
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<a class="cart-customlocation" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?></a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}

/*---Move Product Title*/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5 );



add_filter( 'woocommerce_variable_sale_price_html', function($html, $product) {

    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( _x( '%1$s&ndash;%2$s', 'Price range: from-to', 'woocommerce' ), wc_price( $prices[0] ), wc_price( $prices[1] ) ) : wc_price( $prices[0] );

    return $price;

    return $html;
}, 10 ,2 );

add_filter( 'woocommerce_variable_sale_price_html', function($html, $product) {

    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $price = $prices[0] !== $prices[1] ? sprintf( _x( '%1$s&ndash;%2$s', 'Price range: from-to', 'woocommerce' ), wc_price( $prices[0] ), wc_price( $prices[1] ) ) : wc_price( $prices[0] );

    return $price;

    return $html;
}, 10 ,2 );

?>