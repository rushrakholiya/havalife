<?php 
/*
* Template Name: About
*/
?>
<?php 
get_header();
?>
<style>
.main1 {
    padding-top: 100px;
    padding-bottom: 100px;
}

.main6.text-center {
    border-top: 3px solid #000;
    border-bottom: 3px solid #000;
    margin-bottom: 50px;
    padding-bottom: 33px;
}
.ff1{ font-size: 25px;
       text-align: justify;
    
}
.ff2{ font-size: 25px;    text-align: justify;

}
.main6.text-center h2 {
    color: #000;
    font-weight: 700;
}
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
}

.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}

/*
  WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
  Need to override the 3.3 new styles for modern browsers & apply opacity
*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}
</style>

<div class="">
	<nav class="navbar navbar-inverse about">
		<div class="container">
			<?php get_template_part( 'nav' ); ?>
		</div>
	</nav>
</div>

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	<!-- Indicators -->

	<!-- Wrapper for slides -->
	<?php 
	if( have_rows('about_carousel_items') ):
		$arb = 0;
		?>
		<div class="carousel-inner">
			<?php
	    	while ( have_rows('about_carousel_items') ) : the_row();
	        ?>
	        <div class="item <?php echo ($arb == 0) ? 'active' : ''; ?>">
				<img src="<?php echo get_sub_field('about_carousel_item'); ?>" alt="image-<?php echo $arb+1; ?>">
			</div>	
	        <?php 
	        $arb++;
	    	endwhile;	    	
	        ?>
    	</div>
    <?php 
	endif;
    ?>	
	<!-- Left and right controls -->
</div>

<div class="main1 about">
	<div class="container">
		<div class="col-lg-6"><img src="<?php echo get_field('about_middle_block_image'); ?>" class="img-responsive"/></div>
		<div class="col-lg-6">
			<?php echo the_field('about_middle_block_description'); ?>
		</div>
	</div>
</div>

<div class="main6 text-center">
	<div class="container">
		<h2><?php echo get_field('our_brands_heading'); ?></h2>
		<div class="col-lg-12 text-center">
			<div style="display:table;margin:auto">
				<?php 
				if( have_rows('our_brands_items') ):
			    	while ( have_rows('our_brands_items') ) : the_row();
			        ?>		        
						<a href="<?php echo get_sub_field('our_brands_item_link'); ?>" target="_blank">
							<img src="<?php echo get_sub_field('our_brands_item_image'); ?>" class="img-responsive col-lg-6" />
						</a>
					<?php 
					endwhile;
					?>
				<?php 
				endif;
				?>
			</div>
		</div>
	</div>
</div>
<?php get_template_part( 'foot' ); ?>
<?php 
get_footer();
?>