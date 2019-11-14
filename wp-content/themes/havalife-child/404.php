<?php 
get_header();
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/booking.css" type="text/css" />
<div class="bookmain">	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<?php get_template_part( 'nav' ); ?>
		</div>
	</nav>
</div>
<div class="bookmain1">
	<div class="container">
    	<div class="col-md-12">
        	<div class="cftext">
            	<h2>Page Not found</h2>
            </div>
        </div>
    </div>
</div>

<div class="bookmain2">
	<div class="container">    	
    	<div class="col-md-12">
        	<div class="bookform">				
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'foot' ); ?>
<?php 
get_footer();
?>