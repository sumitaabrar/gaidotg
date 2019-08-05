@extends('layouts.b-page')

@section('content') 
    <!-- Row BrandProfile -->
    <div class="row">
        <!-- Column - Left Panels-->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <!-- Card - Upper Panel - Brand Info -->
            <div class="card">
                <img class="card-img-top" src="../storage/images/cover/{{ Auth::user()->brand->cover_photo }}" alt="Card image cap">
                <div class="card-block little-profile text-center">
                    <div class="pro-img">
                        <div class="img"><img src="../storage/images/users/brands/{{ Auth::user()->brand->logo }}" alt="user" /></div>
                    </div>
                    <h3 class="m-b-0">{{ Auth::user()->brand->name }}</h3>
                    <p>{{ Auth::user()->brand->type->name }}</p>
                    
                    

                    @if( count($assess) > 0)
                        @foreach ($assess as $a)
                            <div class="row text-center">
                                <div class="col-lg-4 col-md-4">
                                    <h3 class="m-b-0 font-light">{{ $a->ranking }}<small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                                <div class="col-lg-4 col-md-4">
                                    <h3 class="m-b-0 font-light">{{ $a->rating }}<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                                <div class="col-lg-4 col-md-4">
                                    <h3 class="m-b-0 font-light">{{ count(Auth::user()->brand->suggestions) }}</h3><small>Suggest</small></div>
                            </div>    
                        @endforeach
                    @else
                        <div class="row text-center m-t-20">
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">0<small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">0<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                            <div class="col-lg-4 col-md-4 m-t-20">
                                <h3 class="m-b-0 font-light">{{ count(Auth::user()->brand->suggestions) }}</h3><small>Suggest</small></div>
                        </div> 
                    @endif
                    
                </div>
            </div>
            
            @if(!Auth::guest())
                <!-- Card - Lower Panel - Brand Announcements -->
                <div class="card stickyPanel">
                    <div class="card-block bgg-info">
                        <h4 class="text-white card-title">Announcements</h4>
                        <h6 class="card-subtitle text-white m-b-0 op-5">List of all your Announcements</h6>
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
                                            <a href="#">
                                        @endif
                                        
                                        @if( $ann->image != NULL )
                                            <div class="ann-img"> <img src="../storage/images/ann/{{ $ann->image }}"}} alt="user"> </div>
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

        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="row">
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Reviews</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>                        
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">  
                            <!--First Tab: REVIEWS-->  
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="card-block p-t-8">
                                    <div class="profiletimeline simpleFont">

                                        @if ( count($allRev) > 0)     <!--If the brand has reviews to view, then dispaly them-->
                                            @foreach ($allRev as $rev)
                                                <div class="sl-item" id="rev{{$rev->id}}">
                                                    <div class="sl-left"> <img src="../storage/images/users/{{ $rev->user->image }}" alt="user" class="img-circle"> </div>
                                                    <div class="sl-right">
                                                        <div>
                                                            <a href="#" class="name link">{{ $rev->user->name }}</a> 
                                                            <span class="sl-date">{{ $rev->created_at }}</span>

                                                            @if ($rev->rate != NULL)
                                                                <span class="floatRight"><i class="mdi mdi-star text-warning"></i> {{ $rev->rate }} Star</span>
                                                            @endif
                                                            
                                                            <p class="m-t-10 postFontSize"> {!! $rev->body !!} </p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                            
                                        @else
                                            <p>No reviews yet.</p>
                                        @endif                        
                                        
                                    </div>
                                </div>
                            </div>
                            <!--Second Tab: PROFILE-->
                            <div class="tab-pane" id="profile" role="tabpanel">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Name</strong>
                                            <br>
                                            <p class="text-muted">{{ Auth::user()->brand->name }}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Type</strong>
                                            <br>
                                            <p class="text-muted">{{ Auth::user()->brand->type->name}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Website</strong>
                                            <br>
                                            <p class="text-muted">{{ Auth::user()->brand->website}}</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r"> <strong>Contact</strong>
                                            <br>
                                            <p class="text-muted">{{ Auth::user()->brand->contact}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="m-t-30">{{ Auth::user()->brand->description }}</p>
                                    <h4 class="font-medium m-t-30">Branches</h4>
                                    <hr>

                                    @foreach ($allOut as $out)
                                        <h5 class="m-t-30">{{ $out->name }}</h5>
                                        <p>{{ $out->location }}</p>
                                    @endforeach
                                </div>
                            </div>   
                            
                            
                            <!--Third Tab: SETTINGS-->
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="card-block">
                                    {!!Form::open(['action' => ['BrandHomeController@update',Auth::user()->brand_id], 'method' => 'POST', 'class' => 'form-horizontal form-material', 'enctype' => 'multipart/form-data'])!!}
                                        {{Form::hidden('_method', 'PUT')}}

                                        <div class="form-group">
                                            {{ Form::label('name', 'Name', [ 'class' => 'col-md-12' ]) }}
                                            <div class="col-md-12">
                                                {{ Form::text('name', $user->name, [ 'class' => 'form-control form-control-line' ]) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('type', 'Type', [ 'class' => 'col-md-12' ]) }}
                                            <div class="col-md-12">
                                                {{ Form::radio('type', 'Fastfood') }}
                                                {{ Form::radio('type', 'Bakery') }}
                                                {{ Form::radio('type', 'Ice Cream') }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('website', 'Website', [ 'class' => 'col-md-12']) }}
                                            <div class="col-md-12">
                                                {{ Form::text('website', $user->website, [ 'class' => 'form-control form-control-line' ]) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('contact', 'Contact', [ 'class' => 'col-md-12']) }}
                                            <div class="col-md-12">
                                                {{ Form::text('contact', $user->contact, [ 'class' => 'form-control form-control-line' ]) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('description', 'Description', [ 'class' => 'col-md-12']) }}
                                            <div class="col-md-12">
                                                {{ Form::textarea('description', $user->description, [ 'class' => 'form-control form-control-line' ]) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('logo', 'New Logo', [ 'class' => 'col-md-12']) }}                                
                                            <div class = 'col-md-12'>
                                                {{ Form::file('logo') }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('cover', 'New Cover', [ 'class' => 'col-md-12']) }}                                
                                            <div class = 'col-md-12'>
                                                {{ Form::file('cover') }}
                                            </div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                {{ Form::submit('Update Profile', [ 'class' => 'btn btn-success']) }}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>               
@endsection
            
            



