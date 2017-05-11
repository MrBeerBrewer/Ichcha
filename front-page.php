<?php
/**
 * Created by PhpStorm.
 * User: Santosh
 * Date: 5/11/2017
 * Time: 9:25 AM
 */
get_header('front-page') ?>

<section class="showcase">
	<div class="container-fluid">
		<h1 class="blog-title">
            <?php echo get_theme_mod('showcase_heading', 'Ichcha') ?>
        </h1>
		<p class="lead">
			<?php echo get_theme_mod('showcase_text', 'A subtle Bootstrap 4 Wordpress theme.') ?>
        </p>
		<a href="<?php echo get_theme_mod('btn_url', 'http://ichcha.ga') ?>" class="btn btn-primary btn-lg">
			<?php echo get_theme_mod('btn_text', 'Download') ?>
        </a>
	</div>
</section>

<section class="boxes">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-4">
					<?php if (is_active_sidebar('ichcha_front_page_box1')) : ?>
						<?php dynamic_sidebar('ichcha_front_page_box1'); ?>
					<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-4">
						<?php if (is_active_sidebar('ichcha_front_page_box2')) : ?>
							<?php dynamic_sidebar('ichcha_front_page_box2'); ?>
						<?php endif; ?>
			</div>
			<div class="col-xs-12 col-md-4">
						<?php if (is_active_sidebar('ichcha_front_page_box3')) : ?>
							<?php dynamic_sidebar('ichcha_front_page_box3'); ?>
						<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

