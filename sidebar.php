<div class="container ">
    <span class="fa fa-caret-square-o-down fa-3x" aria-hidden="true"
          data-toggle="collapse" data-target="#demo" ></span>
    <div id="demo" class="collapse">
        <div id="sidebar-wrapper"> <!-- Sidebar -->
			<?php if(is_active_sidebar('ichcha_sidebar')): ?>
				<?php dynamic_sidebar('ichcha_sidebar'); ?>
			<?php endif; ?>
        </div> <!-- /#sidebar-wrapper -->
    </div>
</div>

