@extends('layouts.page')

@section('content')
	<div class="container bo-profile">

		<!-- Business Organization Details -->
		<div class="row bo-info">
			<div class="col-md-4 bo-pic">
				<img src="img/01.png" alt="logo" />
			</div>
			<div class="col-md-8 bo-details">
				<h2>Burger King</h2>
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
						
						@if(count($allRev)>0)
							<ul class="homelist">

								@foreach($allRev as $rev)
									<li> 
										<div class="post">
											<div class="post-header" >
												<a class="profile-pic-link" href="/"><img class="profile-pic" src="img/{{ $rev->userDp }}" alt="" /></a> 
												<h4><a class="post-title">{{ $rev->userName }}</a></h4>
												<p class="post-description">{{ $rev->created_at }}</p>
											</div>
											<div class="post-body">
												<p class="post-content" >{{ $rev->rBody }}</p>
												<p><a class="more" href="/reviews/{{ $rev->rId }}">Read more</a> </p>
											</div>
										</div>
									</li>
								@endforeach
							
							</ul>

						@else
							<p>No reviews yet.</p>				
						@endif

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection