<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta charset="UTF-8">								<!-- meta character set -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		<!-- Mobile Specific Meta -->
		<meta name="author" content="">			<!-- Author Meta -->
		<meta name="description" content="">				<!-- Meta Description -->
		<meta name="keywords" content="">					<!-- Meta Keyword -->
		
		<title>Gaido</title>								<!-- Site Title -->
		<link rel="shortcut icon" href="img/fav.png">		<!-- Favicon-->

		<!--Main Stylesheets compiled-->
		<link rel="stylesheet" href="{{ asset('css/app.css')}}">
		
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="{{  URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')  }}" >
		<link rel="stylesheet" href="{{  URL::asset('http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css') }}" >
		<!--Extra Stylesheets-->
		<link rel="stylesheet" href="{{  URL::asset('css/font-awesome.min.css')  }}">
		<link rel="stylesheet" href="{{  URL::asset('css/linearicons.css')  }}">
		<link rel="stylesheet" href="{{  URL::asset('assets/plugins/chartist-js/dist/chartist.min.css')  }}" >
    	<link rel="stylesheet" href="{{  URL::asset('assets/plugins/chartist-js/dist/chartist-init.css')  }}" >
    	<link rel="stylesheet" href="{{  URL::asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')  }}" >
    	<link rel="stylesheet" href="{{  URL::asset('assets/plugins/c3-master/c3.min.css')  }}" >
		<link rel="stylesheet" href="{{  URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/css/emojione.min.css">
		
		<link rel="stylesheet" href="{{  URL::asset('css/style2.css')  }}" >

		<link rel="stylesheet" href="{{  URL::asset('css/colors/blue.css')  }}" id="theme">
		

	</head>

	

	<body class="fix-header fix-sidebar card-no-border">
		<!-- Preloader -->
		<div class="preloader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
		</div>
		
		<!-- Main wrapper -->
		<div id="main-wrapper">
			
			@include('inc.header')          <!-- Topbar header -->
				 
			@include('inc.side-nav')         <!-- Sidebar -->   
			<br><br><br>
			<!-- Page wrapper (Remaining Content) -->
			<div class="page-wrapper">
				<div class="container-fluid">

					@include('inc.messages')
					@yield('content')

				</div>

				<!-- footer -->
				<footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>

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

		<!--Javscript & JQuery-->
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
		<!-- Jquery -->
		<script src="{{  URL::asset('assets/plugins/jquery/jquery.min.js')  }}"></script>
		<script src="{{  URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js') }}"></script>
		<!-- Bootstrap tether Core JavaScript -->
		<script src="{{  URL::asset('assets/plugins/bootstrap/js/tether.min.js')  }}"></script>
		<script src="{{  URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')  }}"></script>
		<!--Bootstrap Start Rating -->
		<script src="{{  URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js') }}"></script>
		<!-- slimscrollbar scrollbar JavaScript -->
		<script src="{{  URL::asset('js/jquery.slimscroll.js')  }}"></script>
		<!--Wave Effects -->
		<script src="{{  URL::asset('js/waves.js')  }}"></script>
		<!--Menu sidebar -->
		<script src="{{  URL::asset('js/sidebarmenu.js')  }}"></script>
		<!--stickey kit -->
		<script src="{{  URL::asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')  }}"></script>
		<!--Custom JavaScript -->
		<script src="{{  URL::asset('js/custom.min.js')  }}"></script>		
		<!-- chartist chart -->
		<script src="{{  URL::asset('assets/plugins/chartist-js/dist/chartist.min.js')  }}"></script>
		<script src="{{  URL::asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')  }}"></script>
		<!--c3 JavaScript -->
		<script src="{{  URL::asset('assets/plugins/d3/d3.min.js')  }}"></script>
		<script src="{{  URL::asset('assets/plugins/c3-master/c3.min.js')  }}"></script>
		<!-- Chart JS -->
		<script src="{{  URL::asset('js/dashboard1.js')  }}"></script>

		<!--Emoji -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.js"></script>

		
		<script>
			$("#review").emojioneArea({
				pickerPosition: "bottom",
				search: false, 
				tones: false,
				saveEmojisAs: "shortname",
				attributes: {
					spellcheck : true,
				}
			});

		</script>


	</body>

</html>

