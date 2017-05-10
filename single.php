<?php get_header(); ?>

    <div class="row">
        <div class="col-sm-8 col-md-8 blog-main">
            <!--Are there any posts?-->
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			<?php else: ?>
                <p><?php __( 'Sorry to disappoint you. There are no posts yet!' ); ?> </p>
			<?php endif; ?>
        </div><!-- /.blog-main -->
    </div><!-- /.row -->

    <!--End index.php-->
<?php get_footer(); ?>