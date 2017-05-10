<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
		        <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <div class="blog-post"><h2 class="blog-post-title"><?php the_title() ?></a></h2>
				        <?php the_content(); ?>
                    </div>
		        <?php endwhile; ?>
		        <?php else: ?>
                    <p><?php __( 'Sorry I could not find that page.' ); ?> </p>
		        <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>