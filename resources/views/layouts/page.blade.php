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

		<!--Including header -->
		@include('inc.header')

		<!-- Page Content-->
		<div class="wrapper">

			@include('inc.side-nav')		<!--Side navbar -->

			<!--Remaining content -->
			<div class="container-fluid siteBody">
				@yield('content')
			</div>

			<!-- start footer Area 	
			<footer class="page-footer-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="page-footer-text">
								Copyright &copy;2019 All rights reserved | <span class="page-copy-right-text">Gaido</span> by <span class="page-copy-right-text"> REKSAM</span>
							</p>
						</div>						
					</div>
				</div>
			</footer>	
			End footer Area -->


		</div>

		
			


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
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 	

		<script>
		$('.nav-toggle').click(function(e) {
  
			e.preventDefault();
			$("html").toggleClass("openNav");
			$(".nav-toggle").toggleClass("active");
		  
		  });
		</script>
		
	</body>

</html>

