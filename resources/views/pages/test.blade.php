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

								<div class="card-block p-t-0">
										<div class="profiletimeline simpleFont">
	
											@if ( count($allT) > 0)     <!--If the brand has reviews to view, then dispaly them-->
												@foreach ($allT as $t)
													<p>*************************************</p>
													<p>Type ID: {{$t->id}}</p>
													<p>Type Name: {{$t->name}}</p>
													<p>SubCat Name: {{$t->subcategory->name}}</p>
													<p>Cat Name: {{$t->subcategory->category->name}}</p>
													<p>*************************************</p>
												@endforeach
												
											@else
													<p>Error in query</p>
												
											@endif                        
											
										</div>
									</div>


					</div>
				</div>
			</div>
		</div>
	</div>

@endsection