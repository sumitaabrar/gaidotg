<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta charset="UTF-8">								<!-- meta character set -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		<!-- Mobile Specific Meta -->
		<meta name="author" content="codepixer">			<!-- Author Meta -->
		<meta name="description" content="">				<!-- Meta Description -->
		<meta name="keywords" content="">					<!-- Meta Keyword -->
		
		<title>Gaido</title>								<!-- Site Title -->
		<link rel="shortcut icon" href="img/fav.png">		<!-- Favicon-->

		<link rel="stylesheet" href="{{  URL::asset('css/font-awesome.min.css')  }}">
		<link rel="stylesheet" href="{{  URL::asset('css/linearicons.css')  }}">
		<link rel="stylesheet" href="{{ asset('css/app.css')}}">	
			
	</head>

	<body>

		@include('inc.mainheader')

		<div>
			@yield('content')
		</div>
        		
		
		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Us</h6>
							<p>
									Gaido is a platform for consumers to connects with each other, and share their suggestions and recommendations online. The users can also give reviews about products they have used and places they have visited.
							</p>
							<p class="footer-text">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> Re-distributed by <a target="_blank" href="www.Themewagon.com">Themewagon</a>
							</p>								
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Newsletter</h6>
							<p>Stay update with our latest</p>
							<div class="" id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>

									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>						
					<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
						<div class="single-footer-widget">
							<h6>Follow Us</h6>
							<p>Let us be social</p>
							<div class="footer-social d-flex align-items-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>							
				</div>
			</div>
		</footer>	
		<!-- End footer Area -->	


		<script src="{{  URL::asset('js/vendor/jquery-2.2.4.min.js')  }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{  URL::asset('js/vendor/bootstrap.min.js')  }}"></script>			
		<script src="{{  URL::asset('js/easing.min.js')  }}"></script>			
		<script src="{{  URL::asset('js/hoverIntent.js')  }}"></script>
		<script src="{{  URL::asset('js/superfish.min.js')  }}"></script>	
		<script src="{{  URL::asset('js/jquery.ajaxchimp.min.js')  }}"></script>
		<script src="{{  URL::asset('js/jquery.magnific-popup.min.js')  }}"></script>	
		<script src="{{  URL::asset('js/owl.carousel.js')  }}"></script>
		<script src="{{  URL::asset('js/owl.carousel.min.js')  }}"></script>
		<script src="{{  URL::asset('js/owl.carousel.old.min.js')  }}"></script>			
		<script src="{{  URL::asset('js/jquery.sticky.js')  }}"></script>
		<script src="{{  URL::asset('js/jquery.nice-select.min.js')  }}"></script>	
		<script src="{{  URL::asset('js/hexagons.min.js')  }}"></script>					
		<script src="{{  URL::asset('js/waypoints.min.js')  }}"></script>			
		<script src="{{  URL::asset('js/jquery.counterup.min.js')  }}"></script>	
		<script src="{{  URL::asset('js/jquery.counterup.old.min.js')  }}"></script>					
		<script src="{{  URL::asset('js/mail-script.js')  }}"></script>	
		<script src="{{  URL::asset('js/main.js')  }}"></script>	
		
	</body>

</html>

