<?php include 'nav/header.php'; ?>

<!-- <div class="container"> -->
	<div class="col-sm-12 col-md-12 col-lg-12 text-center">
		<!-- START - Loop through the products -->				
		<?php 
			$result = $conn->query("SELECT * FROM products ORDER BY order_by");
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) { ?>
				    <div class="prod col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 text-center">
					    <div class="prod_inner col-md-12">
					    	<div class="fotorama"
					    		data-fit="contain" data-autoplay="4000" data-loop="true" data-transition="slide">
								<img src="<?php echo $root_path."".$row['image']?>" />
								<img src="<?php echo $root_path."/assets/images/products/slides/".$row['sku']."_slide.jpg"?>" />
							</div>

							<div class="col-sm-12 col-md-12 col-lg-12 prod_detail_wrap">
								<div class="prod_detail col-md-12">
									<p class="prod_name text-center"> <?php echo $row['name']?> </p>
								</div>
								<div class="prod_detail col-md-12">
									<button class="read_more btn btn-default col-sm-12 col-md-12" data-toggle="modal" data-target="#<?php echo $row['sku']?>"> 
										<i class="fa fa-info-circle" aria-hidden="true"></i> Read More 
									</button>
									<!-- <a href="https://www.instamojo.com/teelos/" target="_blank" class="buy_now btn btn-default col-sm-6 col-md-6"> 
										<i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy Now 
									</a> -->
								</div>
							</div>
						</div>
					</div>

					<!-- Modal -->
					<div id="<?php echo $row['sku']?>" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"><?php echo $row['name']?></h4>
								</div>
								<div class="modal-body">
									<p><?php echo $row['description']?></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
							<!-- Modal content END-->
						</div>
					</div>
					<!-- Modal END -->
				<?php }
			}
		?>
		<!-- START - Loop through the products -->	
	</div>
<!-- </div> -->

<?php include 'nav/footer.php'; ?>