<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>                        
	</button>
	<a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive logo" /></a>
</div>

<div class="collapse navbar-collapse" id="myNavbar">
	<?php
		wp_nav_menu( array(
			'menu'              => 'primary',
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => '',
			'menu_class'        => 'nav navbar-nav navbar-right',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
		);
	?>	
</div>