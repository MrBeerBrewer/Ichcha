<!--Start footer.php-->
<footer class="blog-footer">
	<p>&copy; <?php echo Date("Y"); ?> - <?php bloginfo('name'); ?> by
		<?php
		$my_theme = wp_get_theme();
		echo $my_theme->get( 'Author' );
		?>
    </p>
	<p>
		<a href="#">Back to top</a>
	</p>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.1.1.slim.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>js/tether.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<!--What do you want? Self hosted or CND? -->
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>-->
</body>
</html>