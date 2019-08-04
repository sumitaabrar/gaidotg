<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta charset="UTF-8">								<!-- meta character set -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		<!-- Mobile Specific Meta -->
		<meta name="author" content="">						<!-- Author Meta -->
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/css/emojione.min.css">

		<link rel="stylesheet" href="{{  URL::asset('css/style2.css')  }}" >

		<link rel="stylesheet" href="{{  URL::asset('css/colors/blue.css')  }}" id="theme">
		
			
			
	</head>

	<body>

		@include('inc.mainheader')

		<div>
			@yield('content')
		</div>
        		
		
		@include('inc.testModal')

		<!-- start footer Area -->		
		@include('inc.mainfooter')	


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

