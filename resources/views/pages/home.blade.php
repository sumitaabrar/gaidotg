@extends('layouts.page')

@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-xlg-3 col-md-5">
        <!-- Column -->
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> <img src="storage/images/users/{{ $user->image }}" class="img-circle" width="150" />
                <h4 class="card-title m-t-10">{{ $user ->name }}</h4>
                    <div class="row text-center justify-content-md-center">
                        <!--<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">254</font></a></div>-->
                    </div>
                </center>
            </div>

        </div>
        <!-- Suggested brands -->
        <div class="card">
            <div class="card-block bg-info">
                <h4 class="text-white card-title">Suggested Brands</h4>
            </div>
            <div class="card-block">
                <div class="message-box contact-box">
                    <div class="message-widget contact-widget">

                        @if(count($allSug) > 0)
                            <!--Show the suggestions-->
                            @foreach($allSug as $s)
                                <a href="/bOrg/{{$s->brand->id}}">
                                    <div class="user-img"> 
                                        <img src="storage/images/users/brands/{{ $s->brand->logo }}" alt="brand" class="img-circle">
                                        
                                    </div>
                                    <div class="mail-contnet">
                                        <h5>{{ $s->brand->name }}</h5>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p>No Brands suggested by you</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Discussion</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Recommendation</a> </li> 
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!--User's Discussions tab-->
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-block">
                        <div class="profiletimeline">
                            
                            @if ( count($allDis) > 0)     <!--If there are discussions to view, then dispaly them-->
                                @foreach ($allDis as $dis)
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="storage/images/users/{{ $dis->user->image }}" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="#" class="link">{{ $dis->user->name }}</a> 
                                                <span class="sl-date">{{ $dis->created_at }}</span>

                                                @if ($dis->is_open == false)
                                                    <span class="floatRight"><i class="mdi mdi-lock-outline"></i></span>
                                                @endif

                                                <p class="m-t-10 postFontSize"> {!! $dis->body !!} </p>

                                                @if ($dis->image != NULL)
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 m-b-20"><img src="storage/images/posts/{{ $dis->image }}" alt="Image" class="img-responsive radius"></div>
                                                    </div>	
                                                @endif
                                                
                                            </div>
                                            <div class="like-comm m-t-10 m-b-10"> 
                                                @if( count($dis->dcomments) )
                                                    <a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-processing-outline"></i> {{ count($dis->dcomments) }} </a> 
                                                @endif
                                                @if( count($dis->dusefuls->where('useful',1)) )
                                                    <a href="javascript:void(0)" class="link m-r-10"><i class="mdi mdi-comment-check-outline text-success"></i> {{ count($dis->dusefuls->where('useful',1)) }} </a> 
                                                @endif
                                                @if( count($dis->dusefuls->where('useful',0)) )
                                                    <a href="javascript:void(0)" class="link m-r-10"><i class="mdi  mdi-comment-remove-outline text-danger"></i> {{ count($dis->dusefuls->where('useful',0)) }} </a> 													
                                                @endif
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
                <!--User's Recommendations tab-->
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="card-block">
                        <div class="profiletimeline">                                   
                                
                            @if ( count($allRec) > 0)     <!--If there are discussions to view, then dispaly them-->
                                @foreach ($allRec as $rec)
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="storage/images/users/{{ $rec->user->image }}" alt="user" class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div>
                                                <a href="#" class="link">{{ $rec->user->name }}</a> 
                                                <span class="sl-date">{{ $rec->created_at }}</span>
            
                                                @if ($rec->is_open == false)
                                                    <span class="floatRight"><i class="mdi mdi-lock-outline"></i></span>
                                                @endif
            
                                                <p class="m-t-10 postFontSize"> {!! $rec->body !!} </p>
            
                                                @if ($rec->image != NULL)
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 m-b-20"><img src="storage/images/posts/{{ $rec->image }}" alt="Image" class="img-responsive radius"></div>
                                                    </div>	
                                                @endif
            
                                            </div>
                                            
                                            <div class="like-comm m-t-20"> 
                                                <a href="javascript:void(0)" class="link m-r-10">2 comment</a> 
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
                
                <!--settings tab-->
                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-block">
                        {!!Form::open(['action' => ['HomeController@update',$user->id], 'method' => 'POST', 'class' => 'form-horizontal form-material', 'enctype' => 'multipart/form-data'])!!}
                            {{Form::hidden('_method', 'PUT')}}

                            <div class="form-group">
                                {{ Form::label('name', 'Name', [ 'class' => 'col-md-12' ]) }}
                                <div class="col-md-12">
                                    {{ Form::text('name', $user->name, [ 'class' => 'form-control form-control-line' ]) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'Email', [ 'class' => 'col-md-12']) }}
                                <div class="col-md-12">
                                    {{ Form::email('email', $user->email, [ 'class' => 'form-control form-control-line' ]) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'New Password', [ 'class' => 'col-md-12']) }}                                
                                <div class = 'col-md-12'>
                                    {{ Form::password('password',[ 'class' => 'form-control form-control-line']) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('image', 'New Profile Picture', [ 'class' => 'col-md-12']) }}                                
                                <div class = 'col-md-12'>
                                    {{ Form::file('image') }}
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
@endsection 
