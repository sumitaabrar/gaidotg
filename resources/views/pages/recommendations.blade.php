<!--User Recommendations input (only for logged in users--> 
@if(!Auth::guest())
	<div class="row">
		<div class="col-lg-12 col-xlg-12 col-md-12">                   
			<div class="card m-b-0 m-t-0">
				<div class="card-block p-t-0 p-b-0">
					<div class="profiletimeline simpleFont">
						<div class="m-t-20 m-b-20">
							<div class="sl-left"> <img src="assets/images/users/{{ Auth::user()->image }}" alt="user" class="img-circle"> </div>
							<div class="sl-right">
								<div class="m-t-20 row">
									<div class="col-sm-12">
										{!! Form::open(['action' => 'RecommendationsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
										<div class="row">    
												<div class="col-md-9">
												</div>
												<div class="col-md-3">
													{{ Form::submit( 'Post', [ 'class' => 'btn btn-success btn-broad' ]) }}
												</div>
											</div>
											<div class="row">    
												<div class="col-md-12 m-t-5">
													{{ Form::textarea('recommendation', '',  [ 'id' => 'rec', 'placeholder' => 'Initiate a Discussion', 'class' => 'revTextArea' ]) }}
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
		<div class="card-block p-t-20">
			<div class="profiletimeline simpleFont">
				<!--Actual discussions start form here--> 
				@if ( count($allRec) > 0)     <!--If there are discussions to view, then dispaly them-->
					@foreach ($allRec as $rec)
						<div class="sl-item">
							<div class="sl-left"> <img src="assets/images/users/{{ $rec->user->image }}" alt="user" class="img-circle"> </div>
							<div class="sl-right">
								<div>
									<a href="#" class="link">{{ $rec->user->name }}</a> 
									<span class="sl-date">{{ $rec->created_at }}</span>
									<p class="m-t-10 postFontSize"> {{ $rec->body }} </p>
								</div>
								<div class="like-comm m-t-20"> 
									<a href="javascript:void(0)" class="link m-r-10">2 comment</a> 
									<a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-check-outline text-success"></i> 5 </a> 
									<a href="javascript:void(0)" class="link m-r-10"><i class="mdi  mdi-comment-remove-outline text-danger"></i> 2 </a> 													
								</div>
							</div>
						</div>
						<hr>
					@endforeach
					
				@else
						<p>No recent Activity.</p>
					
				@endif                        
				
			</div>
		</div>
	</div>
</div>           

            
            

