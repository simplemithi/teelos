			<!-- <div><p class="change_color text-center"> Change background color? </p> -->
			<hr class="seperator"/>
			<div class="footer_div col-sm-12 col-md-12 col-lg-12 text-center">
				<div class="social_div col-sm-12 col-md-12 col-lg-12">
					<!-- <p> Teelos's &reg; </p> -->
					<a href="https://www.facebook.com/Teelos-383100302243263/" class="fa fa-facebook-square"></a>
					<a href="https://www.instagram.com/teelos.in/" class="fa fa-instagram"></a>
					<a class="pull-right" style="line-height:30px" href="tel:00919019494942"> Order Now: +919019494942 </a>
				</div>
			</div>


			<script>
				$(function () {
				    setNavigation();
				});

				function setNavigation() {
				    var path = window.location.pathname;
				    path = path.replace(/\/$/, "");
				    path = decodeURIComponent(path);

				    // START - Set title
				    var base =  path.replace(/.*\//, '');
				    base = base.charAt(0).toUpperCase() + base.slice(1);
				    if (base.trim()) {
				    	document.title += ' | ' + base;
				    }
				    // END - Set title

				    $(".topnav a").each(function () {
				        var href = $(this).attr('href');
				        if (path.substring(0, href.length) === href) { //alert($(this).closest('a').text());
				            $(this).closest('a').addClass('active');
				        }
				    });
				}

				function mob_nav_collapse() {
					var x = document.getElementById("myTopnav");
					if (x.className === "topnav") {
						x.className += " responsive";
						$('.header_logo_a').hide();

					} else {
						x.className = "topnav";
						$('.header_logo_a').show();
					}
				}

				$('.change_color').click(function(){
					var newColor = '#'+Math.floor(Math.random()*16777215).toString(16);
					$('.wrapper').css("background", newColor);
				});

				

				// $(function () {
				// 	// Set the selected tab to active even when the page is refreshed
				// 	$('#myTopnav a').on('click', function(e) {
			 //        	window.localStorage.setItem('activeTab', $(e.target).attr('href'));
				//     });
				//     var activeTab = window.localStorage.getItem('activeTab'); 
				//     if (activeTab) {
				//         $('#myTopnav a[href="' + activeTab + '"]').addClass('active');
				//     }

				//     // Set the title
				//     $(document).ready(function() {
				// 	    var base =  activeTab.replace(/.*\//, '');
				// 	    base = base.charAt(0).toUpperCase() + base.slice(1);
				// 	    if (base.trim()) {
				// 	    	document.title += ' | ' + base;
				// 	    }
				//     });
				// });
			</script>
		</div>
	</body>
</html>