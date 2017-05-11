<?php
	// This file will accommodate general methods.

	//Excerpt length func
	function set_excerpt_length(){
		return 25;
	}

	add_filter('excerpt_length', 'set_excerpt_length');

	function wpb_ichcha_setup(){
		//Add featured image to post.
		add_theme_support( 'post-thumbnails' );
	}

	add_action('afetr_setup_theme', 'wpb_ichcha_setup');

	//Add post formats.
	function Ichcha_post_formats_setup() {
		//post formats:https://developer.wordpress.org/reference/functions/add_theme_support/
		//https://www.youtube.com/watch?v=CRa7eiqyiCM 7.00
		add_theme_support( 'post-formats', array(
			'aside',
			'audio',
			'chat',
			'gallery',
			'image',
			'link',
			'quote',
			'status',
			'video',
		) );
	}
	add_action( 'after_setup_theme', 'Ichcha_post_formats_setup' );

	function ichcha_customize_colors() {
		$text_color = get_theme_mod( 'text_color' );
		$heading_color = get_theme_mod( 'heading_color' );

		if ( $link_color != '#f0f0f0' ) :
			?>
			<style type="text/css">
				.showcase p {
					color: <?php echo $text_color; ?>;
				}
			</style>
			<?php
		endif;

		if ( $heading_color != '#2a2a2a' ) :
			?>
			<style type="text/css">
				h1,h2,h3,h4,h5,h6 {
					color: <?php echo $heading_color; ?>;
				}
			</style>
			<?php
		endif;
	}
	add_action( 'wp_head', 'ichcha_customize_colors' );