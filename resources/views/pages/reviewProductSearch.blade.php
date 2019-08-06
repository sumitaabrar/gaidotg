@extends('layouts.page')

@section('content') 

    <div class="row">
        <!--Column - Right Panel-->
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <div class="card-block card-search p-l-20">
                            <h3>Search Products to Review</h3>
                            <hr>

                            <p>Your input is what lets us maintain these public profiles. Share your experience to help us make it better</p>
                            <div class="card-block" style="width:95%;">
                                {!!Form::open(['action' => 'PagesController@reviewSearch', 'method' => 'POST'])!!}
                                    {{Form::hidden('id', 1)}}
                                    <div class="single-widget input-group mb-3 " id="mc_embed_signup">
                                        {{Form::text('key', '' , [ 'class' => 'form-control', 'placeholder' => 'Search products', 'onfocus' => 'this.placeholder = \'\'', 'onblur' => 'this.placeholder = \'Search products\'', 'aria-label' => 'Search', 'aria-describedby' => 'searchBtn' , 'style'=>'border: 1px solid #b3b3b3;']) }}
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
            @if(request()->isMethod('post'))
                <div class="row" id = "bOrg">
                    <div class="col-lg-12 col-xlg-12 col-md-12">  
                        <div class="card">
                            <div class="card-block p-t-10 p-l-10">
                                <h4>Results</h4>
                                <hr> 
                                <p>Showing the brands that match the search "{{$key}}". We found {{ count($brands) }} such Brands</a></p>
                                @if(count($brands) > 0)
                                    @foreach($brands as $brand)
                                        <div class="m-t-10 col-md-4 p-l-0 p-r-0">
                                            <div class="col-md-5 col-xs-12 m-t-10">
                                                <a href="/bOrg/{{$brand->id}}"><img src="storage/images/users/brands/{{$brand->logo}}" alt="brand" class="img-responsive radius"></a>
                                                
                                            </div>
                                            <div class="col-md-7 col-xs-12 p-l-0 p-r-0 ">
                                                <h5 style = "color:#04686b;"> {{ $brand->name }} </h5>
                                                <h6> {{ $brand->type->name }} </h6>
                                                <p> {{ Str::limit($brand->description, 20) }} <span><a href="/bOrg/{{$brand->id}}" class="link"> View Profile</a></span></p>
                                            </div>
                                        </div>
                                    @endforeach
                                
                                @endif

                                @if(!Auth::guest())
                                    <div class="m-t-10 col-md-4 p-l-0 p-r-0">
                                        <div class="col-md-5 col-xs-12 m-t-10">
                                            <a href="#"><img src="assets/images/add.png" alt="add" class="img-responsive radius"></a>
                                            
                                        </div>
                                        <div class="col-md-7 col-xs-12 p-l-0 p-r-0 ">
                                            <h5> Couldn't Find what you were looking for? </h5>
                                            <h6> We would be happy to increase our database </h6>
                                            <p><span><a href="#addBrandModal" class="link" data-toggle = "modal"> Add New</a></span></p>
                                        </div>
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endif
		</div>

    </div>                
@endsection
            
            

