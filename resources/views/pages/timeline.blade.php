@extends('layouts.page')

@section('content') 
    <!-- Row Discussions-->
    <div class="row">
        <!--Column - Right Panel-->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">                    
				<!--User Discussions input--> 
				<div class="card-block p-t-0">
					<div class="profiletimeline simpleFont">

						<div class="m-t-30 m-b-30">
							<div class="sl-left"> <img src="assets/images/users/2.jpg" alt="user" class="img-circle"> </div>
							<div class="sl-right">
								<div> 
									<a href="#" class="link">Current User</a>
									<div class="m-t-20 row">
										<div class="col-md-3 col-xs-12"><img src="assets/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
										<div class="col-md-9 col-xs-12"><p>Initiate a Discussion </p> </div>
									</div>
									<div class="m-t-10 row ">
										<div class="col-md-12"><span class="floatRight"><a href="#" class="btn btn-success">Post Discussion</a></span></div>
										
									</div>
								</div>
							</div>
						</div>
						<hr>

						<!--Actual discussions start form here--> 
						@if ( count($allRev) > 0)     <!--If there are discussions to view, then dispaly them-->
							@foreach ($allRev as $rev)
								<div class="sl-item">
									<div class="sl-left"> <img src="img/{{ $rev->userDp }}" alt="user" class="img-circle"> </div>
									<div class="sl-right">
										<div>
											<a href="#" class="link">{{ $rev->userName }}</a> 
											<span class="sl-date">{{ $rev->created_at }}</span>
											<p class="m-t-10 postFontSize"> {{ $rev->rBody }} </p>
										</div>
										<div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
									</div>
								</div>
								<hr>
							@endforeach
							
						@else
								<p>No recent Activity.</p>
							
						@endif                        
						
					</div>
				</div>
            </div>
		</div>
		
		<!-- Column - Left Panel-->
        <div class="col-lg-4 col-xlg-3 col-md-5">
			<!-- Card - Announcements -->
			<div class="card stickyPanel">
				<div class="card-block bgg-info">
					<h4 class="text-white card-title">Announcements</h4>
				</div>
				<div class="card-block">
					<div class="message-box contact-box">
						<h2 class="add-ct-btn"></h2>
						<div class="message-widget contact-widget">
							<!-- Announcement -->
							<a href="#">
								<div class="ann-img"> <img src="assets/images/ann/bk-01.jpg" alt="user"> </div>
								<div class="ann-contnet">
									<h5>50% off</h5> <p class="ann-desc">Show your Gaido membership card and get 50% off on any of our food items this weekend.</p></div>
							</a>
							<!-- Announcement -->
							<a href="#">
								<div class="ann-img"> <img src="assets/images/ann/bk-02.jpg" alt="user"> </div>
								<div class="ann-contnet">
									<h5>Flat 50% off</h5> <p class="ann-desc">Show your Gaido membership card and get 50% off on any of our food items this weekend. Show your Gaido membership card and get 50% off on any of our food items this weekend. Show your Gaido membership card.</p></div>
							</a>
							<!-- Announcement -->
							<a href="#">
								<div class="ann-img"> <img src="assets/images/ann/bk-03.jpg" alt="user"> </div>
								<div class="ann-contnet">
									<h5>Discount</h5> <p class="ann-desc">Show your Gaido membership card and get 50% off on any of our food items this weekend.</p></div>
							</a>
							<!-- Announcement -->
							<a href="#">
								<div class="ann-img"> <img src="assets/images/ann/bk-04.jpg" alt="user"> </div>
								<div class="ann-contnet">
									<h5>Special Offer</h5> <p class="ann-desc">Show your Gaido membership card and get 50% off on any of our food items this weekend.</p></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>                
@endsection
            
            



