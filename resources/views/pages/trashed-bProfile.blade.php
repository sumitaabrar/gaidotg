@extends('layouts.trashed-page')

@section('content')
	<div class="container bo-profile">

		<!-- Business Organization Details -->
		<div class="row bo-info">
			<div class="col-md-4 bo-pic">
				<img src="img/01.png" alt="logo" />
			</div>
			<div class="col-md-8 bo-details">
				<h2>Burger King </h2>
				<p>We are tthe best in Town</p>
			</div>
		</div>

		<!-- Consumer Reviews abou the BO -->
		<div class="row bo-review">
			<div id ="content" class="col-md-12">
				<br/> 
				<h3>Reviews</h3>
				<div class='featurebox_center'> 
					<div class="box">

				



								<div class="card-block p-t-0">
										<div class="profiletimeline simpleFont">
	
											@if ( count($allRev) > 0)     <!--If the brand has reviews to view, then dispaly them-->
												@foreach ($allRev as $rev)
													<div class="sl-item">
														<div class="sl-left"> <img src="img/{{ $rev->userDp }}" alt="user" class="img-circle"> </div>
														<div class="sl-right">
															<div>
																<a href="#" class="link">{{ $rev->userName }}</a> 
																<span class="sl-date">{{ $rev->created_at }}</span>
	
																@if ($rev->rRate != NULL)
																	<span class="floatRight"><i class="mdi mdi-star text-warning"></i> {{ $rev->rRate }} Star</span>
																@endif
																
																<p class="m-t-10 postFontSize" >
																	{!! $rev->rBody !!}
																</p>
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


					</div>
				</div>
			</div>
		</div>
	</div>

@endsection