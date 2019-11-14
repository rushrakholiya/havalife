<?php 
/*
* Template Name: Event
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
a.btn.btn-info {
	width: 389%!important;
	height: 111px;
	line-height: 113px;
	text-transform: uppercase;
}
.main-banner.ff3 {
	background: url(images/events.jpg) red;
	background-size: cover;
}
.main6.text-center {
	border-top: 3px solid #000;
	border-bottom: 3px solid #000;
	margin-bottom: 50px;
	padding-bottom: 33px;
}
.ff1{ font-size: 25px;
	padding-top: 100px;
}
.ff2{ font-size: 25px;

}
.main6.text-center h2 {
	color: #000;
	font-weight: 700;
}
.dd {
	float: left;
	width: 100%;
	margin-bottom: 100px;
	background-color: #fff;
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
  iframe {
  	float: left;
  	width: 100%;
  	height: 1100px;
  }

  @media only screen and (max-width: 480px) {
  	#mycalendar {
  		width: 100%;
  		margin: 8em auto 0 auto;
  		max-width: 80em;
  		border: 1px solid #666;
  	}
  	#calendar {
  		margin-top: 121px;
  	}
  }
  @media only screen and (max-width: 360px) {

  	.llk{display:none}
  }

}



.fc-unthemed .fc-today {
	background: #fcf8e3;
	color: red;
	padding: 2;
}

.ffg1 {
	position: relative;
	width: 100%;



}

.overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0);
	transition: background 0.5s ease;
}

.ffg1:hover .overlay {
	display: block;
	background: rgba(0, 0, 0, .3);
}

.ffg1 img {

	width: 100%;


}

.title {
	position: absolute;
	width: 100%;
	left: 0;
	top: 120px;
	font-weight: 700;
	font-size: 30px;
	text-align: center;
	text-transform: uppercase;
	color: white;
	z-index: 1;
	transition: top .5s ease;
}

.ffg1:hover .title {
	top: 90px;
}

.button {
	position: absolute;
	width: 100%;
	left: 0;
	top: 50%;
	text-align: center;
	opacity: 0;
	transition: opacity .35s ease;
}

.button a {
	width: 200px;
	padding: 12px 48px;
	text-align: center;
	color: white;
	border: solid 2px white;
	z-index: 1;
}

.ffg1:hover .button {
	opacity: 0.6;
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

<?php 
while ( have_posts() ) : the_post();
	the_content(); 
endwhile;
?>
<div class="dd">
	<?php 
	if( have_rows('events_images_sections') ):
		$arb = 0;
		?>		
		<?php
		while ( have_rows('events_images_sections') ) : the_row();
		?>
			<div class="ffg1">
				<a href="<?php echo get_sub_field('events_images_section_link'); ?>"><img src="<?php echo get_sub_field('events_images_section_image'); ?>" class="img-responsive" style="width:100%" id="hhg"></a>
				<div class="overlay"></div>
				<div class="button"><a href="<?php echo get_sub_field('events_images_section_link'); ?>"><?php echo get_sub_field('events_images_section_text'); ?></a>
				</div>
			</div>
		<?php 
		endwhile;
		?>
	<?php endif; ?>	
</div>
<?php get_template_part( 'foot' ); ?>
<?php 
	get_footer();
?>