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
		<h1 class="blog-title">Ichcha</h1>
		<p class="lead">A subtle Bootstrap 4 Wordpress theme. </p>
		<a href="" class="btn btn-primary btn-lg"> Read more </a>
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

