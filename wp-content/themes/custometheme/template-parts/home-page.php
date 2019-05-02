<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
while ( have_posts() ) : the_post();
?>
	<div class="wrapper">
		<div class="pert_1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="p_1_left">
							<?php the_field('evening_growns_content',get_the_ID()); ?>
							<div class="p_1_more">
								<a href="<?php echo get_term_link(22); ?>">SHOP NOW</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="p_1_right">
							<div id="owl-demo" class="owl-carousel">
								<?php 
								$evening_growns = get_field('evening_growns',get_the_ID());
								foreach($evening_growns as $eg)
								{
									$eg_featured_image = wp_get_attachment_url( get_post_thumbnail_id($eg->ID));
									?>
									<div class="item">
										<div class="p_1_pic">
											<a href="<?php the_permalink($eg->ID); ?>">
												<img src="<?php echo $eg_featured_image; ?>" alt="<?php echo $eg->post_title; ?>" />
											</a>
										</div>
									</div>
									<?php 
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 p_2_heading">
						<?php the_field('wedding_collection_content',get_the_ID()); ?>
					</div>
				</div>
				<div class="row margin-top-30">
					<div class="col-md-12 col-sm-12">						
						<div class="p_2_1">
							<div class="p_2_1_dec">
								<h4><?php echo get_the_category_by_ID(23);?></h4>
								<p>Collection</p>
								<div class="shp_1"><a href="<?php echo get_term_link(23); ?>">SHOP NOW</a></div>
							</div>
						</div>
						<div class="p_2_2">
							<div class="p_2_2_dec">
								<h4><?php echo get_the_category_by_ID(24);?></h4>
								<div class="shp_2"><a href="<?php echo get_term_link(24); ?>">SHOP NOW</a></div>
							</div>
						</div>
						<div class="p_2_3">
							<div class="p_2_3_dec">
								<h4><?php echo get_the_category_by_ID(25);?></h4>
								<p>Collection</p>
								<div class="shp_3"><a href="<?php echo get_term_link(25); ?>">SHOP NOW</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_3">
			<div class="container">
				<div class="row">
					<div class="col-md-12 p_3_heading"><?php the_field('celebrity_look_content',get_the_ID()); ?></div>
				</div>
				<div class="row margin-top-40">
					<?php 
					$celebrity_looks = get_field('celebrity_looks',get_the_ID());

					$celebrity_look_1_image = wp_get_attachment_url( get_post_thumbnail_id($celebrity_looks[0]->ID));
					$celebrity_look_2_image = wp_get_attachment_url( get_post_thumbnail_id($celebrity_looks[1]->ID));
					$celebrity_look_3_image = wp_get_attachment_url( get_post_thumbnail_id($celebrity_looks[2]->ID));
					$celebrity_look_4_image = wp_get_attachment_url( get_post_thumbnail_id($celebrity_looks[3]->ID));

					$product1 = wc_get_product( $celebrity_looks[0]->ID );
					$product_price1 = $product1->get_price();

					$product2 = wc_get_product( $celebrity_looks[1]->ID );
					$product_price2 = $product2->get_price();

					$product3 = wc_get_product( $celebrity_looks[2]->ID );
					$product_price3 = $product3->get_price();

					$product4 = wc_get_product( $celebrity_looks[3]->ID );
					$product_price4 = $product4->get_price();
					?>
					<div class="col-md-4 col-sm-4">
						<div class="sp_1">
							<div class="sp_love"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
							<div class="sp_1_pic">
								<a href="<?php the_permalink($celebrity_looks[0]->ID); ?>" class="celebrity_link">
									<img src="<?php echo $celebrity_look_1_image; ?>" alt="<?php echo $celebrity_looks[0]->post_title; ?>" />
								</a>
							</div>
							<div class="sp_1_titl">
								<a href="<?php the_permalink($celebrity_looks[0]->ID); ?>" class="celebrity_link"><?php echo $celebrity_looks[0]->post_title; ?></a>
							</div>
							<div class="sp_1_prc">$<?php echo $product_price1; ?></div>
						</div>
						<div class="sp_1">
							<div class="sp_love"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
							<div class="sp_1_pic">
								<a href="<?php the_permalink($celebrity_looks[1]->ID); ?>" class="celebrity_link"><img src="<?php echo $celebrity_look_2_image; ?>" alt="<?php echo $celebrity_looks[1]->post_title; ?>" />
								</a>
							</div>
							<div class="sp_1_titl"><a href="<?php the_permalink($celebrity_looks[1]->ID); ?>" class="celebrity_link"><?php echo $celebrity_looks[1]->post_title; ?></a></div>
							<div class="sp_1_prc">$<?php echo $product_price2; ?></div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="sp_2">
							<div class="sp2_pic"><img src="<?php the_field('celebrity_look_image',get_the_ID()); ?>" alt="celebrity looks" /></div>
							<div class="sp2_shop"><a href="<?php echo get_term_link(19); ?>">SHOP NOW</a></div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="sp_3">
							<div class="sp_love"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
							<div class="sp_1_pic">
								<a href="<?php the_permalink($celebrity_looks[2]->ID); ?>"><img src="<?php echo $celebrity_look_3_image; ?>" class="celebrity_link" alt="<?php echo $celebrity_looks[2]->post_title; ?>" /></a>
							</div>
							<div class="sp_1_titl"><a href="<?php the_permalink($celebrity_looks[2]->ID); ?>" class="celebrity_link"><?php echo $celebrity_looks[2]->post_title; ?></a></div>
							<div class="sp_1_prc">$<?php echo $product_price3; ?></div>
						</div>
						<div class="sp_3">
							<div class="sp_love"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
							<div class="sp_1_pic">
								<a href="<?php the_permalink($celebrity_looks[3]->ID); ?>"><img src="<?php echo $celebrity_look_4_image; ?>" class="celebrity_link" alt="<?php echo $celebrity_looks[3]->post_title; ?>" /></a>
							</div>
							<div class="sp_1_titl"><a href="<?php the_permalink($celebrity_looks[3]->ID); ?>" class="celebrity_link"><?php echo $celebrity_looks[3]->post_title; ?></a></div>
							<div class="sp_1_prc">$<?php echo $product_price4; ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_4">
			<div class="container">
				<div class="row">
					<div class="col-md-12 p_4_heading">
						<?php the_field('special_occasion_content',get_the_ID()); ?>
					</div>
				</div>
				<div class="row margin-top-40">
					<?php 
					$category1 = get_term_by( 'id', 26, 'product_cat' );
					$category2 = get_term_by( 'id', 27, 'product_cat' );
					$category3 = get_term_by( 'id', 28, 'product_cat' );
					$category4 = get_term_by( 'id', 29, 'product_cat' );

					$thumbnail_id1 = get_woocommerce_term_meta( $category1->term_id, 'thumbnail_id', true ); 
					$category1_image = wp_get_attachment_url($thumbnail_id1);
					$thumbnail_id2 = get_woocommerce_term_meta( $category2->term_id, 'thumbnail_id', true ); 
					$category2_image = wp_get_attachment_url($thumbnail_id2);
					$thumbnail_id3 = get_woocommerce_term_meta( $category3->term_id, 'thumbnail_id', true ); 
					$category3_image = wp_get_attachment_url($thumbnail_id3);
					$thumbnail_id4 = get_woocommerce_term_meta( $category4->term_id, 'thumbnail_id', true ); 
					$category4_image = wp_get_attachment_url($thumbnail_id4);
					?>
					<div class="col-md-3 col-sm-6">
						<div class="p_4">
							<div class="p_4_pic">
								<a href="<?php echo get_term_link($category1->term_id); ?>"><img src="<?php echo $category1_image; ?>" alt="<?php echo $category1->name; ?>" ></a>
							</div>
							<div class="p_4_dec">
								<p><a href="<?php echo get_term_link($category1->term_id); ?>" class="occasion_text"><?php echo $category1->name; ?></a></p>
								<div class="p_4_more"><a href="<?php echo get_term_link($category1->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="p_4">
							<div class="p_4_pic">
								<a href="<?php echo get_term_link($category2->term_id); ?>"><img src="<?php echo $category2_image; ?>" alt="<?php echo $category2->name; ?>" ></a>
							</div>
							<div class="p_4_dec">
								<p><a href="<?php echo get_term_link($category2->term_id); ?>" class="occasion_text"><?php echo $category2->name; ?></a></p>
								<div class="p_4_more"><a href="<?php echo get_term_link($category2->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="p_4">
							<div class="p_4_pic">
								<a href="<?php echo get_term_link($category3->term_id); ?>"><img src="<?php echo $category3_image; ?>" alt="<?php echo $category3->name; ?>" ></a>
							</div>
							<div class="p_4_dec">
								<p><a href="<?php echo get_term_link($category3->term_id); ?>" class="occasion_text"><?php echo $category3->name; ?></a></p>
								<div class="p_4_more"><a href="<?php echo get_term_link($category3->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="p_4">
							<div class="p_4_pic">
								<a href="<?php echo get_term_link($category4->term_id); ?>"><img src="<?php echo $category4_image; ?>" alt="<?php echo $category4->name; ?>" ></a>
							</div>
							<div class="p_4_dec">
								<p><a href="<?php echo get_term_link($category4->term_id); ?>" class="occasion_text"><?php echo $category4->name; ?></a></p>
								<div class="p_4_more"><a href="<?php echo get_term_link($category4->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_5">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="p_1_left">
							<?php the_field('men_formal_content',get_the_ID()); ?>
							<div class="p_1_more">
								<a href="<?php echo get_term_link(30); ?>">SHOP NOW</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="p_1_right">
							<div id="owl-demo2" class="owl-carousel">
								<?php 
								$men_formal_wear = get_field('men_formal_wear',get_the_ID());
								foreach($men_formal_wear as $mw)
								{
									$mw_url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($mw->ID));
									?>
									<div class="item">
										<div class="p_1_pic">
											<a href="<?php the_permalink($mw->ID); ?>"><img src="<?php echo $mw_url_featured_image; ?>" alt="<?php echo $mw->post_title; ?>" /></a>
										</div>
									</div>
									<?php 
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_6">
			<div class="container">
				<div class="row">
					<div class="col-md-12 p_4_heading">
						<?php the_field('fashion_jwellery_content',get_the_ID()); ?>
					</div>
				</div>
				<div class="row margin-top-40">
					<?php 
					$category1 = get_term_by( 'id', 31, 'product_cat' );
					$category2 = get_term_by( 'id', 32, 'product_cat' );
					$category3 = get_term_by( 'id', 33, 'product_cat' );
					$category4 = get_term_by( 'id', 34, 'product_cat' );

					$thumbnail_id1 = get_woocommerce_term_meta( $category1->term_id, 'thumbnail_id', true ); 
					$category1_image = wp_get_attachment_url($thumbnail_id1);
					$thumbnail_id2 = get_woocommerce_term_meta( $category2->term_id, 'thumbnail_id', true ); 
					$category2_image = wp_get_attachment_url($thumbnail_id2);
					$thumbnail_id3 = get_woocommerce_term_meta( $category3->term_id, 'thumbnail_id', true ); 
					$category3_image = wp_get_attachment_url($thumbnail_id3);
					$thumbnail_id4 = get_woocommerce_term_meta( $category4->term_id, 'thumbnail_id', true ); 
					$category4_image = wp_get_attachment_url($thumbnail_id4);
					?>
					<div class="col-md-3 col-sm-6">
						<div class="p_6">
							<div class="p_6_pic">
								<a href="<?php echo get_term_link($category1->term_id); ?>"><img src="<?php echo $category1_image; ?>" alt="<?php echo $category1->name; ?>" ></a>
							</div>
							<div class="p_6_dec">
								<p><a href="<?php echo get_term_link($category1->term_id); ?>" class="occasion_text"><?php echo $category1->name; ?></a></p>
								<div class="p_6_more"><a href="<?php echo get_term_link($category1->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="p_6">
							<div class="p_6_pic">
								<a href="<?php echo get_term_link($category1->term_id); ?>"><img src="<?php echo $category2_image; ?>" alt="<?php echo $category2->name; ?>" ></a>
							</div>
							<div class="p_6_dec">
								<p><a href="<?php echo get_term_link($category2->term_id); ?>" class="occasion_text"><?php echo $category2->name; ?></a></p>
								<div class="p_6_more"><a href="<?php echo get_term_link($category2->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="p_6">
							<div class="p_6_pic">
								<a href="<?php echo get_term_link($category1->term_id); ?>"><img src="<?php echo $category3_image; ?>" alt="<?php echo $category3->name; ?>" ></a>
							</div>
							<div class="p_6_dec">
								<p><a href="<?php echo get_term_link($category3->term_id); ?>" class="occasion_text"><?php echo $category3->name; ?></a></p>
								<div class="p_6_more"><a href="<?php echo get_term_link($category3->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="p_6">
							<div class="p_6_pic">
								<a href="<?php echo get_term_link($category1->term_id); ?>"><img src="<?php echo $category4_image; ?>" alt="<?php echo $category4->name; ?>" ></a>
							</div>
							<div class="p_6_dec">
								<p><a href="<?php echo get_term_link($category4->term_id); ?>" class="occasion_text"><?php echo $category4->name; ?></a></p>
								<div class="p_6_more"><a href="<?php echo get_term_link($category4->term_id); ?>">Shop Now</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_7">
			<div class="container">
				<div class="p_7">
					<?php the_field('prom_style_content',get_the_ID()); ?>
					<div class="p_7_in">
						<div class="p_7_in_left"><?php the_field('prom_style_additional_content_1',get_the_ID()); ?></div>
						<div class="p_7_in_right"><?php the_field('prom_style_additional_content_2',get_the_ID()); ?></div>
					</div>
					<div class="p_7_more">
						<a href="<?php echo get_term_link(35); ?>">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_8">
			<div class="container">
				<div class="row">
					<div class="col-md-12 p_8_heading"><?php the_content(); ?></div>
				</div>
				<div class="row margin-top-30">
					<div class="col-md-12">
						<?php 
						$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
						?>
						<div class="p_8_pic"><img src="<?php echo $url_featured_image; ?>" alt="<?php the_title(); ?>" /></div>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_9">
			<div class="container">
				<div class="row">
					<div class="col-md-12 p_9_heading"><?php the_field('instagram_content',get_the_ID()); ?></div>
				</div>
				<div class="row margin-top-30">
					<div class="col-md-12">
						<ul>
							<li>
								<div class="p_9_pic"><img src="<?php echo get_template_directory_uri(); ?>/img/p_7_1.jpg" /></div>
							</li>
							<li>
								<div class="p_9_pic"><img src="<?php echo get_template_directory_uri(); ?>/img/p_7_2.jpg" /></div>
							</li>
							<li>
								<div class="p_9_pic"><img src="<?php echo get_template_directory_uri(); ?>/img/p_7_3.jpg" /></div>
							</li>
							<li>
								<div class="p_9_pic"><img src="<?php echo get_template_directory_uri(); ?>/img/p_7_4.jpg" /></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="pert_10">
			<iframe src="<?php echo get_option('text_field7'); ?>" allowfullscreen></iframe>
		</div>
	</div>
<?php 
endwhile;
get_footer(); ?>