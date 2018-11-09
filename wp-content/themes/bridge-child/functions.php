<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);







/**
 * Replace add to cart button in the loop.
 */
function iconic_change_loop_add_to_cart() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    add_action( 'woocommerce_after_shop_loop_item', 'iconic_template_loop_add_to_cart', 10 );
}
add_action( 'init', 'iconic_change_loop_add_to_cart', 10 );
/**
 * Use single add to cart button for variable products.
 */
function iconic_template_loop_add_to_cart() {
    global $product;
 
    if ( ! $product->is_type( 'variable' ) ) {
        woocommerce_template_loop_add_to_cart();
        return;
    }
 
    remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
    add_action( 'woocommerce_single_variation', 'iconic_loop_variation_add_to_cart_button', 20 );
 
    woocommerce_template_single_add_to_cart();
}
 
/**
 * Customise variable add to cart button for loop.
 *
 * Remove qty selector and simplify.
 */
function iconic_loop_variation_add_to_cart_button() {
    global $product;
 
    ?>
    <div class="woocommerce-variation-add-to-cart variations_button">
		<?php /*?><a rel="nofollow" style="opacity:1; visibility: visible;" href="/?add-to-cart=<?php echo absint( $product->get_id() ); ?>&variation_id=15618&variation=100" data-quantity="1" data-product_id="<?php echo absint( $product->get_id() ); ?>" data-product_sku="<?php echo absint( $product->get_sku() ); ?>" class="qbutton add-to-cart-button button product_type_simple add_to_cart_button ajax_add_to_cart qbutton add-to-cart-button added1">Add to cart</a><?php */?>
        <button type="submit" class="single_add_to_cart_button button"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
        <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
        <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
        <input type="hidden" name="variation_id" class="variation_id" value="0" />
    </div>
    <?php
}



/*add_action( 'woocommerce_shortcode_before_product_cat_loop', 'custom_print_message', 11 );
add_action( 'woocommerce_before_shop_loop', 'custom_print_message', 11 );
add_action( 'woocommerce_before_single_product', 'custom_print_message', 11 );
function custom_print_message() {
    if( WC()->cart->is_empty() ){
        $message = __("1st cart item message here", "woocommerce");

        // HERE BELOW, replace clothing' with your product category (can be an ID, a slug or a name)
        echo '<div class="woocommerce-info hidden" style="display:none;">' . $message . '</div>';
    }
    ?>
    <script type="text/javascript">
    jQuery( function($){
        $('body').on('added_to_cart', function(){
			alert('first item added');
            $('.woocommerce-info.hidden').show('fast');
        });
    });
    </script>
    <?php
}*/



/**
 * Tutorial: http://www.skyverge.com/blog/check-if-woocommerce-cart-is-empty/
**/
/*function custome_add_to_cart() {
	if ( WC()->cart->get_cart_contents_count() == 1 ) {
			//$message = sprintf('hello');
			//return $message;
			//header('Location: http://www.example.com/');
			//$url = 'http://dpws-demo.site/GODIS/';
//			wp_redirect( $url );
//			exit;
        	//wc_print_notice( __( 'Get free shipping if your order is over &#36;60!', 'woocommerce' ), 'notice' );
        	// Change notice text as desired
	}
}
add_action('woocommerce_add_to_cart', 'custome_add_to_cart');*/




/*add_filter( 'woocommerce_add_to_cart_message', 'custom_add_to_cart_message' );
function custom_add_to_cart_message() {
    global $woocommerce;
    // Output success messages
    if (get_option('woocommerce_cart_redirect_after_add')=='yes') :
    $return_to = get_permalink(woocommerce_get_page_id('shop'));

    $message = sprintf('<a href="%s" class="button">%s</a> %s', $return_to, __('Continue Shopping &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') );

    else :
        $message = sprintf('<a href="%s" class="button">%s</a> %s', get_permalink(woocommerce_get_page_id('cart')), __('View Cart &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') );

    endif;
    return $message;
}
function your_woo_ajax_solution( $translation, $text, $domain ) {
if ( $domain == 'woocommerce' ) { // your domain name
   if ( $text == 'View Cart' ) { // current text that shows
       $translation = 'Product successfully added to your cart.'; // The text that you would like to show
   }
}
return $translation;
}
add_filter( 'gettext', 'your_woo_ajax_solution', 10, 3 ); 
*/
