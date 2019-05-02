<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="wrapper">
	<div class="inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 contact-heading">
					<h4>404</h4>
				</div>
			</div>
			<div class="row margin-top-30">
				<div class="col-md-12 col-sm-12 abt">
					<p>The page you are looking for might have been removed, had its name changed, or its temporarily unavailable.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="pert_10">
		<iframe src="<?php echo get_option('text_field7'); ?>" allowfullscreen></iframe>
	</div>
</div>
<?php get_footer(); ?>