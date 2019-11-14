<div class="main2">
	<div class="container">
		<div class="col-md-12 text-center">
			<div class="statext">
				<h2>WANT TO STAY</h2>
				<h3>CONNECTED WITH HASMUKH VAJA ?</h3>
			</div>
			<div class="col-md-12 text-center">

				<a href="#" class="btn btn-default BT" data-toggle="modal" data-target="#myModal">CLICK HERE</a>

			</div>
		</div>
	</div>
</div>
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<img src="<?php echo get_field('want_to_stay_modal_image', 'option'); ?>" class="img-responsive titlogo" style="width: 69%;" />
				<h2 class="stay"><?php echo get_field('want_to_stay_modal_text', 'option'); ?></h2>
			</div>
			<div class="modal-body">
				<?php echo the_field('want_to_stay_form_shortcode', 'option'); ?>				
			</div>
		</div>
	</div>
</div>
<div class="main3">
	<div class="container">
		<div class="col-md-12 text-right iconi">
			<?php 
			if( have_rows('footer_social_links', 'option') ):
		    	while ( have_rows('footer_social_links', 'option') ) : the_row();
		        ?>
		        <a href="<?php echo get_sub_field('footer_social_link'); ?>" target="_blank"><i class="<?php echo get_sub_field('footer_social_class'); ?>"></i></a>
		        <?php
		    	endwhile;
		    endif;
			?>			
		</div>
		<div class="col-md-12 text-left">
			<?php echo get_field('footer_address_block', 'option'); ?>
			<?php echo get_field('footer_contact_block', 'option'); ?>
			<?php echo get_field('footer_email_block', 'option'); ?>
		</div>
	</div>
</div>

<div class="main4">
	<div class="container">
		<div class="col-sm-6 col-xs-6 hs" >
			<?php echo get_field('footer_copyright_text', 'option'); ?>
		</div>

		<div class="col-sm-6 col-xs-6 db" align="right">

		</div>
	</div>
</div>