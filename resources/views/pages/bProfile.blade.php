@extends('layouts.page')

@section('content') 
    <!-- Row BrandProfile -->
    <div class="row">
        <!-- Column - Left Panels-->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <!-- Card - Upper Panel - Brand Info -->
            <div class="card">
                <img class="card-img-top" src="../storage/images/cover/{{ $brand->cover_photo }}" alt="Card image cap">
                <div class="card-block little-profile text-center">
                    <div class="pro-img">
                        <div class="img"><img src="../storage/images/users/brands/{{ $brand->logo }}" alt="user" /></div>
                    </div>
                    <h3 class="m-b-0">{{ $brand->name }}</h3>
                    <p>{{ $brand->type->name }}</p>
                    
                    @if(!Auth::guest())
                        <!-- Render Useful Button -->
                        @if(count($brand->suggestions->where('user_id', Auth::user()->id )))
                            @foreach(($brand->suggestions->where('user_id', Auth::user()->id )) as $s)
                                <!-- Button to delete the suggestion -->
                                {!! Form::open(['id'=>'suggestionFromDown', 'action' => ['SuggestionsController@update', $s->id], 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
                                {{ Form::hidden('_method', 'PUT')}}
                                {{ Form::hidden('brand_id', $brand->id ) }}
                                {{ Form::button('Un-Suggest It', [ 'class' => 'primary-btn text-uppercase', 'type' => 'submit' ]) }}
                                {!!Form::close() !!}
                            @endforeach
                        @else
                            <!-- Button to mark a new Suggestion -->
                            {!! Form::open(['id'=>'suggestionFromUp', 'action' => 'SuggestionsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
                            {!! Form::hidden('brand_id', $brand->id ) !!}
                            {{ Form::button('Suggest It', [ 'class' => 'primary-btn text-uppercase', 'type' => 'submit' ]) }}
                            {!!Form::close() !!}
                        @endif
                        
                    @else
                        <!-- Dummy Button of Suggestion to request signin -->
                        <button class="primary-btn text-uppercase" type="button" data-toggle="modal" data-target="#signinModal" >
                            Suggest It
                        </button>	
                    @endif

                    @if(!Auth::guest())
                        @if($rating)
                            <div class="row m-t-10"  >
                                <div class="col-md-6 col-md-offset-3">
                                    {!! Form::open(['id'=>'ratingForm', 'action' => ['ReviewsController@updateRating', $rating->id], 'method' => 'POST']) !!}
                                    {{ Form::hidden('_method', 'PUT')}}
                                    <div class="clearfix">
                                        {{ Form::number('rating', $rating->rating , ['class' => 'rating rating-loading', 'data-min' => '0', 'data-max' => '5',  'data-step' => '1' ])}}
                                        <button type="submit">
                                            <span class="float-right"><i class="mdi mdi-star-outline"></i></span>
                                        </button>
                                    </div>
                                    
                                    {!! Form::close() !!}
                                </div>
                            </div>    
                        @else
                            <div class="row m-t-10"  >
                                <div class="col-md-6 col-md-offset-3">
                                    {!! Form::open(['id'=>'ratingForm', 'action' => 'ReviewsController@storeRating', 'method' => 'POST']) !!}
                                    {{ Form::hidden('brand_id', $brand->id ) }}
                                    <div class="clearfix">
                                        {{ Form::number('rating', '' , ['class' => 'rating rating-loading', 'data-min' => '0', 'data-max' => '5',  'data-step' => '1' ])}}
                                        <button type="submit">
                                            <span class="float-right"><i class="mdi mdi-star-outline"></i></span>
                                        </button>
                                    </div>
                                    
                                    {!! Form::close() !!}
                                </div>
                            </div>   
                        @endif
                    @endif

                    @if( count($assess) > 0)
                        @foreach ($assess as $a)
                            <div class="row text-center">
                                <div class="col-lg-4 col-md-4">
                                    <h3 class="m-b-0 font-light">{{ $a->ranking }}<small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                                <div class="col-lg-4 col-md-4">
                                    <h3 class="m-b-0 font-light">{{ $a->rating }}<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                                <div class="col-lg-4 col-md-4">
                                    <h3 class="m-b-0 font-light">{{ count($brand->suggestions) }}</h3><small>Suggest</small></div>
                            </div>    
                        @endforeach
                    @else
                        <div class="row text-center m-t-20">
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">0<small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">0<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">{{ count($brand->suggestions) }}</h3><small>Suggest</small></div>
                        </div> 
                    @endif
                    
                </div>
            </div>
            
            @if(!Auth::guest())
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
                                @if(count($allAnn) > 0)
                                    @foreach($allAnn as $ann)

                                        @if( $ann->url != NULL)
                                            <a href="{{ $ann->url }}" target="_blank">
                                        @endif
                                        
                                        @if( $ann->image != NULL )
                                            <div class="ann-img"> <img src="../storage/images/ann/{{ $ann->image }}"}} alt="user"> </div>
                                        @endif	

                                            <div class="ann-contnet">
                                                <h5>{{ $ann->title }}</h5> 
                                                <p class="ann-desc">{{ $ann->body }}</p>
                                            </div>
                                        
                                            @if( $ann->url != NULL)
                                            </a>
                                        @endif
                                    @endforeach
                                @else
                                    <p>No Announcements to show </p>
                                @endif    
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="col-lg-8 col-xlg-9 col-md-7">

        @if (!Auth::guest())
            <!--User Reviews input visible to only logged in users--> 
            <div class="row">
				<div class="col-lg-12 col-xlg-12 col-md-12">
					<div class="card m-b-0">                    
						<div class="card-block p-t-0 p-b-0">
							<div class="profiletimeline simpleFont">
								<div class="m-t-20 m-b-20">
									<div class="sl-left"> <img src="../storage/images/users/{{ Auth::user()->image }}" alt="user" class="img-circle"> </div>
									<div class="sl-right">
                                        <div class="m-t-20 row">
                                            <div class="col-sm-12">
                                                {!! Form::open(['action' => 'ReviewsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
                                                {!! Form::hidden('brand_id', $brand->id ) !!}
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
        @endif
            



            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Reviews</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">  
                            <!--first tab    REVIEWS-->  
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="card-block p-t-8">
                                    <div class="profiletimeline simpleFont">

                                        @if ( count($allRev) > 0)     <!--If the brand has reviews to view, then dispaly them-->
                                            @foreach ($allRev as $rev)
                                                <div class="sl-item" id="rev{{$rev->id}}">
                                                    <div class="sl-left"> <img src="../storage/images/users/{{ $rev->user->image }}" alt="user" class="img-circle"> </div>
                                                    <div class="sl-right">
                                                        <div>
                                                            <a href="#" class="name link">{{ $rev->user->name }}</a> 
                                                            <span class="sl-date">{{ $rev->created_at }}</span>

                                                            @if ($rev->rate != NULL)
                                                                <span class="floatRight"><i class="mdi mdi-star text-warning"></i> {{ $rev->rate }} Star</span>
                                                            @endif
                                                            
                                                            <p class="m-t-10 postFontSize"> {!! $rev->body !!} </p>
                                                        </div>
                                                        
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
                                            <p class="text-muted">{{ $brand->name }}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Type</strong>
                                            <br>
                                            <p class="text-muted">{{ $brand->type->name}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Website</strong>
                                            <br>
                                            <p class="text-muted">{{ $brand->website}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Contact</strong>
                                            <br>
                                            <p class="text-muted">{{ $brand->contact}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="m-t-30">{{ $brand->description }}</p>
                                    <h4 class="font-medium m-t-30">Branches</h4>
                                    <hr>

                                    @foreach ($allOut as $out)
                                        <h5 class="m-t-30">{{ $out->name }}</h5>
                                        <p>{{ $out->location }}</p>
                                    @endforeach

                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>               
@endsection
            
            



