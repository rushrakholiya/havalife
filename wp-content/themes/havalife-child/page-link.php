<?php 
/*
* Template Name: Link
*/
?>
<?php 
get_header();
?>
<div class="main-banner ff3" style="background-image:url(<?php echo get_field('link_banner_image'); ?>);background-size: cover;">
	<nav class="navbar navbar-inverse">
		<div class="container">
			<?php get_template_part( 'nav' ); ?>
		</div>
	</nav>
</div>
<div class="dd" id="dd">
	<a href="<?php echo get_site_url(); ?>/book">
		<img src="<?php echo get_field('link_image1'); ?>" class="img-responsive">
	</a>
	<div id="evnet55">
		<a href="<?php echo get_site_url(); ?>/book">
			<img src="<?php echo get_field('link_image2'); ?>" class="img-responsive">
		</a>
	</div>
</div>
<?php get_template_part( 'foot' ); ?>
<?php 
get_footer();
?>