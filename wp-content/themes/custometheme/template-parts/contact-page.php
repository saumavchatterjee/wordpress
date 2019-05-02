<?php
/**
 * Template Name: Contact Page
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
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row margin-top-30">
					<div class="col-md-4 col-sm-4">
						<div class="op">
							<div class="op_icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
							<div class="op_heading">PHONE</div>
							<div class="op_dec">
								<?php 
								$phone = get_option('text_field1');
								$p1 = '+'.substr($phone, 0,3).'-';
								$p2 = substr($phone, 3,3).'-';
								$p3 = substr($phone, 6);
								$p = $p1.$p2.$p3;
								?>
								<a href="tel:<?php echo $phone; ?>" class="contact_text"><?php echo $p; ?></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="op">
							<div class="op_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<div class="op_heading">ADDRESS</div>
							<div class="op_dec"><?php echo get_option('text_field14'); ?></div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="op">
							<div class="op_icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
							<div class="op_heading">MAIL</div>
							<div class="op_dec"><a href="mailto:<?php echo get_option('text_field8'); ?>" class="contact_text"><?php echo get_option('text_field8'); ?></a></div>
						</div>
					</div>
				</div>
				<div class="row margin-top-30">
					<div class="col-md-12 col-sm-12 cp-2"><?php the_field('short_description',get_the_ID()); ?></div>
				</div>
				<div class="row margin-top-30">
					<div class="col-md-12">
						<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]'); ?>
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