<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<h4>My ACCOUNT</h4>
						<?php wp_nav_menu(array("menu" => "account_menu",'theme_location'=> 'account','container' => 'false', 'menu_id' => '','menu_class'=> 'list-group','walker'=> new wp_bootstrap_navwalker()));?>
					</div>
					<div class="col-md-2 col-sm-6">
						<h4>Quick LINKS</h4>
						<?php wp_nav_menu(array("menu" => "quick_links_menu",'theme_location'=> 'quick','container' => 'false', 'menu_id' => '','menu_class'=> 'list-group','walker'=> new wp_bootstrap_navwalker()));?>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ft_logo">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-1.png" alt="<?php echo get_option('blogname'); ?>" / >
							</a>
						</div>
						<div class="scl">
							FOLLOW US NOW :  <a href="<?php echo get_option('text_field3'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="<?php echo get_option('text_field6'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="<?php echo get_option('text_field4'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<h4>SUBSCRIBE TODAY</h4>
						<div class="subc">
							<?php 
							if(is_active_sidebar('sidebar-2'))
							{
								dynamic_sidebar('sidebar-2');
							}
							?>
						</div>
						<h5>Email - <a href="mailto:<?php echo get_option('text_field8'); ?>" class="footer_mail"><?php echo get_option('text_field8'); ?></a></h5>
						<?php 
						if(is_active_sidebar('sidebar-1'))
						{
							dynamic_sidebar('sidebar-1');
						}
						?>
						<div class="clp">
							<div class="clp_icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
							<?php 
							$phone = get_option('text_field1');
							$p1 = '+ '.substr($phone, 0,3).'-';
							$p2 = substr($phone, 3,3).'-';
							$p3 = substr($phone, 6);
							$p = $p1.$p2.$p3;
							?>
							<div class="clp_text"><a href="tel:<?php echo $phone; ?>" class="footer_phone"><?php echo $p; ?></a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="last_footer">
			<div class="cop">
				<img src="<?php echo get_template_directory_uri(); ?>/img/copy_white.png" alt="copyright" />
			</div>
		</div>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
		<script>
			$(window).load(function(){
		  		$('.flexslider').flexslider({
			    	animation: "slide",
			    	start: function(slider){
			      		$('body').removeClass('loading');
			    	}
			  	});
			});
		</script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1',maxWidth:'95%', maxHeight:'90%'});
				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script> 
		<script>
			$(document).ready(function() {
				var owl = $("#owl-demo");
				owl.owlCarousel({
					items:2,
					itemsDesktop:[1000,2],
					itemsDesktopSmall:[979,2],
					itemsTablet:[768,2],
					pagination:false,
					navigation:true,
					navigationText:["",""],
					slideSpeed:1000,
					singleItem:false,
					autoPlay:false
				});
			});
		</script>
		<script>
			$(document).ready(function() {
				var owl = $("#owl-demo2");
				owl.owlCarousel({
					items:2,
					itemsDesktop:[1000,2],
					itemsDesktopSmall:[979,2],
					itemsTablet:[768,2],
					pagination:false,
					navigation:true,
					navigationText:["",""],
					slideSpeed:1000,
					singleItem:false,
					autoPlay:false
				});
			});
		</script>
		<script>
			jQuery("document").ready(function($){
				var nav = $('.nav-container');
				$(window).scroll(function () {
					if ($(this).scrollTop() > 150) {
						nav.addClass("f-nav");
					} else {
						nav.removeClass("f-nav");
					}
				});
			});
		</script>
		<script>
			wow = new WOW(
				{
					animateClass: 'animated',
					offset:       100,
					callback:     function(box) {
						console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
					}
				}
			);
			wow.init();
			document.getElementById('moar').onclick = function() {
				var section = document.createElement('section');
				section.className = 'section--purple wow fadeInDown';
				this.parentNode.insertBefore(section, this);
			};
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.es_lablebox').remove();
				$('.es_textbox').addClass('subc_inp');
				$('#es_txt_email').attr('placeholder','type your email');
				$('.es_button').addClass('subc_btn');

				/*$('.fa-heart-o').mouseover(function(){
					$(this).addClass('fa-heart');
					$(this).removeClass('fa-heart-o');				
					$(this).mouseout(function(){
						$(this).addClass('fa-heart-o');
						$(this).removeClass('fa-heart');
					});
				});

				$('.fa-heart').mouseover(function(){
					$(this).addClass('fa-heart-o');
					$(this).removeClass('fa-heart');				
					$(this).mouseout(function(){
						$(this).addClass('fa-heart');
						$(this).removeClass('fa-heart-o');
					});
				});*/

				$('.search-field').wrap('<div class="side-top_left"></div>');
				$('.widget_product_search button[type="submit"]').wrap('<div class="side-top_right"></div>');
			});
			$('.item_wish .fa').click(function(){
				var id = $(this).attr('id');
				id = id.split('_');
				id = id[1];
				<?php 
				if(is_user_logged_in())
				{
					?>
					if($(this).hasClass('fa-heart'))
					{
						$.ajax({url:"<?php echo esc_url(home_url('/')); ?>?remove_from_wishlist="+id});
					}
					else
					{
						$.ajax({url:"<?php echo esc_url(home_url('/')); ?>?add_to_wishlist="+id});
					}
					$(this).toggleClass('fa-heart');
					$(this).toggleClass('fa-heart-o');
					<?php
				}
				else
				{
					?>
					$('#wishmsg_'+id).show();
					$('#wishmsg_'+id).fadeOut(5000);
					<?php
				}
				?>				
			});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>