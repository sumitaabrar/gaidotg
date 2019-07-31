<!--User Discussions input (only for logged in users--> 
@if(!Auth::guest())
	<div class="row">
		<div class="col-lg-12 col-xlg-12 col-md-12">              
			<!--User Discussions input--> 
			<div class="card m-b-0 m-t-20">
				<div class="card-block p-t-0 p-b-0">
					<div class="profiletimeline simpleFont">
						<div class="m-t-20 m-b-20">
							<div class="sl-left"> <img src="assets/images/users/{{ Auth::user()->image }}" alt="user" class="img-circle"> </div>
							<div class="sl-right">
								<div class="m-t-20 row">
									<div class="col-sm-12">
										{!! Form::open(['action' => 'DiscussionsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
										<div class="row">    
											<div class="col-md-9">
												{{ Form::text('image', '', ['placeholder' => 'Attatch an Image', 'class' => 'form-control form-control-line'])}}
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
		<div class="card-block p-t-20">
			<div class="profiletimeline simpleFont">
				<!--Actual discussions start form here--> 
				@if ( count($allDis) > 0)     <!--If there are discussions to view, then dispaly them-->
					@foreach ($allDis as $dis)
						<div class="sl-item p-b-20 p-t-10" style="border-bottom: 1px solid #d6dee2" >
							<div class="sl-left"> <img src="assets/images/users/{{ $dis->user->image }}" alt="user" class="img-circle"> </div>
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
											<div class="col-lg-12 col-md-12 m-b-10"><img src="assets/images/big/{{ $dis->image }}" alt="Image" class="img-responsive radius"></div>
										</div>	
									@endif
									
								</div>
								<hr>

								<div class="like-comm m-t-10 m-b-10"> 
									<a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-processing-outline"></i> {{ count($dis->dcomments) }} </a> 
									<a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-check-outline text-success"></i> {{ count($dis->dusefuls->where('useful',1)) }} </a> 
									<a href="javascript:void(0)" class="link m-r-10"><i class="mdi  mdi-comment-remove-outline text-danger"></i> {{ count($dis->dusefuls->where('useful',0)) }} </a> 													
								</div>
							</div>
						
						<div class="clearfix">
							<button class="comment-btn float-left" type="button" data-toggle="collapse" data-target="#collapse{{ $dis->id }}" aria-expanded="false" aria-controls="collapse{{ $dis->id }}" >
								<i class="mdi mdi-comment-processing-outline"></i> Comment
							</button>
							<button class="like-btn float-left" type="button" >
								<i class="mdi mdi-comment-check-outline text-success"></i> Usefel
							</button>
							<button class="like-btn float-left" type="button" >
								<i class="mdi  mdi-comment-remove-outline text-danger"></i> Unuseful
							</button>
						</div>
						<div class="collapse" id="collapse{{ $dis->id }}">
							<div class="card card-body comment-section">
								
								<!--User Discussion-Comments input (only for logged in users--> 
								@if(!Auth::guest())

									<div class="comment-widgets p-t-10">
										<div class="comment-pic"> <img src="assets/images/users/{{ Auth::user()->image }}" alt="user" class="img-circle"> </div>
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
										<div class="comment-widgets">
											<div class="comment-pic"> <img src="assets/images/users/{{ $comment->user->image }}" alt="user" class="img-circle"> </div>
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
            
            

