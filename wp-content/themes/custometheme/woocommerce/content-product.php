<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$stock = $product->stock_status;
if($stock == 'outofstock')
{
	$class = 'sh out';
}
else
{
	$class = 'sh';
}
?>
<div <?php wc_product_class($class); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	?>
	<div class="shp_pic">
		<a href="<?php the_permalink(get_the_ID()); ?>">
			<?php
			do_action( 'woocommerce_before_shop_loop_item_title' );
			?>
		</a>
	</div>
	<div class="shp_stock">
		<?php 
		if($stock == 'outofstock')
		{
			$stock_class = 'out';
		}
		else
		{
			$stock_class = '1';
		}

		global $wpdb;
		$qr = $wpdb->get_results("select * from ".$wpdb->prefix."yith_wcwl where prod_id='".get_the_ID()."'");
		if(sizeof($qr)>0)
		{
			$class = 'fa-heart';
		}
		else
		{
			$class = 'fa-heart-o';
		}
		?>
    	<div class="stk-<?php echo $stock_class; ?>"><?php echo $stock == 'outofstock' ? 'OUT OF STOCK' : 'IN STOCK'; ?></div>
    	<?php 
    	if($stock != 'outofstock')
    	{
    		?>
    		<div class="stk-2"><a href="javascript:void(0);" class="wish_text item_wish"><i class="fa <?php echo $class; ?>" aria-hidden="true" id="wish_<?php the_ID(); ?>"></i></a></div>
    		<?php
    	}
    	?>        
    </div>
	<?php
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	?>
	<div class="shp_details">
		<p style="color: #e4322b;display: none;" id="wishmsg_<?php the_ID(); ?>">Please Login!</p>
    	<div class="shp_name">
    		<a href="<?php the_permalink(get_the_ID()); ?>">
				<?php
				// do_action( 'woocommerce_shop_loop_item_title' );
				the_title();
				?>
			</a>
		</div>
		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item_title.
		 *
		 * @hooked woocommerce_template_loop_rating - 5
		 * @hooked woocommerce_template_loop_price - 10
		 */
		?>
		<div class="shp_price">
			<?php
			do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
		</div>
	</div>
	<div class="shp_btns">
		<?php 
		if($stock != 'outofstock')
		{
			?>
	    	<div class="s_btn_1"><a href="<?php the_permalink(get_the_ID()); ?>">VIEW DETAILS</a></div>
	    	<?php 
    	}
    	?>
        <div class="s_btn_2">        
			<?php
			/**
			 * Hook: woocommerce_after_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_close - 5
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' );
			?>
		</div>
    </div>
</div>