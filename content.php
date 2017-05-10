<div class="blog-post">
	<h2 class="blog-post-title">
		<?php if (is_single()): ?>
				<?php the_title() ?>
		<?php else: ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_title() ?>
			</a>
		<?php endif; ?>
	</h2>

	<p class="blog-post-meta">
		<em>
                        <span class="text-muted author">
                            <?php _e( 'By', 'Ichcha' );
                            echo " ";
                            the_author() ?>,
                        </span>
			<time class="text-muted"
			      datetime="<?php the_time( 'd-m-Y' ) ?>"><?php the_time( 'jS F Y' ) ?></time>
		</em>
	</p>

	<!--Show the thumbnail if it exists-->
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="featured-img">
			<?php the_post_thumbnail() ?>
		</div>
	<?php endif; ?>

	<p>
	<?php if (is_single()): ?>
		<?php the_content(); ?>
<hr>
		<?php comments_template(); ?>
	<?php else: ?>
		<?php the_excerpt(); ?>
	<?php endif; ?>
	</p>

</div><!-- /.blog-post -->