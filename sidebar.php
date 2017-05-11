<div class="container ">
    <span class="dashicons dashicons-menu" aria-hidden="true"
          data-toggle="collapse" data-target="#demo" ></span>
    <div id="demo" class="collapse">
        <div id="sidebar-wrapper"> <!-- Sidebar -->
			<?php if(is_active_sidebar('ichcha_sidebar')): ?>
				<?php dynamic_sidebar('ichcha_sidebar'); ?>
			<?php endif; ?>
        </div> <!-- /#sidebar-wrapper -->
    </div>
</div>

