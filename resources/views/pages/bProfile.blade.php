@extends('layouts.page')

@section('content') 
    <!-- Row BrandProfile -->
    <div class="row">
        <!-- Column - Left Panels-->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <!-- Card - Upper Panel - Brand Info -->
            <div class="card">
                <img class="card-img-top" src="assets/images/background/profile-bg-01.jpg" alt="Card image cap">
                <div class="card-block little-profile text-center">
                    <div class="pro-img"><img src="assets/images/users/brands/01.png" alt="user" /></div>
                    <h3 class="m-b-0">Burger King</h3>
                    <p>Fast Food Chain</p>
                    <a href="javascript:void(0)" class="primary-btn text-uppercase">Suggest Me</a>
                    <div class="row text-center m-t-20">
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">4 <small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">4<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                        <div class="col-lg-4 col-md-4 m-t-20">
                            <h3 class="m-b-0 font-light">605</h3><small>Suggests</small></div>
                    </div>
                </div>
            </div>
            <!-- Card - Lower Panel - Brand Announcements -->
            <div class="card stickyPanel">
                <div class="card-block bgg-info">
                    <h4 class="text-white card-title">Announcements</h4>
                    <h6 class="card-subtitle text-white m-b-0 op-5">Check out our latest offers</h6>
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
        <div class="col-lg-8 col-xlg-9 col-md-7">



            <div class="row">
				<div class="col-lg-12 col-xlg-12 col-md-12">
					<div class="card m-b-0">                    
						<!--User Reviews input--> 
						<div class="card-block p-t-0 p-b-0">
							<div class="profiletimeline simpleFont">
								<div class="m-t-20 m-b-20">
									<div class="sl-left"> <img src="assets/images/users/1.jpg" alt="user" class="img-circle"> </div>
									<div class="sl-right">
                                        <div class="m-t-20 row">
                                            <div class="col-sm-12">
                                                {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
                                                <div class="row">    
                                                    <div class="col-md-9">
                                                        {{ Form::number('rate', '', ['class' => 'rating rating-loading',  'data-min' => '0', 'data-max' => '5',  'data-step' => '1'])}}
                                                    </div>
                                                    <div class="col-md-3">
                                                        {{ Form::submit( 'Post', [ 'class' => 'btn btn-success btn-broad' ]) }}
                                                    </div>
                                                </div>
                                                <div class="row">    
                                                    <div class="col-md-12 m-t-5">
                                                        {{ Form::textarea('review', '',  [ 'id' => 'review', 'placeholder' => 'Write a Review', 'class' => 'revTextArea' ]) }}
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
									</div>
								</div>              
							</div>
						</div>
					</div>
				</div>
			</div>



            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Activity</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">  
                            <!--first tab    REVIEWS-->  
                            <div class="tab-pane active" id="home" role="tabpanel">


                                <!-- Branch Menu Filter-->
                                <form id="branch-form" class="form-horizontal form-material">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>All</option>
                                                <option>Gulshan Branch</option>
                                                <option>Hyderi Branch</option>
                                                <option>Defence Branch</option>
                                                <option>Bahadurabad Branch</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <!--Branch Menu Filter-->

                                <!--Actual reviews start form here--> 
                                <div class="card-block p-t-0">
                                    <div class="profiletimeline simpleFont">

                                        @if ( count($allRev) > 0)     <!--If the brand has reviews to view, then dispaly them-->
                                            @foreach ($allRev as $rev)
                                                <div class="sl-item">
                                                    <div class="sl-left"> <img src="assets/images/users/{{ $rev->userDp }}" alt="user" class="img-circle"> </div>
                                                    <div class="sl-right">
                                                        <div>
                                                            <a href="#" class="link">{{ $rev->userName }}</a> 
                                                            <span class="sl-date">{{ $rev->created_at }}</span>

                                                            @if ($rev->rRate != NULL)
                                                                <span class="floatRight"><i class="mdi mdi-star text-warning"></i> {{ $rev->rRate }} Star</span>
                                                            @endif
                                                            
                                                            <p class="m-t-10 postFontSize"> {!! $rev->rBody !!} </p>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                            
                                        @else
                                                <p>No reviews yet.</p>
                                            
                                        @endif                        
                                        
                                    </div>
                                </div>
                            </div>
                            <!--second tab   PROFILE-->
                            <div class="tab-pane" id="profile" role="tabpanel">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Name</strong>
                                            <br>
                                            <p class="text-muted">Burger King</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Service</strong>
                                            <br>
                                            <p class="text-muted">Fast Food Chain</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Contact</strong>
                                            <br>
                                            <p class="text-muted">111-246-323</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6"> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">bk@burger.com</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h4 class="font-medium m-t-30">Branches</h4>
                                    <hr>
                                    <a href="hydri.html">
                                        <h5 class="m-t-30">DHA Phase 2 <span class="pull-right">4 <small> <i class="mdi mdi-star"></i></small></span></h5>
                                        <p>C-123, Block H, Hydri, Karachi.</p>
                                    </a>
                                    <a href="hydri.html">
                                        <h5 class="m-t-30">DHA Phase 2 <span class="pull-right">4 <small> <i class="mdi mdi-star"></i></small></span></h5>
                                        <p>C-123, Block H, Hydri, Karachi.</p>
                                    </a>
                                    <a href="hydri.html">
                                        <h5 class="m-t-30">DHA Phase 2 <span class="pull-right">4 <small> <i class="mdi mdi-star"></i></small></span></h5>
                                        <p>C-123, Block H, Hydri, Karachi.</p>
                                    </a>
                                    

                                </div>
                            </div>

                            <!--third tab   SETTINGS-->
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="card-block">
                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Log In ID</label>
                                            <div class="col-md-12">
                                                <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" value="password" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Account Number</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Select City</label>
                                            <div class="col-sm-12">
                                                <select class="form-control form-control-line">
                                                    <option>Karachi</option>
                                                    <option>Lahore</option>
                                                    <option>Islamabad</option>
                                                    <option>Faisalabad</option>
                                                    <option>Quetta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>               
@endsection
            
            



