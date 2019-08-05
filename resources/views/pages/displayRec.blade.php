@extends('layouts.page')

@section('content') 

       <!--Search Results: Brands-->
	   <div class="row" id = "preferences">
			<div class="col-lg-12 col-xlg-12 col-md-12">  
				<div class="card">
					
					<div class="card-block p-t-10 p-l-10">
						<h4>Recommended Business Organizations For You.</h4>
						
						<hr> 

						@foreach($brands as $brand)
							@if($brand != NULL)
								<div class="m-t-20 col-md-4">
									<div class="col-md-6 col-xs-12">
										<img src="../storage/images/users/brands/{{ $brand->logo }}" alt="brand" class="img-responsive radius">
										<a href="/bOrg/{{ $brand->id }}" class="btn btn-success m-t-10 m-l-40"> View</a>
									</div>
									<div class="col-md-6 col-xs-12">
										<h5> {{$brand->name}} </h5>
										<p> {{$brand->description}} </p>
									</div>
								</div>
							@else
								<p>Nothing to recommend for you</p>
							@endif
						@endforeach
								
					</div>	
				</div>
			</div>
		</div>  
@endsection
            
            

