<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<head>
	    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i" rel="stylesheet"> 
	    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> 
	    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	    <!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" >
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?ver=<?php echo rand(111,999);?>">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" >
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media-queries.css?ver=<?php echo rand(111,999);?>">   
  	</head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="top">
			<div class="container">
				<div class="th_left">
					<div class="th_left_1"><a href="<?php the_permalink(13); ?>">Ship To</a></div>
					<div class="th_left_1"><a href="<?php the_permalink(14); ?>">Store Location</a></div>
					<div class="th_left_1"><a href="#">Search</a></div>
				</div>
				<div class="th_right">
					<div class="th_right_1"><a href="<?php the_permalink(25); ?>"><i class="fa fa-percent" aria-hidden="true"></i> Sale</a></div>
					<div class="th_right_1"><a href="<?php the_permalink(38); ?>"><i class="fa fa-user" aria-hidden="true"></i> 
						<?php 
						if(is_user_logged_in())
						{
							echo "My Account";
						}
						else
						{
							echo "Login/Register";
						}
						?>						
					</a></div>
					<?php 
					if(is_user_logged_in())
					{
						?>
						<div class="th_right_1"><a href="<?php echo wc_logout_url(); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a></div>
						<?php
					}
					?>
					<div class="th_right_1"><a href="<?php the_permalink(26); ?>"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a></div>
				</div>
			</div>
		</div>
		<div class="header_bg">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="h_1">
							<?php 
							$phone = get_option('text_field1');
							$p1 = substr($phone, 0,3).'-';
							$p2 = substr($phone, 3,3).'-';
							$p3 = substr($phone, 6);
							$p = $p1.$p2.$p3;
							?>
							<span>CALL US!</span> <a href="tel:<?php echo $phone; ?>" class="focus_text"><?php echo $p; ?></a> or <a href="mailto:<?php echo get_option('text_field8'); ?>" class="focus_text">Email</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="logo">
							<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="<?php echo get_option('blogname'); ?>"></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="h_2_1">
							<form action="<?php echo esc_url(home_url('/')); ?>">
								<div class="h_2_src"><input type="text" placeholder="Search" name="s" class="search_text" required value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" ></div>
								<div class="h_2_src_btn"><input type="submit" placeholder="Submit"></div>
							</form>
						</div>
						<div class="h_2_2"><a href="<?php the_permalink(36); ?>" class="wish_text" ><i class="fa fa-heart" aria-hidden="true"></i></a></div>
						<div class="h_2_3">
							<a href="<?php the_permalink(30); ?>" class="focus_text">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="menu_wrap nav-container">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-9">
						<nav id="nav">
							<?php wp_nav_menu(array("menu" => "header_menu",'theme_location'=> 'primary','container' => 'false', 'menu_id' => '','menu_class'=> '','walker'=> new wp_bootstrap_navwalker()));?>
						</nav>
					</div>
					<div class="col-md-2 col-sm-3">
						<div class="sc">
							<div class="sc_icon"><a href="<?php echo get_option('text_field3'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
							<div class="sc_icon"><a href="<?php echo get_option('text_field6'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
							<div class="sc_icon"><a href="<?php echo get_option('text_field4'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Banner -->
		<?php 
		if(is_front_page())
		{
			?>
			<div class="banner">
				<div class="flexslider">
					<ul class="slides">
						<?php 
						$banner_item = new WP_Query( array( 'post_type' => 'banner','order'=>'desc','orderby'=>'ID') );
						$banner = $banner_item->posts;
						foreach($banner as $ban)
						{
							$banner_url_featured_image = wp_get_attachment_url( get_post_thumbnail_id($ban->ID));
							?>
							<li><img src="<?php echo $banner_url_featured_image; ?>" alt="<?php echo $ban->post_title; ?>" /></li>
							<?php 
						}
						?>
					</ul>
				</div>
			</div>
			<?php
		}
		else
		{
			?>
			<div class="inner-banner">
          		<div class="in-ban-pic">
          			<img src="<?php echo get_template_directory_uri(); ?>/img/shop-banner.jpg" alt="<?php the_title(); ?>" />
          		</div>
          		<div class="in-ban-text">
            		<div class="in_1"><img src="<?php echo get_template_directory_uri(); ?>/img/line-up.png" alt="<?php the_title(); ?>" /></div>
            		<?php 
            		if(is_shop())
            		{
            			?>
            			<h4>Our Collection</h4>
            			<?php
            		}
            		else if(is_archive())
            		{
            			global $wp_query;
            			$categoryDetails = $wp_query->get_queried_object();
            			?>
            			<h4><?php echo $categoryDetails->name; ?></h4>
            			<?php
            		}
            		else if(is_404())
            		{
            			?>
            			<h4>404 page not found</h4>
            			<?php
            		}
            		else if(is_search())
            		{
            			?>
            			<h4>Search result</h4>
            			<?php
            		}
            		else
            		{
            			?>
            			<h4><?php the_title(); ?></h4>
            			<?php
            		}
            		?>          			
            		<div class="in_1"><img src="<?php echo get_template_directory_uri(); ?>/img/line-bt.png" alt="<?php the_title(); ?>" /></div>
          		</div>
        	</div>
			<?php
		}
		?>		
	<!-- Banner -->