<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<div class="wrapper">
	<div class="inner-page">
      	<div class="container">
        	<div class="row">
            	<div class="col-md-3 col-sm-4 ip-1">
                	<div class="side-1">
                    	<p>Search by Style / Keyword</p>
                        <div class="side-top">
                            <?php 
                            if(is_active_sidebar('sidebar-3'))
                            {
                                dynamic_sidebar('sidebar-3');
                            }
                            ?>
                        </div>
                    </div>
                    <!-- <div class="side-2">
                    	 <div class="radio">
                          <label><input type="radio" name="optradio">Seach by category</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="optradio">Seach by category</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="optradio">Search only In-Stock</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="optradio">Narrow by Feature</label>
                        </div>
                        <div class="radio">
                          <label><input type="radio" name="optradio">Narrow by Color</label>
                        </div>                       
                    </div> -->
                    <div class="side-3">
                    	<h4><?php echo get_the_category_by_ID(36); ?></h4>
                        <ul>
                            <?php 
                            $categories = get_terms( 'product_cat', array(
                                'parent'    => 36,
                                'hide_empty' => false
                            ) );
                            foreach($categories as $cat1)
                            {
                                ?>
                                <li><a href="<?php echo get_tag_link($cat1->term_id); ?>"><?php echo $cat1->name; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="side-3">
                    	<h4><?php echo get_the_category_by_ID(37); ?></h4>
                        <ul>
                        	<?php 
                            $categories = get_terms( 'product_cat', array(
                                'parent'    => 37,
                                'hide_empty' => false
                            ) );
                            foreach($categories as $cat2)
                            {
                                ?>
                                <li><a href="<?php echo get_tag_link($cat2->term_id); ?>"><?php echo $cat2->name; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="side-3">
                    	<h4><?php echo get_the_category_by_ID(38); ?></h4>
                        <ul>
                        	<?php 
                            $categories = get_terms( 'product_cat', array(
                                'parent'    => 38,
                                'hide_empty' => false
                            ) );
                            foreach($categories as $cat3)
                            {
                                ?>
                                <li><a href="<?php echo get_tag_link($cat3->term_id); ?>"><?php echo $cat3->name; ?></a></li>
                                <?php
                            }
                            ?>   
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 ip-2">
                	<?php
					/**
					 * Hook: woocommerce_before_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
					 * @hooked woocommerce_breadcrumb - 20
					 * @hooked WC_Structured_Data::generate_website_data() - 30
					 */
					do_action( 'woocommerce_before_main_content' );

					?>
					<!-- <header class="woocommerce-products-header">
						<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
							<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
						<?php endif; ?>

						<?php
						/**
						 * Hook: woocommerce_archive_description.
						 *
						 * @hooked woocommerce_taxonomy_archive_description - 10
						 * @hooked woocommerce_product_archive_description - 10
						 */
						// do_action( 'woocommerce_archive_description' );
						?>
					</header> -->
					<?php
					if ( woocommerce_product_loop() ) {

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );

						woocommerce_product_loop_start();

						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();

								/**
								 * Hook: woocommerce_shop_loop.
								 *
								 * @hooked WC_Structured_Data::generate_product_data() - 10
								 */
								do_action( 'woocommerce_shop_loop' );

								wc_get_template_part( 'content', 'product' );
							}
						}

						woocommerce_product_loop_end();

						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );
					}

					/**
					 * Hook: woocommerce_after_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action( 'woocommerce_after_main_content' );
					?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );