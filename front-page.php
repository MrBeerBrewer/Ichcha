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
			<div class="col-md-4">
				<div class="box">
					<span class="fa fa-users"></span>
					<h3>About</h3>
                    <p class="lead">
                        Ichcha, a desire. I've had a desire to develop a Wordpress theme.
                        This is but a mere outcome of desire(Ichcha).
                    </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<span class="fa fa-gears"></span>
					<h3>What next</h3>
                    <p class="lead">
                        Keep working towards your desire. Make it a little more
                        desirable!
                    </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<span class="fa fa-search"></span>
					<h3>Features</h3>
                    <p class="lead">
                        A responsive theme, built with love using Bootstrap 4 framework.
                    </p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

