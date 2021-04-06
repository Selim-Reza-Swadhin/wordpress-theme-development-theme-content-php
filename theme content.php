stylel.css
=========================== 
/*
Theme Name: CarNews
Theme URI: https://thememoor.com/themes/carnews/
Author: the WordPress team
Author URI: https://thememoor.com/
Description: Car News  brings your site to life with header video and immersive featured images.
Version: 1.4
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: carnews
Tags: one-column, two-columns, right-sidebar, flexible-header, accessibility-ready, custom-colors, custom-header, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, post-formats, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready

*/

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
1.0 Normalize
2.0 Accessibility



যে কোন স্ক্রিপ্ট বা ছবি  ডাইনামিক করার জন্য 
================================ 
<?php echo get_template_directory_uri(); ?>/

হোম পেজ লিংক করার জন্য 
================================ 
<?php echo esc_url( home_url( '/' ) ); ?>

ল্যাঙ্গুয়েজ সেট করার জন্য 
================================ 
<html <?php language_attributes(); ?>>


কারেক্টার সেট করার জন্য 
================================ 
<meta charset="<?php bloginfo( 'charset' ); ?>">

সাইটের টাইটেল সেট করার জন্য 
================================ 
<title><?php bloginfo( 'name' ); ?></title>

style.css কল  করার জন্য 
================================ 
<?php echo get_stylesheet_uri(); ?>

search form  কল  করার জন্য 
================================ 
<?php get_search_form(); ?>

head এ সব ধরনের স্ক্রিপ্ট  কল   করার জন্য  head এর নিচে 
================================ 
<?php wp_head(); ?>

Footer এ সব ধরনের স্ক্রিপ্ট  কল   করার জন্য  Body এর মধ্যে সবার  নিচে 
================================ 
<?php wp_footer(); ?>

বডিতে সব ধরনের স্ক্রিপ্ট  কল  করার জন্য 
================================ 
<body <?php body_class(); ?>>

Customizer এর থেকে  কোন ডাটা কল করার জন্য 
================================ 
<?php echo get_theme_mod('variable name here'); ?> 

Thumbanail Image show  করার জন্য 
================================ 
<?php the_post_thumbnail('feature-image', array('class' => 'post-thumb')); ?>

pagination যোগ  করার জন্য 
================================ 
<?php the_posts_pagination(); ?>



Category list show   করার জন্য 
================================ 
<?php
	$args = array(
		'orderby' => 'slug',
		'parent' => 0
	);

	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
		echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-asterisk"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
	 }
?>


Archive  list show   করার জন্য 
================================ 
<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'order' => 'ASC' )); ?>



or 
==============

<?php $args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC',
        'post_type'     => 'post'
);
wp_get_archives( $args ); ?>

or 
====
<?php wp_get_archives( $args ); ?> 





Widget Register    করার জন্য 
================================ 

/**
 * Widget Support
 */
function widgets_sidebar(){
		register_sidebar( array(
		'name'          => __( 'Home Page Sidebar Top', 'prothom-alo' ),
		'id'            => 'widget-home-top',
		'before_widget' => '<div class="widget"><div class="category-sidebar">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="headbar">',
		'after_title'   => '</h2> ',
	) );
}
add_action( 'widgets_init', 'widgets_sidebar' );


sidebar Dynamic   করার জন্য 
================================ 
<?php dynamic_sidebar( 'widget_id_here' ); ?>




search form  যোগ   করার জন্য 
================================ 
<form  action="<?php echo home_url( '/' ); ?>">

    <input type="search" class="search-field" value="<?php echo get_search_query() ?>" name="s" />
	
</form>

search form  এর  কি ওয়ার্ড  রেজাল্ট যোগ   করার জন্য 
================================ 
<h1 class="headbar">Your Keyword <span><?php _e(''); echo '&quot;'.$s.'&quot;'; ?></span> Results are bellow </h1>


search form  এর  কি ওয়ার্ড  রেজাল্ট  স্টাইলিং    করার জন্য 
================================ 
.headbar {
	background: #fff;
	padding: 10px;
	font-size: 25px;
	text-align: center;
	font-weight: 700;
	border: 1px solid #fefe3f;
}


Pagination  styling   করার জন্য 
================================ 

/*--------------------------------------------------------------
3.3 Pagination
--------------------------------------------------------------*/
.pagination {
    border-top: 1px solid #e9e9e9;
    padding: 35px 0;
    width: 100%;
    text-align: center;
}
.pagination .nav-links {
	display: block;
	padding: 0 25px 15px;
	position: relative;
}
.pagination .page-numbers {
	background: #e8edf3;
	border: 1px solid #d3d3d3;
	color: #444;
	display: inline-block;
	font-size: 20px;
	height: 45px;
	line-height: 45px;
	padding: 0 12px;
	margin-right: 5px;
}
.pagination .page-numbers.current {
	background: #f70009;
	color: #fff;
	font-size: 20px;
	height: 47px;
	text-align: center;
	line-height: 47px;
}
.pagination .nav-links > a:hover {
	background: #eb5424;
	color: #fff;
	text-decoration: none;
}
.screen-reader-text {
	display: none;
}

search.php কল করার জন্য 
==================================== 
<?php get_search_form(); ?>



specific category থেকে পোস্ট আনার জন্য  
==================================== 
<?php 
$var = new WP_Query(array(
	"post_type" => "post",
	"posts_per_page" => 5,
	'orderby' => 'title',
	'order'   => 'DESC',
	"category_name"  => "tecnology"
));
?>
Related post display করার  জন্য  
==================================== 
<?php

	$tags = wp_get_post_tags($post->ID);

	if ($tags) {
		$first_tag = $tags[0]->term_id;
		
		$my_query = new WP_Query(array(
			'tag__in' => array($first_tag),
			'post__not_in' => array($post->ID),
			'posts_per_page'=>5,
			'caller_get_posts'=>1
		));
		
		
		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); ?>

		<!--Your html code here-->
		
		 
		<?php
		endwhile;
		}
		wp_reset_query();
	}
?>




author.php page 
==================
total author post : <?php echo get_the_author_posts(); ?>

view all post this author : <?php the_author_posts_link(); ?> 
Field value description : <?php the_author_meta('description'); ?>
 <?php echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>
 <?php echo get_avatar( get_the_author_meta( 'ID' ), $size, $default, $alt, $args ); ?>

Parameters

$field 
========
user_login
user_pass
user_nicename
user_email
user_url
user_registered
user_activation_key
user_status
display_name
nickname
first_name
last_name
description
jabber
aim
yim
user_level
user_firstname
user_lastname
user_description
rich_editing
comment_shortcuts
admin_color
plugins_per_page
plugins_last_view
ID




// Facebook account Settings

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="facebook">Facebook</label></th>

			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your facebook username. [e.g http://www.facebook.com/ruhul.phyi]</span>
			</td>
		</tr>

	</table>
<?php }





add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

		/* Copy and paste this line for additional fields. Make sure to change 'facebook' to the field ID. */
		update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
	}






comment form
=================


comment form যোগ   করার জন্য 
================================ 
<?php comment_form(); ?>

<?php comments_template( '', true ); ?>


comment reply    করার জন্য <head>এর  মধ্যে লিখতে হবে </head> 
================================ 
<?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
?>


comment form style   করার জন্য 
================================ 

/*comments css area*/

.comment-author.vcard img {

    float: left;

    margin-right: 20px;

    border-radius: 40px;

}

.comment-list cite.fn {

    font-weight: 700;

    text-transform: uppercase;

    font-size: 14px;

    padding-right: 5px;

}

.comment-body {

    border: 2px solid #dadada;

    padding: 15px;

    border-radius: 4px;

    margin: 20px 20px 20px -15px;   

}

.reply{

  margin: 10px 0 5px 20px;

}

.comment-form label{

  width: 12%;

  float: left;

}

.comment-form input[type="text"] {

  width: 100%;

  height: 32px;

  padding: 7px;

  border: 2px solid #f1f1f1;

  border-radius: 4px;

}

.form-submit input[type="submit"] {

    color: #fff;

    text-decoration: none;

    padding: 8px 20px;

    margin: 4px 0 12px 0;

    display: inline-block;

    background: #26629e;

    box-shadow: 0 0 1px #ccc;

    -webkit-transition-duration: 0.5s;

    -webkit-transition-timing-function: linear;

    box-shadow:0px 0 0 #19a268 inset;

    border: none;

    border-radius: 4px;

}

.form-submit input[type="submit"]:hover {

    box-shadow:-140px 0 0 #19a268 inset;

}

form#commentform input#email {

    width: 100%;

    height: 32px;

    padding: 7px;

    border: 2px solid #f1f1f1;

    border-radius: 4px;

}

form#commentform input#url {

    width: 100%;

    height: 32px;

    padding: 7px;

    border: 2px solid #f1f1f1;

    border-radius: 4px;

}

p.form-submit {

    margin-top: 25px;

}

.reply a {

  color: #fff;

  padding: 6px 20px;

  border-radius: 4px;

  background: #26629e;

  box-shadow: 0 0 1px #ccc;

  -webkit-transition-duration: 0.5s;

  -webkit-transition-timing-function: linear;

  box-shadow:0px 0 0 #19a268 inset;

}

.reply a:hover {

  box-shadow:-100px 0 0 #19a268 inset;

}

h2.comments-title {

    color: #26629e !important;

    margin: 20px 25px 0 15px !important;

    background: none !important;

}

.comment-meta.commentmetadata a {

  text-decoration: none;

  font-size: 12px;

}

.comment-list ol.children {

  margin-top: 25px;

  margin-left: 45px;

  list-style: none;

}

.comments-area ol.comment-list {

    list-style: none;

}

ol.comment-list p {
    margin-bottom: 0;

}
textarea#comment {
    width: 100%;
}










comment form এর textarea ফিল্ড নিচে আনার জন্য 
================================ 


function ruhul_academy_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'ruhul_academy_move_comment_field_to_bottom' );



comment form এর যে কন  ফিল্ড রিমুভ করার  জন্য 
================================ 

function ruhul_academy_disable_comment_amy_filed($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','ruhul_academy_disable_comment_amy_filed');



functions.php 
================================ 

/**
 * Featured Image Support
 */
add_theme_support( 'post-thumbnails', array( 'post', 'page') );
set_post_thumbnail_size( 200, 200, true );

add_image_size( 'feature-image', 200, 150, true );
add_image_size( 'your_image_id_here', 480, true );




/**
 * Widget Support
 */


function widgets_sidebar(){
		register_sidebar( array(
		'name'          => __( 'Home Page Sidebar Top', 'prothom-alo' ),
		'id'            => 'widget-home-top',
		'before_widget' => '<div class="widget"><div class="category-sidebar">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="headbar">',
		'after_title'   => '</h2> ',
	) );
}
add_action( 'widgets_init', 'widgets_sidebar' );



/*
Custom metabox এর জন্য 

*/

function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Others Section', 'slider-textdomain' ), 'slider_meta_callback', 'slider-items' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );


function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' );
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-url-slider" id="meta-text" value="<?php if ( isset ( $slider_stored_meta['meta-url-slider'] ) ) echo $slider_stored_meta['meta-url-slider'][0]; ?>" style="width:100%;font-size:16px;" placeholder="Enter Slider URL Here">
	
	<?php
}

function slider_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'slider_nonce' ] ) && wp_verify_nonce( $_POST[ 'slider_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-url-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-url-slider', sanitize_text_field( $_POST[ 'meta-url-slider' ] ) );
	}
	

}
add_action( 'save_post', 'slider_meta_save' );


//custom post with meta box display
<?php
	global $post;
	$i=0;
	$args = array('posts_per_page' => -1, 'post_type'=> 'slider-items','page'=> $paged, 'order' => 'DESC');
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) : setup_postdata($post);
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-items');  
	$i++;
	$this_id = get_the_ID(); 
	global $wpdb;
	$m_name_subtitle = '';
	$tbl_postmeta = $wpdb->prefix."postmeta";			
	$meta_name_subtitle = 'meta-subtitle-slider';			
	$query_result = "select * from $tbl_postmeta where post_id='$this_id' AND meta_key='$meta_name_subtitle'";
	$result = $wpdb->get_results($query_result);
	foreach($result as $row)
	{
		$m_name_subtitle = $row->meta_value;
	}
?>
<?php endforeach;?>
<?php echo $large_image_url[0];  ?>


//all scripts and style load in header 
// wp enqueue script and style

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
https://developer.wordpress.org/themes/basics/including-css-javascript/



//advance shorcode register
function youtube_shortcode($atts, $content = null) {
   extract(shortcode_atts(array("video_id"=> '',"width" => '',"height" =>'' ), $atts));
   

}
add_shortcode("youtube", "youtube_shortcode");


//page redirect after sent message
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://localhost/mywordpress/';
}, false );
</script>