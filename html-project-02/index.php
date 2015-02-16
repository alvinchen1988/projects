<?php
	$linkActive = array('','');
	require_once('./templates/header.php') ?>

 <!-- The container is used to define the width of the slideshow -->
 	<div class="slider-container fotorama" id="slider">
		<img src="images/chestnut-cream-slide.jpg" alt="New cake for the Fall season-chestnut cream cake">
		<img src="images/minty-white-slide.jpg" alt="Minty flavor white chocolate mousse cake">
		<img src="images/chestnut-trees-slide.jpg" alt="Chestnut trees-where our freshly roasted chestnuts come from">
 	</div> <!-- end slider-container -->

	<section class="gallery gallery--home">

		<div class="gallery--home__box">

			<div class="gallery--home__innerbox">
				<a href="cakes.php">
					<img src="images/black-forest-slice.jpg" alt="a slice of black-forest cake">
        			<span class="gallery--home__title">Black Forest</span>
        		</a>
			</div>

			<div class="gallery--home__innerbox">
				<a href="cakes.php">
					<img src="images/cappuccino-slice.jpg" alt="a slice of cappuccino cake">
        			<span class="gallery--home__title">Cappucino</span>
        		</a>
			</div>

			<div class="gallery--home__innerbox">
				<a href="cakes.php">
					<img src="images/almond-crumb-slice.jpg" alt="a slice of almond-crumb">
        			<span class="gallery--home__title">Almond Crumb</span>
        		</a>
			</div>

			<div class="gallery--home__innerbox">
				<a href="cakes.php">
					<img src="images/tiramisu-slice.jpg" alt="a slice of tiramisu">
        			<span class="gallery--home__title">Tiramisu</span>
        		</a>
			</div>

		</div> <!-- end gallery--home__box -->

	</section> <!-- end gallery--home -->

<?php include_once('./templates/footer.php') ?>

