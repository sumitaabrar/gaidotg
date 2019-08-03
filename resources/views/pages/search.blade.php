@extends('layouts.page')

@section('content') 

    <div class="row">
        <!--Column - Right Panel-->
        <div class="col-lg-4 col-xlg-4 col-md-5">
			<!-- Card - Announcements -->
			<div class="card stickyPanel">
				<div class="card-block bgg-info">
					<h4 class="text-white card-title">Additional Filters</h4>
				</div>
				<div class="card-block">
					<div class="message-box contact-box">
						<h2 class="add-ct-btn"></h2>
						<div class="message-widget contact-widget">
							<a href="#" target="_blank">
							    <div class="ann-img"> <img src="storage/images/ann/img1.jpg"}} alt="user"> </div>
								<div class="ann-contnet">
									<h5>Hi</h5> 
									<p class="ann-desc">Welcome</p>
								</div>			
                            </a>
                            <a href="#" target="_blank">
							    <div class="ann-img"> <img src="storage/images/ann/img1.jpg"}} alt="user"> </div>
								<div class="ann-contnet">
									<h5>Hi</h5> 
									<p class="ann-desc">Welcome</p>
								</div>			
                            </a>
                            <a href="#" target="_blank">
							    <div class="ann-img"> <img src="storage/images/ann/img1.jpg"}} alt="user"> </div>
								<div class="ann-contnet">
									<h5>Hi</h5> 
									<p class="ann-desc">Welcome</p>
								</div>			
							</a>	
						</div>
					</div>
				</div>
			</div>
		</div>

        <!--Column - Left Panel-->
        <div class="col-lg-8 col-xlg-8 col-md-7">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-block card-search p-l-20">
                            <h3>Search Results</h3>
                            <p>Showing results for the query "{{ $key }}" consisting of...</p>
                            <p><a href="#bOrg"> {{ count($brands) }} Business Organizations</a></p>
                            <p><a href="#discussion"> {{ count($allDis) }} Discussions</a></p>
                            <p><a href="#recommandation"> {{ count($allRec) }} Recommendations</a></p>
                        </div>
                    </div>
                </div>
            </div>
            

            <!--Search Results: Brands-->
            <div class="row" id = "bOrg">
                <div class="col-lg-12 col-xlg-12 col-md-12">  
                    <div class="card">
                        <div class="card-block p-t-10 p-l-10">
                            <h4>Business Organizations</h4>
                            <hr> 
                            @if(count($brands) > 0)
                                @foreach($brands as $brand)
                                    <div class="m-t-20 col-md-6">
                                        <div class="col-md-6 col-xs-12">
                                            <img src="storage/images/users/brands/{{$brand->logo}}" alt="brand" class="img-responsive radius">
                                            <a href="/bOrg/{{$brand->id}}" class="btn btn-success m-t-10 m-l-40"> View</a>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <h5> {{ $brand->name }} </h5>
                                            <h6> {{ $brand->type->name }} </h6>
                                            <p> {{ $brand->description }} </p>
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
										<div class="sl-item p-t-10" style="border-bottom: 1px solid #cecece" id="dis{{$dis->id}}">
											<div class="sl-left"> <img src="storage/images/users/{{ $dis->user->image }}" alt="user" class="img-circle"> </div>
											<div class="sl-right">
												<div >
													<a href="#" class="name link">{{ $dis->user->name }}</a> 
													<span class="sl-date">{{ (new Carbon\Carbon($dis->created_at))->diffForHumans() }}</span>

													@if ($dis->is_open == false)
														<span class="float-right"><i class="mdi mdi-lock-outline"></i></span>
													@endif

													<p class="m-t-10 postFontSize"> {!! $dis->body !!} </p>
												</div>

												<div class="like-comm m-t-10 m-b-10"> 
													@if( count($dis->dcomments) )
														<a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-processing-outline"></i> {{ count($dis->dcomments) }} </a> 
													@endif
													@if( count($dis->dusefuls->where('useful',1)) )
														<a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-check-outline text-success"></i> {{ count($dis->dusefuls->where('useful',1)) }} </a> 
													@endif
													@if( count($dis->dusefuls->where('useful',0)) )
														<a href="javascript:void(0)" class="link m-r-10"><i class="mdi  mdi-comment-remove-outline text-danger"></i> {{ count($dis->dusefuls->where('useful',0)) }} </a> 													
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
												<div>
													<a href="#" class="name link">{{ $rec->user->name }}</a> 
													<span class="sl-date">{{ (new Carbon\Carbon($rec->created_at))->diffForHumans() }}</span>

													@if ($rec->is_open == false)
														<span class="floatRight"><i class="mdi mdi-lock-outline"></i></span>
													@endif

													<p class="m-t-10 postFontSize"> {!! $rec->body !!} </p>

												</div>

												<div class="like-comm m-t-10 m-b-10"> 
													@if( count($rec->rcomments) )
														<a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-processing-outline"></i> {{ count($rec->rcomments) }} </a> 
													@endif
													@if( count($rec->rusefuls->where('useful',1)) )
														<a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-check-outline text-success"></i> {{ count($rec->rusefuls->where('useful',1)) }} </a> 
													@endif
													@if( count($rec->rusefuls->where('useful',0)) )
														<a href="javascript:void(0)" class="link m-r-10"><i class="mdi  mdi-comment-remove-outline text-danger"></i> {{ count($rec->rusefuls->where('useful',0)) }} </a> 													
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
		</div>
    </div>                
@endsection
            
            

