@extends('layouts.b-page')

@section('content') 

    <div class="row">
        <!--Column - Right Panel-->
        <div class="col-lg-9 col-xlg-9 col-md-8">
			<div class="row">
				<div class="col-lg-12 col-xlg-12 col-md-12">
					<div class="card">                 
						<div class="card-block ">
							<div class="profiletimeline simpleFont">
								<!--The list of recommendations start form here--> 
								@if ( count($allRec) > 0)     <!--If there are recommendations to view, then dispaly them-->
									@foreach ($allRec as $rec)
										<div class="sl-item p-t-10" style="border-bottom: 1px solid #cecece" id="rec{{$rec->id}}">
											<div class="sl-left"> <img src="../storage/images/users/{{ $rec->user->image }}" alt="user" class="img-circle"> </div>
											<div class="sl-right">
												<div>
													<a href="#" class="name link">{{ $rec->user->name }}</a> 
													<span class="sl-date">{{ (new Carbon\Carbon($rec->created_at))->diffForHumans() }}</span>

													@if ($rec->is_open == false)
														<span class="floatRight"><i class="mdi mdi-lock-outline"></i></span>
													@endif

													<p class="m-t-10 postFontSize"> {!! $rec->body !!} </p>

													@if ($rec->image != NULL)
														<div class="row">
															<div class="col-lg-12 col-md-12 m-b-20"><img src="../storage/images/posts/{{ $rec->image }}" alt="Image" class="img-responsive radius"></div>
														</div>	
													@endif

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
											
											<div class="c" id="collapse{{ $rec->id }}">
												<div class="card card-body comment-section">
													@if(count($rec->rcomments))
													<hr>
														@foreach ($rec->rcomments as $comment)
															<div class="comment-widgets" id="rcomm{{$comment->id}}">
																<div class="comment-pic"> <img src="../storage/images/users/{{ $comment->user->image }}" alt="user" class="img-circle"> </div>
																<div class="comment-row"> 
																	<a href="#" class="comment-name">{{ $comment->user->name }}</a> 
																	<span class="sl-date">{{ $comment->created_at }}</span>
																	<p class="comment-body">{{ $comment->body }}</p> 
																</div>
															</div>
														@endforeach
													@endif
												</div>
											</div>
										</div>
									@endforeach
									
								@else
										<p>No recent Activity.</p>
									
								@endif                        
								
							</div>
						</div>
					</div>
				</div>           
			</div>
		</div>
				
		<!-- Column - Left Panel-->
        <div class="col-lg-3 col-xlg-3 col-md-4">
			@if(!Auth::guest())
				<!-- Card - Announcements -->
				<div class="card stickyPanel">
					<div class="card-block bgg-info">
						<h4 class="text-white card-title">Announcements</h4>
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
    </div>                
@endsection
            
            

