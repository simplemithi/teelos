<?php include 'nav/header.php'; ?>

<!-- <div class="container"> -->
	<!-- <div class="col-sm-12 col-md-12 col-lg-12 main_div"> -->
		<div class="col-sm-12 col-md-12 col-lg-12 home_top_right fotorama" 
			data-nav="thumbs" data-fit="cover" data-autoplay="4000" data-loop="true" data-transition="slide" data-width="100%" data-ratio="400/200">
     		
			<?php 
				$images = glob("assets/images/slides/*.jpg");

				foreach($images as $image) {
				    echo '<a href="'.$root_path.'/'.$image.'" alt="'.$image.'" title="'.$image.'"></a>';
				}
			?>
		</div>

		<div class="col-sm-12 col-md-12 col-lg-12 text-center home_bottom_1">
			<p> Teelo's, a brand that is inspired by authentic sri lankan flavors. </p>

			<p> We at Teelo's believe it is absolutely necessary for yo u to have the best of everything in life, and that obviously includes the best for your taste buds. RIGHT? </p>

			<p> Our mission at Teelo’s is to make sure that you have a burst of flavor and spice to every mouth full of food that you eat. </p>

			<p> The blends of spices and condiments that we have at Teelo's can never be compared to anything else out there, because of our obvious secret ingredient – LOVE! Our recipes are family secrets that have been shared down from generations and we promise you, you will not be disappointed. </p>
		</div>
	<!-- </div> -->
<!-- </div> -->

<?php include 'nav/footer.php'; ?>
	