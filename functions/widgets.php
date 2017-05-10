<?php
/**
 * Created by PhpStorm.
 * User: Santosh
 * Date: 5/9/2017
 * Time: 3:14 PM
 */

//handle widgets

function wpb_initalize_widgets($id){
	register_sidebar([
		'name' => 'IchchaSidebar',
		'id' => 'ichcha_sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	]);
}

add_action('widgets_init', 'wpb_initalize_widgets');