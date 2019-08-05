@extends('layouts.page')

@section('content') 

    <div class="row">
        <!--Column - Right Panel-->
        <div class="col-lg-9 col-xlg-9 col-md-8">
			<!--User Discussions input (only for logged in users--> 
			@if(!Auth::guest())
				<div class="row">
					<div class="col-lg-12 col-xlg-12 col-md-12">              
						<!--User Discussions input-->
						<div class="card">
							<div class="card-block p-t-0 p-b-0">
								<div class="profiletimeline simpleFont">
									<div class="m-t-20 m-b-10">
										<div class="sl-left"> <img src="storage/images/users/{{ Auth::user()->image }}" alt="user" class="img-circle"> </div>
										<div class="sl-right">
											<div class="m-t-20 row">
												<div class="col-sm-12">
													{!! Form::open(['action' => 'DiscussionsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material', 'enctype' => 'multipart/form-data']) !!}
													<div class="row">    
														<div class="col-md-9">
															{{ Form::file('image')}}
														</div>
														<div class="col-md-3">
															{{ Form::submit( 'Post', [ 'class' => 'btn btn-success btn-broad' ]) }}
														</div>
													</div>
													<div class="row">    
														<div class="col-md-12 m-t-5">
															{{ Form::textarea('discussion', '',  [ 'id' => 'dis', 'placeholder' => 'Initiate a Discussion', 'class' => 'revTextArea' ]) }}
														</div>
													</div>
													{!! Form::close() !!}
												</div>
											</div>
										</div>
									</div>              
								</div>
							</div>
						</div>
					</div>
				</div>
			@endif

			<div class="row">
				<div class="col-lg-12 col-xlg-12 col-md-12">
					<div class="card">                   
						<div class="card-block">
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

													@if ($dis->image != NULL)
														<div class="row">
															<div class="col-lg-12 col-md-12 m-b-10"><img src="storage/images/posts/{{ $dis->image }}" alt="Image" class="img-responsive radius"></div>
														</div>	
													@endif
													
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
										
											<div class="clearfix">
												<!-- Button to open comments section
												<button class="comment-btn float-left" type="button" data-toggle="collapse" data-target="#collapse{{ $dis->id }}" aria-expanded="false" aria-controls="collapse{{ $dis->id }}" >
													<i class="mdi mdi-comment-processing-outline"></i> Comment
												</button> -->

												@if(!Auth::guest())

													<!-- The Useful Button -->
													@if(count($dis->dusefuls->where('user_id', Auth::user()->id )))
														@foreach(($dis->dusefuls->where('user_id', Auth::user()->id )) as $u)
															<!-- Button to unmark an old discussion useful/unuseful -->
															{!! Form::open(['id'=>'usefulFromDown', 'action' => ['DUsefulsController@update', $u->id], 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
															{{ Form::hidden('_method', 'PUT')}}
															{{ Form::hidden('discussion_id', $dis->id ) }}
															{{ Form::hidden('useful', 1 ) }}

															@if($u->useful==1)
																{{ Form::button('<i class="mdi mdi-comment-check-outline text-success"></i> Usefel', [ 'class' => 'like-btn clicked float-left', 'type' => 'submit' ]) }}
															@else
																{{ Form::button('<i class="mdi mdi-comment-check-outline"></i> Usefel', [ 'class' => 'like-btn float-left', 'type' => 'submit' ]) }}
															@endif
															
															{!!Form::close() !!}
														@endforeach
													@else
														<!-- Button to mark a new discussion useful -->
														{!! Form::open(['id'=>'usefulFromUp', 'action' => 'DUsefulsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
														{!! Form::hidden('discussion_id', $dis->id ) !!}
														{!! Form::hidden('useful', 1 ) !!}
														{{ Form::button('<i class="mdi mdi-comment-check-outline"></i> Usefel', [ 'class' => 'like-btn float-left', 'type' => 'submit' ]) }}
														{!!Form::close() !!}
													@endif

													<!-- The Unuseful Button -->
													@if(count($dis->dusefuls->where('user_id', Auth::user()->id )))
														@foreach(($dis->dusefuls->where('user_id', Auth::user()->id )) as $u)
															<!-- Button to unmark an old discussion useful/unuseful -->
															{!! Form::open(['id'=>'unusefulFrom', 'action' => ['DUsefulsController@update', $u->id], 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
															{{ Form::hidden('_method', 'PUT')}}
															{{ Form::hidden('discussion_id', $dis->id ) }}
															{{ Form::hidden('useful', 0 ) }}

															@if($u->useful == 0)
																{{ Form::button('<i class="mdi  mdi-comment-remove-outline text-danger"></i> Unuseful', [ 'class' => 'like-btn clicked float-left', 'type' => 'submit' ]) }}
															@else
																{{ Form::button('<i class="mdi  mdi-comment-remove-outline"></i> Unuseful', [ 'class' => 'like-btn float-left', 'type' => 'submit' ]) }}
															@endif
															
															{!!Form::close() !!}
														@endforeach
													@else
														<!-- Button to mark a new discussion unuseful -->
														{!! Form::open(['id'=>'unusefulFrom', 'action' => 'DUsefulsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
														{!! Form::hidden('discussion_id', $dis->id ) !!}
														{!! Form::hidden('useful', 0 ) !!}
														{{ Form::button('<i class="mdi  mdi-comment-remove-outline"></i> Unuseful', [ 'class' => 'like-btn float-left', 'type' => 'submit' ]) }}
														{!!Form::close() !!}
													@endif
												@else
													<!-- Dummy Buttons of useful/unuseful to request signin -->
													<button class="like-btn float-left" type="button" data-toggle="modal" data-target="#signinModal" >
														<i class="mdi mdi-comment-check-outline text-success"></i> Usefel
													</button>
													<button class="like-btn float-left" type="button" data-toggle="modal" data-target="#signinModal" >
														<i class="mdi  mdi-comment-remove-outline text-danger"></i> Unuseful
													</button>
						
														

												@endif

											</div>
											<div class="c" id="collapse{{ $dis->id }}">
												<div class="card card-body comment-section">
													
													<!--User Discussion-Comments input (only for logged in users--> 
													@if(!Auth::guest())

														<div class="comment-widgets p-t-10 " id="commInput">
															<div class="comment-pic"> <img src="storage/images/users/{{ Auth::user()->image }}" alt="user" class="img-circle"> </div>
															<div class="comment-row">
																<div class="comment-input input-group mb-3">
																	{!! Form::open(['id'=>'commentFrom', 'action' => 'DCommentsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
																	{!! Form::hidden('discussion_id', $dis->id ) !!}
																	{{ Form::textarea('comment', '',  [ 'id' => 'comment', 'class' => 'comment-textArea', 'placeholder' => 'Your Comment', 'rows' => '1', 'cols' => '20']) }}
																	<div class="input-group-append">
																		{{ Form::button( '<i class="mdi mdi-send"></i>', [ 'class' => 'click-btn btn btn-default', 'id' => 'commentBtn', 'type' => 'submit']) }}
																	</div>

																	{!! Form::close() !!}
																</div> 
															</div>
														</div>

													@endif

													@if(count($dis->dcomments))
														@foreach ($dis->dcomments as $comment)
															<div class="comment-widgets" id="dcomm{{$comment->id}}">
																<div class="comment-pic"> <img src="storage/images/users/{{ $comment->user->image }}" alt="user" class="img-circle"> </div>
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
										@else
											<a href="#" target="_blank">
										@endif
										
										@if( $ann->image != NULL )
											<div class="ann-img"> <img src="storage/images/ann/{{ $ann->image }}"}} alt="user"> </div>
										@endif	

											<div class="ann-contnet">
												<h5>{{ $ann->title }}</h5> 
												<p class="ann-desc">{{ $ann->body }}</p>
											</div>
										
											
										</a>
									
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
            
            

