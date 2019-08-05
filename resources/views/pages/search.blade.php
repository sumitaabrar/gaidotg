@extends('layouts.page')

@section('content') 

    <div class="row">
        <!--Column - Right Panel-->
        <div class="col-lg-3 col-xlg-3 col-md-4">
			<!-- Card - Announcements -->
			<div class="card">
				<div class="card-block bgg-info">
					<h4 class="text-white card-title">Additional Filters</h4>
				</div>
				<div class="card-block">
					<div class="message-box contact-box">
						<h2 class="add-ct-btn"></h2>
						<div class="message-widget contact-widget">
							<p> Search businesses according to your preference </p>
							<br>
							<div class="list-group list-group-flush">
								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 1)}}
									<button type="sumbit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Clothing Brands</h5></button>
								{!!Form::close()!!}

								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 3)}}								
									<button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Fast Food</h5></button>
								{!!Form::close()!!}

								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 5)}}								
									<button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Chinese</h5></button>
								{!!Form::close()!!}

								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 4)}}								
									<button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Bakery</h5></button>
								{!!Form::close()!!}

								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 6)}}								
									<button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Ice cream Shop</h5></button>
								{!!Form::close()!!}

								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 8)}}								
									<button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Steak</h5></button>
								{!!Form::close()!!}

								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 9)}}								
									<button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Continental</h5></button>
								{!!Form::close()!!}

								{!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 10)}}								
									<button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>General</h5></button>
								{!!Form::close()!!}

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

        <!--Column - Left Panel-->
        <div class="col-lg-9 col-xlg-9 col-md-8">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-block card-search p-l-20">
							@if(request()->isMethod('post'))
								<h3>Search Results</h3>
								<p>Showing results for the query "{{ $key }}" consisting of...</p>
								<p class="p-l-30"><a href="#bOrg"> {{ count($brands) }} Business Organizations</a></p>
								<p class="p-l-30"><a href="#discussion"> {{ count($allDis) }} Discussions</a></p>
								<p class="p-l-30"><a href="#recommandation"> {{ count($allRec) }} Recommendations</a></p>
							@else
								<h3>Search</h3>
								<hr>

								<div class="card-block" style="width:90%;">
									{!!Form::open(['action' => 'PagesController@search', 'method' => 'POST'])!!}
										<div class="single-widget input-group mb-3 " id="mc_embed_signup">
											{{Form::text('key', '' , [ 'class' => 'form-control', 'placeholder' => 'Search', 'onfocus' => 'this.placeholder = \'\'', 'onblur' => 'this.placeholder = \'Search\'', 'aria-label' => 'Search', 'aria-describedby' => 'searchBtn' , 'style'=>'border: 1px solid #b3b3b3;']) }}
											<div class="input-group-append">
											{{ Form::button('<i class="ti-search" aria-hidden="true"></i>', [ 'class' => 'click-btn btn btn-default', 'type' => 'submit', 'id' => 'searchBtn' ]) }}
											</div>
										</div>
									{!!Form::close()!!}
								</div>

							@endif
						</div>
                    </div>
                </div>
            </div>
            

            <!--Search Results: Brands-->
            <div class="row" id = "bOrg">
                <div class="col-lg-12 col-xlg-12 col-md-12">  
                    <div class="card">
                        <div class="card-block p-t-10">
                            <h4>Business Organizations</h4>
                            <hr> 
                            @if(count($brands) > 0)
                                @foreach($brands as $brand)
                                    <div class="m-t-10 col-md-4">
                                        <div class="col-md-5 col-xs-12 m-t-10">
                                            <a href="/bOrg/{{$brand->id}}"><img src="storage/images/users/brands/{{$brand->logo}}" alt="brand" class="img-responsive radius"></a> 
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <h5 style = "color:#04686b;"> {{ $brand->name }} </h5>
                                            <h6> {{ $brand->type->name }} </h6>
                                            <p> {{ Str::limit($brand->description, 20) }} <span><a href="/bOrg/{{$brand->id}}" class="link"> View Profile</a></span></p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>No matching businesses.</p>
                            @endif


                        </div>
                    </div>
                </div>
			</div>	
			
			@if(request()->isMethod('post'))
				<!--Search Results: Discussions-->
				<div class="row" id="discussion">
					<div class="col-lg-12 col-xlg-12 col-md-12">  
						<div class="card">
							<div class="card-block p-t-10 p-l-10">
								<h4>Discussions</h4>
								<hr> 
								<div class="profiletimeline simpleFont">
									<!--The list of discussions start form here--> 
									@if ( count($allDis) > 0)     <!--If there are discussions to view, then dispaly them-->
										@foreach ($allDis as $dis)
											<div class="sl-item p-t-10" style="border-bottom: 1px solid #cecece">
												<div class="sl-left"> <img src="storage/images/users/{{ $dis->user->image }}" alt="user" class="img-circle"> </div>
												<div class="sl-right">
													<div class="card-search">
														<a href="/dis/#dis{{$dis->id}}" class="name link">{{ $dis->user->name }}</a> 
														<span class="sl-date">{{ (new Carbon\Carbon($dis->created_at))->diffForHumans() }}</span>

														<a href="/dis/#dis{{$dis->id}}">
															<span class="float-right"><i class="mdi mdi-arrow-right-bold"></i></span>
														</a>

														<p class="m-t-10 postFontSize"> {!! $dis->body !!} </p>
													</div>

													<div class="like-comm m-t-10 m-b-10"> 
														@if( count($dis->dcomments) )
															<a href="/dis/#dis{{$dis->id}}" class="link m-r-10"><i class="mdi mdi-comment-processing-outline"></i> {{ count($dis->dcomments) }} </a> 
														@endif
														@if( count($dis->dusefuls->where('useful',1)) )
															<a href="/dis/#dis{{$dis->id}}" class="link m-r-10"><i class="mdi mdi-comment-check-outline text-success"></i> {{ count($dis->dusefuls->where('useful',1)) }} </a> 
														@endif
														@if( count($dis->dusefuls->where('useful',0)) )
															<a href="/dis/#dis{{$dis->id}}" class="link m-r-10"><i class="mdi  mdi-comment-remove-outline text-danger"></i> {{ count($dis->dusefuls->where('useful',0)) }} </a> 													
														@endif
													</div>
												</div>
											</div>
										@endforeach
										
									@else
										<p>No matching discussions</p>	
									@endif                        
									
								</div>
							</div>
						</div>
					</div>
				</div>
            	<!--Search Results: Recommendations-->
				<div class="row" id="recommendation">
					<div class="col-lg-12 col-xlg-12 col-md-12">  
						<div class="card">
							<div class="card-block p-t-10 p-l-10">
								<h4>Recommendations</h4>
								<hr> 
								<div class="profiletimeline simpleFont">
									<!--The list of recommendations start form here--> 
									@if ( count($allRec) > 0)     <!--If there are recommendations to view, then dispaly them-->
										@foreach ($allRec as $rec)
											<div class="sl-item p-t-10" style="border-bottom: 1px solid #cecece" id="rec{{$rec->id}}">
												<div class="sl-left"> <img src="storage/images/users/{{ $rec->user->image }}" alt="user" class="img-circle"> </div>
												<div class="sl-right">
													<div class="card-search">
														<a href="/rec/#rec{{$rec->id}}" class="name link">{{ $rec->user->name }}</a> 
														<span class="sl-date">{{ (new Carbon\Carbon($rec->created_at))->diffForHumans() }}</span>

														<a href="/rec/#rec{{$rec->id}}">
															<span class="float-right"><i class="mdi mdi-arrow-right-bold"></i></span>
														</a>

														<p class="m-t-10 postFontSize"> {!! $rec->body !!} </p>

													</div>

													<div class="like-comm m-t-10 m-b-10"> 
														@if( count($rec->rcomments) )
															<a href="/rec/#rec{{$rec->id}}" class="link m-r-10"><i class="mdi mdi-comment-processing-outline"></i> {{ count($rec->rcomments) }} </a> 
														@endif
														@if( count($rec->rusefuls->where('useful',1)) )
															<a href="/rec/#rec{{$rec->id}}" class="link m-r-10"><i class="mdi mdi-comment-check-outline text-success"></i> {{ count($rec->rusefuls->where('useful',1)) }} </a> 
														@endif
														@if( count($rec->rusefuls->where('useful',0)) )
															<a href="/rec/#rec{{$rec->id}}" class="link m-r-10"><i class="mdi  mdi-comment-remove-outline text-danger"></i> {{ count($rec->rusefuls->where('useful',0)) }} </a> 													
														@endif
													</div>
												</div>
											</div>
										@endforeach
										
									@else
										<p>No matching recommendations</p>
									@endif                        
									
								</div>
							</div>
						</div>
					</div>
				</div>	
			@endif

		</div>
    </div>                
@endsection
            
            

