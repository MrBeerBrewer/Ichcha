<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Santosh J">
	<!--<link rel="icon" href="../../favicon.ico">-->

	<title>
		<?php bloginfo('name') ?> |
		<?php is_front_page()? bloginfo('description') : wp_title(); ?>
	</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<?php wp_head() ?>
    <style>
        .showcase{
            background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/imgs/showcase_header.jpg'); ?>) no-repeat center center;
        }
    </style>
</head>

<body>
<div class="blog-masthead">
	<div class="container">
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<?php
				wp_nav_menu( array(
					'theme_location'		=> 'navbar',
					'container'         => false,
					'menu_class'				=> '',
					'fallback_cb'				=> '__return_false',
					'items_wrap'				=> '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
					'depth'							=> 2,
					'walker'            => new Ichcha_walker_nav_menu()
				) );
				?>
				<?php get_template_part('navbar-search'); ?>
			</div>

		</nav>
	</div>
</div>

<div class="container-fluid">
	<!--End header.php-->