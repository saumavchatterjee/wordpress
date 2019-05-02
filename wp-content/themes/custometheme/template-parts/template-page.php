<?php

/**

 * Template Name: Template Page

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
            	  <div class="col-md-12">

            		<?php the_content(); ?>
            	  </div>	
            	</div>

            </div>

        </div>

    </div>

<?php 

endwhile;

get_footer(); ?>