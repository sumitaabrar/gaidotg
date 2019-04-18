@extends('layouts.mainpage')

@section('content')
	<!-- Start Banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-start">
				<div class="banner-content col-lg-9 col-md-12">

					<h1 class="text-white text-uppercase">
						Discuss. Review. Coordinate				
					</h1>
					<p class="text-white">
						We are here to provide you a forum where you can review places and products and also see what other users have to say about your favourite brand. 
					</p>
					<a href="#" class="primary-btn text-uppercase">Write a Review</a>
				</div>
			

				<!-- Start Review Carousel-->
				<div class="holder">
					<div id="brand-slider" class="owl-carousel owl-theme"> 
						<div class="item brand">
							<span class="icon fa fa-quote-left"></span>
							<p class="description">Their services are best in th...</p>
							<span class="brand-link"><a href="/">Read full Review</a></span>
							<div class="brand-content">
								<div class="pic">
									<img src="img/01.png" alt="logo" />
								</div>
								<h3 class="title">Burger King</h3>		
							</div>
						</div>
						
						<div class="item brand">
							<span class="icon fa fa-quote-left"></span>
							<p class="description">Their services are best in th...</p>
							<span class="brand-link"><a href="/">Read full Review</a></span>
							<div class="brand-content">
								<div class="pic">
									<img src="img/02.png" alt="logo" />
								</div>
								<h3 class="title">Markello</h3>		
							</div>
						</div>
						
						<div class="item brand">
							<span class="icon fa fa-quote-left"></span>
							<p class="description">Their services are best in th...</p>
							<span class="brand-link"><a href="/">Read full Review</a></span>
							<div class="brand-content">
								<div class="pic">
									<img src="img/03.png" alt="logo" />
								</div>
								<h3 class="title">Adidas</h3>		
							</div>
						</div>
						
						<div class="item brand">
							<span class="icon fa fa-quote-left"></span>
							<p class="description">Their services are best in th...</p>
							<span class="brand-link"><a href="/">Read full Review</a></span>
							<div class="brand-content">
								<div class="pic">
									<img src="img/04.png" alt="logo" />
								</div>
								<h3 class="title">Pringles</h3>		
							</div>
						</div>
						
						<div class="item brand">
							<span class="icon fa fa-quote-left"></span>
							<p class="description">Their services are best in th...</p>
							<span class="brand-link"><a href="/">Read full Review</a></span>
							<div class="brand-content">
								<div class="pic">
									<img src="img/05.png" alt="logo" />
								</div>
								<h3 class="title">Food Club</h3>		
							</div>
						</div>
						
						<div class="item brand">
							<span class="icon fa fa-quote-left"></span>
							<p class="description">Their services are best in th...</p>
							<span class="brand-link"><a href="/">Read full Review</a></span>
							<div class="brand-content">
								<div class="pic">
									<img src="img/06.png" alt="logo" />
								</div>
								<h3 class="title">Dine In</h3>		
							</div>
						</div>
						
						<div class="item brand">
							<span class="icon fa fa-quote-left"></span>
							<p class="description">Their services are best in th...</p>
							<span class="brand-link"><a href="/">Read full Review</a></span>
							<div class="brand-content">
								<div class="pic">
									<img src="img/07.png" alt="logo" />
								</div>
								<h3 class="title">Chop Chip</h3>		
							</div>
						</div>
						
	
					</div>
				</div>
				<!-- End Review Carousel-->				
			</div>
		</div>
	</section>
	<!-- End Banner Area -->				
	
	
		
	<!-- Start quote Area -->
	<section class="quote-area pt-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-sm-12 quote-left">
					<h2 class="text-right">
						<span>Gaido</span>, the guider<br>
						you need for<br>
						<span>Everything</span>.
					</h2>
				</div>
				<div class="col-lg-7 col-sm-12 quote-right">
					<p class="text-left">
						Gaido is a platform for consumers to connects with each other and share their experiences online. The users can also give reviews about products they have used and places they have visited. Furthermore, it will provide the users with a forum to initiate and participate in discussions about products and services online. The registered business organizations will also get an opportunity to create and maintain their public profile via Gaido.
					</p>
				</div>
			</div>
		</div>	
	</section>
	<!-- End quote Area -->
	

	<!-- Start cat Area -->
	<section class="cat-area half-section-gap" id="service">
		<div class="container">							
			<div class="row">
				<div class="col-lg-4">	
					<div class="single-cat d-flex flex-column">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bubble"></span></span></a>
						<h4 class="mb-20" style="margin-top: 23px;">Reviews</h4>
						<p>
							User can give reviews about products & places and see what others have said about them.
						</p>
					</div>															
				</div>
				<div class="col-lg-4">	
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-map-marker"></span></span></a>
						<h4 class="mt-40 mb-20">Recommendations</h4>
						<p>
							This feature allows users to ask for recommendations from other Gaido users.
						</p>
					</div>															
				</div>
				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-users"></span></span></a>
						<h4 class="mt-40 mb-20">Discussions</h4>
						<p>
							Here user can share their experience and discuss what others think about a service.
						</p>
					</div>							
				</div>
				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-license"></span></span></a>
						<h4 class="mt-40 mb-20">Business Profiles</h4>
						<p>
							Profile of all registered business organizations with their rating, ranking and user reviews.
						</p>
					</div>							
				</div>

				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-bullhorn"></span></span></a>
						<h4 class="mt-40 mb-20">Announcements</h4>
						<p>
							This feature will allow business organizations to make public announcements.
						</p>
					</div>							
				</div>

				<div class="col-lg-4">
					<div class="single-cat">
						<a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-chart-bars"></span></span></a>
						<h4 class="mt-40 mb-20">Reports</h4>
						<p>
							Registered businesses will get monthly report based on their current months popularity among users. 
						</p>
					</div>							
				</div>

			</div>
		</div>	
	</section>
	<!-- End cat Area -->				
					
															
	<!-- Start callto-action-area Area -->
	<section class="callto-action-area section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<h1 class="text-white">Got Impressed by our features</h1>
					<p class="text-white">
						Get your business registered to start benefiting from amazing features of Gaido today. Connect with your consumer here on Gaido and learn what they have to say about you. What's more, keep an eye on market by comparing with your competitors.
					</p>
					<a class="primary-btn" href="/register">Register Now</a>							
				</div>
			</div>
		</div>	
	</section>
	<!-- End callto-action-area Area -->


	<!-- Start testomial Area -->
	<section class="testomial-area section-gap" id="testimonail">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">What our Client’s Say about us</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<div class="active-tstimonial-carusel">
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t1.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t2.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t3.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>	
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t1.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t2.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t3.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>															
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t1.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t2.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>
					<div class="single-testimonial item">
						<img class="mx-auto" src="img/t3.png" alt="">
						<p class="desc">
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
						</p>
						<h4>Mark Alviro Wiens</h4>
						<p>
							CEO at Google
						</p>
					</div>														
				</div>
			</div>
		</div>	
	</section>
	<!-- End testomial Area -->	
@endsection


