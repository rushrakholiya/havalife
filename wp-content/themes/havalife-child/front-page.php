<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="main">
	<nav class="navbar navbar-inverse">
		<div class="container">
			<?php get_template_part( 'nav' ); ?>			
		</div>
	</nav>
	<div class="container">
		<div class="col-md-6 col-sm-6 col-xs-6 bgimg ">
			
			<img src="<?php echo get_field("main_banner_image", get_the_ID()); ?>" class="img-responsive back" />
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 slitext">
			<div class="stext">
				<h2><?php echo get_field('block_heading'); ?></h2>
				<P><?php echo get_field('block_description'); ?></P>
			</div>
			<div class="ctetx">
				<?php echo the_field('block_detailed_description'); ?>
			</div>
		</div>
	</div>
</div>

<div class="main1">
	<div class="container">
		<div class="col-md-12">
			<div class="maintitle">
				<h2><?php echo get_field('whats_new_blocks_heading'); ?></h2>
				<p><?php echo get_field('whats_new_blocks_description'); ?></p>
			</div>
		</div>
		<?php 
		if( have_rows('whats_new_blocks') ):
		    while ( have_rows('whats_new_blocks') ) : the_row();
		        ?>
		        <div class="col-md-4 col-sm-4 col-xs-6 new">
					<div class="newsimg">
						<a href="<?php echo get_sub_field('whats_new_block_link'); ?>">  <img src="<?php echo get_sub_field('whats_new_block_image'); ?>" class="img-responsive" /></a>
					</div>
				</div>
		        <?php
		    endwhile;
		endif;
		?>		
	</div>
</div>
<?php get_template_part( 'foot' ); ?>
<?php get_footer();
