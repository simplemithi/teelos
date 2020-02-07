		<div class="footer_div col-sm-12 col-md-12 col-lg-12 text-center">
			<div class="social_div col-sm-12 col-md-3 col-lg-3">
				<h5> Social Media? </h5>
				<a href="#" class="fa fa-facebook-square"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-snapchat-ghost"></a>
			</div>

			<div class="teelo_footer col-sm-12 col-md-3 col-lg-3">
				<h5> Teelo's </h5>
				<p> Teelo's &copy; </p>
				<p> Teelo's Head Ofice <br /> Colombo, Sri Lanka </p>
			</div>

			<div class="menu_links col-sm-12 col-md-3 col-lg-3">
				<h5> Important Links </h5>
				<a href="/tishan/products"> Products </a> <br />
				<a href="#"> Terms & Conditions </a>
			</div>

			<div class="join col-sm-12 col-md-3 col-lg-3">
				<h5> Don't Miss a Deal! </h5>
				<form class="subscribe_form text-center">
					<div class="col-md-9">
			            <input type="email" id="email" class="form-control" placeholder="E-mail">
			        </div>
			        <div class="col-md-3">
			            <button class="btn btn-info subscribe_submit_btn" type="submit">Subscribe</button>
			        </div>
			    </form>
			</div>
		</div>

		<script type="text/javascript">
		$(window).bind("load", function() {
			$(".nav a").on("click", function(){
				$(".nav").find(".active").removeClass("active");
				$(this).parent().addClass("active");
			});
		});
		</script>

	</body>
</html>