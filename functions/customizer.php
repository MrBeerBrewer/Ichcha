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

	//Background
	/*$wp_customize->add_setting('bgcolor',[
		'default' => '#4285f4',
		'transport' => 'refresh'
	]);

	$wp_customize->add_section('ichcha_color_section',[
			'title' => __('Color', 'ichcha'),
			'priority' => 6
		]);

	$wp_customize->add_control(new WP_Customize_Color_Control(
		$wp_customize, 'theme_colors', [
			'label' => __('Page color', 'ichcha'),
			'section' => 'ichcha_color_section',
			'settings' => 'bgcolor',
		]
	));*/
}

add_action('customize_register', 'wpb_ichcha_customizer');
