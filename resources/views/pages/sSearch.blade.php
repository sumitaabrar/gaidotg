@extends('layouts.page')

@section('content') 

    <div class="row">
        <!--Column - Right Panel-->
        <div class="col-lg-3 col-xlg-3 col-md-4">
			<!-- Card - Announcements -->
			<div class="card">
				<div class="card-block bgg-info">
					<h4 class="text-white card-title">Additional Filters</h4>
				</div>
				<div class="card-block">
					<div class="message-box contact-box">
						<h2 class="add-ct-btn"></h2>
						<div class="message-widget contact-widget">
							<p> Search businesses according to your preference </p>
							<br>
							<div class="list-group list-group-flush">
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 1)}}
                                        <button type="sumbit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Clothing Brands</h5></button>
                                    {!!Form::close()!!}
    
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 3)}}								
                                        <button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Fast Food</h5></button>
                                    {!!Form::close()!!}
    
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 5)}}								
                                        <button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Chinese</h5></button>
                                    {!!Form::close()!!}
    
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 4)}}								
                                        <button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Bakery</h5></button>
                                    {!!Form::close()!!}
    
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 6)}}								
                                        <button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Ice cream Shop</h5></button>
                                    {!!Form::close()!!}
    
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 8)}}								
                                        <button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Steak</h5></button>
                                    {!!Form::close()!!}
    
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 9)}}								
                                        <button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>Continental</h5></button>
                                    {!!Form::close()!!}
    
                                    {!!Form::open(['action' => 'PagesController@searchBrand', 'method' => 'POST' ])!!} {{Form::hidden('id', 10)}}								
                                        <button type="submit" class="list-group-item list-group-item-action"><h5><i class="mdi mdi-play"></i>General</h5></button>
                                    {!!Form::close()!!}
    
                                </div>

						</div>
					</div>
				</div>
			</div>
		</div>

        <!--Column - Left Panel-->
        <div class="col-lg-9 col-xlg-9 col-md-8">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-block card-search p-l-20">
                            <h3>Search</h3>
                            <hr>
                            <div class="card-block" style="width:90%;">
                                {!!Form::open(['action' => 'PagesController@search', 'method' => 'POST'])!!}
                                    <div class="single-widget input-group mb-3 " id="mc_embed_signup">
                                        {{Form::text('key', '' , [ 'class' => 'form-control', 'placeholder' => 'Search', 'onfocus' => 'this.placeholder = \'\'', 'onblur' => 'this.placeholder = \'Search\'', 'aria-label' => 'Search', 'aria-describedby' => 'searchBtn' , 'style'=>'border: 1px solid #b3b3b3;']) }}
                                        <div class="input-group-append">
                                        {{ Form::button('<i class="ti-search" aria-hidden="true"></i>', [ 'class' => 'click-btn btn btn-default', 'type' => 'submit', 'id' => 'searchBtn' ]) }}
                                        </div>
                                    </div>
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!--Search Results: Brands-->
            <div class="row" id = "bOrg">
                <div class="col-lg-12 col-xlg-12 col-md-12">  
                    <div class="card">
                        <div class="card-block p-t-10 ">
                            @if(request()->isMethod('post'))
                                <h4>Search Results</h4>
                                <hr>
                                <p>Showing the businesses that fall in the category "{{$key}}".</p>
                                <p class="p-l-30 card-search"><a href="#bOrg"> We found {{ count($brands) }} such Business Organizations</a></p>
                                <hr>
                            @else
                                <h4>Business Organizations</h4>
                                <hr> 
                            @endif
                            
                            @if(count($brands) > 0)
                                @foreach($brands as $brand)
                                    <div class="m-t-10 col-md-4">
                                        <div class="col-md-5 col-xs-12 m-t-10">
                                            <a href="/bOrg/{{$brand->id}}"><img src="storage/images/users/brands/{{$brand->logo}}" alt="brand" class="img-responsive radius"></a>
                                            
                                        </div>
                                        <div class="col-md-7 col-xs-12">
                                            <h5 style = "color:#04686b;"> {{ $brand->name }} </h5>
                                            <h6> {{ $brand->type->name }} </h6>
                                            <p> {{ Str::limit($brand->description, 20) }} <span><a href="/bOrg/{{$brand->id}}" class="link"> View Profile</a></span></p>
                                        </div>
                                    </div>
                                @endforeach
                            
                            @endif
                        </div>
                    </div>
                </div>
            </div>	
            	
		</div>
    </div>                
@endsection
            
            

