<?php
/**
 * Template Name: Common Page
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
		<div class="inner-page">
			<div class="container">
				<div class="row">
					<div class="col-md-12 contact-heading">
						<h4><?php the_title(); ?></h4>
					</div>
				</div>
				<div class="row margin-top-30">
					<?php 
					$url_featured_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
					if($url_featured_image != '')
					{
						?>
						<div class="col-md-7 col-sm-7 abt"><?php the_content(); ?></div>
						<div class="col-md-5 col-sm-5">
							<div class="abt_pic">							
								<img src="<?php echo $url_featured_image; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>
						<?php
					}
					else
					{
						?>
						<div class="col-md-12 col-sm-12 abt"><?php the_content(); ?></div>
						<?php
					}
					?>					
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