<?php

/*

Plugin Name: Development Plugin



Description: Adding custom fields in setting page



Version: 1.1.1



Author: Development

*/



/* Restrict removing span from text editor */

function myextensionTinyMCE($init) {

    $ext = 'span[id|name|class|style]';



    if ( isset( $init['extended_valid_elements'] ) ) {



        $init['extended_valid_elements'] .= ',' . $ext;



    } else {



        $init['extended_valid_elements'] = $ext;



    }

    return $init;



}

add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );



/* Excerpt for blog listing page */



function get_my_blog_excerpt($page_id = 0, $word_limit = 55)

{

	if ($page_id === 0)

    {

        return FALSE;

    }

	$page = get_posts(array(



        'include' => $page_id,



        'post_type' => 'view-blog'



    ));

    $content = $page[0]->post_content;



    $content = strip_shortcodes($content);



    $content = str_replace(']]>', ']]&gt;', $content);



    $content = strip_tags($content);

	

    $words = explode(' ', $content, $word_limit + 1);



    if(count($words) > $word_limit)

    {



        array_pop($words);



        $content = implode(' ', $words);



        $content .= '...';



    }



    return $content;



}



/* Removing appearance unnessary fields */



function remove_submenus() {



  global $submenu;



  unset($submenu['themes.php'][5]); /* Removes 'Themes'*/



  unset($submenu['themes.php'][6]); /* Removes 'customize'. */



}


function remove_core_updates(){

global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}

add_filter('pre_site_transient_update_core','remove_core_updates');

add_filter('pre_site_transient_update_plugins','remove_core_updates');

add_filter('pre_site_transient_update_themes','remove_core_updates');



add_action( 'admin_menu', 'remove_submenus' );



add_action( 'after_setup_theme','remove_twentyeleven_options', 100 );



function remove_twentyeleven_options() {    



    remove_custom_background();



    remove_custom_image_header();



    remove_action('admin_menu', 'twentyeleven_theme_options_add_page');    



}



/* Removing reviews section from product details page */



// add_filter( 'woocommerce_product_tabs', 'sb_woo_remove_reviews_tab', 98);



function sb_woo_remove_reviews_tab($tabs) {



 unset($tabs['reviews']);

 

 return $tabs;



}

/* Admin logo change */

function my_login_logo() { 

?>

    <style type="text/css">

        .login h1 a {

            background-image: url(<?php bloginfo('template_url'); ?>/img/logo.jpg) !important;

            padding-bottom: 30px !important;

			width:320px !important;

			background-size:251px !important;

            height: 140px !important;

        }

        .login h1{
        	background-color: #fff;
        	padding-top: 15px;
        }

    </style>

<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function loginpage_custom_link() {

	return '#';

}

add_filter('login_headerurl','loginpage_custom_link');

function change_title_on_logo() {

	return '';

}

add_filter('login_headertitle', 'change_title_on_logo');

/* Hide admin bar from front end */

show_admin_bar( false );

/* Other Site details in Settings page */

function register_fields()

{



    register_setting('general', 'text_field1', 'esc_attr');

    add_settings_field('text_field1', '<label for="text_field1">'.__('Phone Number' , 'text_field1' ).'</label>' , 'text_field_1', 'general');

    /*register_setting('general', 'text_field5', 'esc_attr');

    add_settings_field('text_field5', '<label for="text_field5">'.__('Landline number' , 'text_field5' ).'</label>' , 'text_field_5', 'general');*/

    register_setting('general', 'text_field8', 'esc_attr');

    add_settings_field('text_field8', '<label for="text_field8">'.__('Contact Email Address' , 'text_field8' ).'</label>' , 'text_field_8', 'general');

   

    register_setting('general', 'text_field3', 'esc_attr');

    add_settings_field('text_field3', '<label for="text_field3">'.__('Facebook link' , 'text_field3' ).'</label>' , 'text_field_3', 'general');



    register_setting('general', 'text_field6', 'esc_attr');

    add_settings_field('text_field6', '<label for="text_field6">'.__('Twitter Link' , 'text_field6' ).'</label>' , 'text_field_6', 'general');



    register_setting('general', 'text_field4', 'esc_attr');

    add_settings_field('text_field4', '<label for="text_field4">'.__('Instagram Link' , 'text_field4' ).'</label>' , 'text_field_4', 'general');


    /*register_setting('general', 'text_field9', 'esc_attr');

    add_settings_field('text_field9', '<label for="text_field9">'.__('LinkedIn Link' , 'text_field9' ).'</label>' , 'text_field_9', 'general');


    register_setting('general', 'text_field2', 'esc_attr');

    add_settings_field('text_field2', '<label for="text_field2">'.__('Pinterest Link' , 'text_field2' ).'</label>' , 'text_field_2', 'general'); */



    /*register_setting('general', 'text_field8', 'esc_attr');

    add_settings_field('text_field8', '<label for="text_field8">'.__('Tumblr Text' , 'text_field8' ).'</label>' , 'text_field_8', 'general');*/    

    
    /*register_setting('general', 'text_field2', 'esc_attr');

    add_settings_field('text_field2', '<label for="text_field2">'.__('Instagram Link' , 'text_field2' ).'</label>' , 'text_field_2', 'general');*/ 

    /*register_setting('general', 'text_field2', 'esc_attr');

    add_settings_field('text_field2', '<label for="text_field2">'.__('Youtube Link' , 'text_field2' ).'</label>' , 'text_field_2', 'general');*/ 


    register_setting('general', 'text_field14', 'esc_attr');

    add_settings_field('text_field14', '<label for="text_field14">'.__('Office Address' , 'text_field14' ).'</label>' , 'text_field_14', 'general'); 

    register_setting('general', 'text_field10', 'esc_attr');

    add_settings_field('text_field10', '<label for="text_field10">'.__('Office Timings' , 'text_field10' ).'</label>' , 'text_field_10', 'general');

    /*register_setting('general', 'text_field13', 'esc_attr');

    add_settings_field('text_field13', '<label for="text_field13">'.__('Zurich Office Address' , 'text_field13' ).'</label>' , 'text_field_13', 'general'); 

    register_setting('general', 'text_field12', 'esc_attr');

    add_settings_field('text_field12', '<label for="text_field12">'.__('Zurich Office Timings' , 'text_field12' ).'</label>' , 'text_field_12', 'general');*/

   /*register_setting('general', 'text_field16', 'esc_attr');

    add_settings_field('text_field16', '<label for="text_field16">'.__('LIC Text' , 'text_field16' ).'</label>' , 'text_field_16', 'general');*/

/*  register_setting('general', 'text_field9', 'esc_attr');

    add_settings_field('text_field9', '<label for="text_field9">'.__('Linkedin_Link' , 'text_field9' ).'</label>' , 'text_field_9', 'general');*/



    /*register_setting('general', 'text_field10', 'esc_attr');

    add_settings_field('text_field10', '<label for="text_field10">'.__('ABN_text' , 'text_field10' ).'</label>' , 'text_field_10', 'general');



    register_setting('general', 'text_field11', 'esc_attr');

    add_settings_field('text_field11', '<label for="text_field11">'.__('ACN_text' , 'text_field11' ).'</label>' , 'text_field_11', 'general');*/


    register_setting('general', 'text_field7', 'esc_attr');

   add_settings_field('text_field7', '<label for="text_field7">'.__('Google Map Address<br><i>Please upload google map address like this : - "https://www.google.com/maps/embed?pb=!1..."</i>' , 'text_field7' ).'</label>' , 'text_field_7', 'general');

   /*register_setting('general', 'text_field5', 'esc_attr');

   add_settings_field('text_field5', '<label for="text_field5">'.__('Open now text' , 'text_field5' ).'</label>' , 'text_field_5', 'general');

   register_setting('general', 'text_field11', 'esc_attr');

   add_settings_field('text_field11', '<label for="text_field11">'.__('Close now text' , 'text_field11' ).'</label>' , 'text_field_11', 'general');

    register_setting('general', 'text_field15', 'esc_attr');

    add_settings_field('text_field15', '<label for="text_field15">'.__('Online' , 'text_field15' ).'</label>' , 'text_field_15', 'general');*/



}

function text_field_1()

{

    $value = get_option( 'text_field1', '' );

    echo '<input type="text" id="text_field1" maxlength="16" name="text_field1" value="' . $value . '" />';

}

function text_field_2()

{

    $value = get_option( 'text_field2', '' );

    echo '<input type="text" id="text_field2" class="regular-text" name="text_field2" value="' . $value . '" />';

}

function text_field_3()

{

    $value = get_option( 'text_field3', '' );

    echo '<input type="text" id="text_field3" class="regular-text" name="text_field3" value="' . $value . '" />';

}

function text_field_4()

{

    $value = get_option( 'text_field4', '' );

    echo '<input type="text" id="text_field4" class="regular-text" name="text_field4" value="' . $value . '" />';

}

function text_field_5()

{

    $value = get_option( 'text_field5', '' );

    //echo '<input type="text" id="text_field5" class="regular-text" name="text_field5" value="' . $value . '" />';
    
    echo '<input type="text" id="text_field5" class="regular-text" name="text_field5" value="' . $value . '" />';

}

function text_field_6()

{

    $value = get_option( 'text_field6', '' );

    echo '<input type="text" id="text_field6" class="regular-text" name="text_field6" value="' . $value . '" />';

}

function text_field_8()

{

    $value = get_option( 'text_field8', '' );

    echo '<input type="text" id="text_field8" class="regular-text" name="text_field8" value="' . $value . '" />';

}

function text_field_7()

{

    $value = get_option( 'text_field7', '' );

//    echo '<textarea id="text_field7" rows="4" cols="50" name="text_field7">'.$value.'</textarea>';

    echo '<input type="text" id="text_field7" class="regular-text" name="text_field7" value="' . $value . '" />';

}

function text_field_9()

{

    $value = get_option( 'text_field9', '' );

    echo '<input type="text" id="text_field9" class="regular-text" name="text_field9" value="' . $value . '" />';

}

function text_field_10()

{

    $value = get_option( 'text_field10', '' );

    // echo '<input type="text" id="text_field10" class="regular-text" name="text_field10" value="' . $value . '" />';
    echo '<textarea id="text_field10" rows="4" cols="53" name="text_field10">'.$value.'</textarea>';

}

function text_field_11()

{

    $value = get_option( 'text_field11', '' );

    echo '<input type="text" id="text_field11" class="regular-text" name="text_field11" value="' . $value . '" />';
    // echo '<textarea id="text_field11" rows="4" cols="53" name="text_field11">'.$value.'</textarea>';

}



function text_field_12()

{

    $value = get_option( 'text_field12', '' );

    // echo '<input type="text" id="text_field12" class="regular-text" name="text_field12" value="' . $value . '" />';

    echo '<textarea id="text_field12" rows="4" cols="53" name="text_field12">'.$value.'</textarea>';

}



function text_field_13()

{

    $value = get_option( 'text_field13', '' );

    echo '<textarea id="text_field13" rows="4" cols="53" name="text_field13">'.$value.'</textarea>';

}



function text_field_14()

{

    $value = get_option( 'text_field14', '' );

    echo '<textarea id="text_field14" rows="4" cols="53" name="text_field14">'.$value.'</textarea>';

}


function text_field_15()

{

    $value = get_option( 'text_field15', '' );

    // echo '<input type="text" id="text_field15" class="regular-text" name="text_field15" value="' . $value . '" />';

    if($value == 0)
    {
        echo 'Online : <input type="radio" id="text_field15" name="text_field15" value="1"/>'; 
        echo 'Offline : <input type="radio" id="text_field15" name="text_field15" value="0" checked="checked"/>';   
    }
    else
    {
        echo 'Online : <input type="radio" id="text_field15" name="text_field15" value="1" checked="checked"/>'; 
        echo 'Offline : <input type="radio" id="text_field15" name="text_field15" value="0"/>';
    }    
}

function text_field_16()

{

    $value = get_option( 'text_field16', '' );

    echo '<input type="text" id="text_field16" class="regular-text" name="text_field16" value="' . $value . '" />';

}


add_filter('admin_init', 'register_fields');