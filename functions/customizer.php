<?php
/**
 * Created by PhpStorm.
 * User: Santosh
 * Date: 5/11/2017
 * Time: 7:09 PM
 */

//Ichcha theme customizer

function wpb_ichcha_customizer($wp_customize){
//Customize showcase
	$wp_customize->add_section('showcase',[
		'title' => __('Showcase', 'ichcha'),
		'description' => sprintf(__('Options for showcase', 'ichcha')),
		'priority' => 130
	]);

	$wp_customize->add_setting('showcase_heading', [
		'default' => _x('Ichcha', 'ichcha'),
		'type' => 'theme_mod'
	]);

	//Add control
	$wp_customize->add_control('showcase_heading', [
		'label' => __('Heading', 'ichcha'),
		'section' => 'showcase',
		'priority' => 1
	]);

	$wp_customize->add_setting('showcase_text', [
		'default' => _x('A subtle Bootstrap 4 Wordpress theme.', 'ichcha'),
		'type' => 'theme_mod'
	]);

	$wp_customize->add_control('showcase_text', [
		'label' => __('Text', 'ichcha'),
		'section' => 'showcase',
		'priority' => 2
	]);

	$wp_customize->add_setting('btn_txt', [
		'default' => _x('Download', 'ichcha'),
		'type' => 'theme_mod'
	]);

	$wp_customize->add_control('btn_txt', [
		'label' => __('Button text', 'ichcha'),
		'section' => 'showcase',
		'priority' => 3
	]);

	$wp_customize->add_setting('btn_url', [
		'default' => _x('http://ichcha.ga', 'ichcha'),
		'type' => 'theme_mod'
	]);

	$wp_customize->add_control('btn_url', [
		'label' => __('Button URL', 'ichcha'),
		'section' => 'showcase',
		'priority' => 4
	]);

	$wp_customize->add_setting('showcase_image', [
		'default' => get_bloginfo('template_directory').'/imgs/showcase_header.jpg',
		'type' => 'theme_mod'
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize, 'showcase_image', [
			'label' => __('Showcase image', 'ichcha'),
			'section' => 'showcase',
			'settings' => 'showcase_image',
			'priority' => 5
		]
	));

	// Color picker setting - heading
	$wp_customize->add_setting( 'heading_color', [
		'default' => '#2a2a2a'
	] );

	// Color picker control - text color
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'heading_color', [
		'label' => 'Heading Color',
		'section' => 'showcase',
		'settings' => 'heading_color',
		'priority' => 6
	]));

	// Color picker setting - text color
	$wp_customize->add_setting( 'text_color', [
		'default' => '#f0f0f0'
	] );

	// Color picker control - text color
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize, 'text_color', [
		'label' => 'Text Color',
		'section' => 'showcase',
		'settings' => 'text_color',
		'priority' => 7
	]));



}

add_action('customize_register', 'wpb_ichcha_customizer');

