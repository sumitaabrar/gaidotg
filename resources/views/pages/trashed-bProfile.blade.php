@extends('layouts.page')

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
						
							<form class="rating">
								<label>
									<input type="radio" name="stars" value="1" />
									<span class="icon">★</span>
								</label>
								<label>
									<input type="radio" name="stars" value="2" />
									<span class="icon">★</span>
									<span class="icon">★</span>
								</label>
								<label>
									<input type="radio" name="stars" value="3" />
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>   
								</label>
								<label>
									<input type="radio" name="stars" value="4" />
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
								</label>
								<label>
									<input type="radio" name="stars" value="5" />
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
									<span class="icon">★</span>
								</label>
								</form>
								  </div>


					</div>
				</div>
			</div>
		</div>
	</div>

@endsection