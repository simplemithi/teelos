<?php include 'nav/header.php'; ?>

<div class="container">
	<!-- Products -->
	<div class="col-sm-12 col-md-12 col-lg-12 text-center">
		<!-- Loop through the products -->
		<?php //for ($i=0; $i < 5; $i++) { ?>
			<!-- <div class="prod col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 text-center">
				<div class="prod_inner col-md-12">
					<img src="https://linsfood.com/wp-content/uploads/2016/08/Zhoug-Yemeni-Green-Chilli-Sauce.jpg" />

					<div class="col-sm-12 col-md-12 col-lg-12 prod_detail_wrap">
						<div class="prod_detail col-sm-8 col-md-8 col-lg-8 pull-left">
							<p class="prod_name"> Chillie Paste </p>
						</div>
						<div class="prod_detail col-sm-4 col-md-4 col-lg-4">
							<button class="read_more btn btn-default" data-toggle="modal" data-target="#prod_read_more"> Read More </button>
						</div>
					</div>
				</div>
			</div> -->
		<?php //} ?>

			<div class="prod col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 text-center">
				<div class="prod_inner col-md-12">
					<img src="<?php echo $root_path?>/assets/images/fry_onion_pickle.jpg" />

					<div class="col-sm-12 col-md-12 col-lg-12 prod_detail_wrap">
						<div class="prod_detail col-sm-8 col-md-8 col-lg-8 pull-left">
							<p class="prod_name"> Fry Onion Pickle </p>
						</div>
						<div class="prod_detail col-sm-4 col-md-4 col-lg-4">
							<button class="read_more btn btn-default" data-toggle="modal" data-target="#prod_read_more"> Read More </button>
						</div>
					</div>
				</div>
			</div>

			<div class="prod col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 text-center">
				<div class="prod_inner col-md-12">
					<img src="<?php echo $root_path?>/assets/images/maldive_fish_pickle.jpg" />

					<div class="col-sm-12 col-md-12 col-lg-12 prod_detail_wrap">
						<div class="prod_detail col-sm-8 col-md-8 col-lg-8 pull-left">
							<p class="prod_name"> Maldive Fish Pickle </p>
						</div>
						<div class="prod_detail col-sm-4 col-md-4 col-lg-4">
							<button class="read_more btn btn-default" data-toggle="modal" data-target="#prod_read_more"> Read More </button>
						</div>
					</div>
				</div>
			</div>

			<div class="prod col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 text-center">
				<div class="prod_inner col-md-12">
					<img src="<?php echo $root_path?>/assets/images/prawn_chilli_pickle.jpg" />

					<div class="col-sm-12 col-md-12 col-lg-12 prod_detail_wrap">
						<div class="prod_detail col-sm-8 col-md-8 col-lg-8 pull-left">
							<p class="prod_name"> Prawn Chilli Pickle </p>
						</div>
						<div class="prod_detail col-sm-4 col-md-4 col-lg-4">
							<button class="read_more btn btn-default" data-toggle="modal" data-target="#prod_read_more"> Read More </button>
						</div>
					</div>
				</div>
			</div>

			<div class="prod col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 text-center">
				<div class="prod_inner col-md-12">
					<img src="<?php echo $root_path?>/assets/images/vegetarian_chilli_pickle.jpg" />

					<div class="col-sm-12 col-md-12 col-lg-12 prod_detail_wrap">
						<div class="prod_detail col-sm-8 col-md-8 col-lg-8 pull-left">
							<p class="prod_name"> Vegetarian Chilli Pickle </p>
						</div>
						<div class="prod_detail col-sm-4 col-md-4 col-lg-4">
							<button class="read_more btn btn-default" data-toggle="modal" data-target="#prod_read_more"> Read More </button>
						</div>
					</div>
				</div>
			</div>

			<div class="prod col-sm-10 col-sm-offset-1 col-md-4 col-lg-4 text-center">
				<div class="prod_inner col-md-12">
					<img src="<?php echo $root_path?>/assets/images/fry_onion_pickle.jpg" />

					<div class="col-sm-12 col-md-12 col-lg-12 prod_detail_wrap">
						<div class="prod_detail col-sm-8 col-md-8 col-lg-8 pull-left">
							<p class="prod_name"> Chillie Paste </p>
						</div>
						<div class="prod_detail col-sm-4 col-md-4 col-lg-4">
							<button class="read_more btn btn-default" data-toggle="modal" data-target="#prod_read_more"> Read More </button>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>

<!-- Modal -->
<div id="prod_read_more" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Chilli Paste</h4>
			</div>
			<div class="modal-body">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- Modal content END-->
	</div>
</div>
<!-- Modal END -->

<?php include 'nav/footer.php'; ?>