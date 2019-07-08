@extends('layouts.page')

@section('content')
<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-xlg-3 col-md-5">
        <!-- Column -->
        <div class="card">
            <div class="card-block">
                <center class="m-t-30"> <img src="assets/images/users/{{ $user ->image }}" class="img-circle" width="150" />
                <h4 class="card-title m-t-10">{{ $user ->name }}</h4>
                    <div class="row text-center justify-content-md-center">
                        <!--<div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">254</font></a></div> -->
                    </div>
                </center>
            </div>

        </div>
        <!-- active contacts -->
        <div class="card">
            <div class="card-block bg-info">
                <h4 class="text-white card-title">Liked Brands</h4>
            </div>
            <div class="card-block">
                <div class="message-box contact-box">
                    
                    <div class="message-widget contact-widget">
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Khaadi</h5></div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Nishat Linen</h5></div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Threads and Motifs</h5> </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                            <div class="user-img"> <img src="assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                            <div class="mail-contnet">
                                <h5>Wardah</h5></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- announcements (may be)-->
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
                <!--your post tab-->
                <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-block">
                                <div class="profiletimeline">
                                    <!--Actual discussions start form here--> 
				@if ( count($allDis) > 0)     <!--If there are discussions to view, then dispaly them-->
                @foreach ($allDis as $dis)
                    <div class="sl-item">
                        <div class="sl-left"> <img src="assets/images/users/{{ $dis->user->image }}" alt="user" class="img-circle"> </div>
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
                                        <div class="col-lg-12 col-md-12 m-b-20"><img src="assets/images/big/{{ $dis->image }}" alt="Image" class="img-responsive radius"></div>
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
                <!--saved post tab-->
                <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="card-block">
                                <div class="profiletimeline">                                   
                                    
                                    @if ( count($allRec) > 0)     <!--If there are discussions to view, then dispaly them-->
                                    @foreach ($allRec as $rec)
                                        <div class="sl-item">
                                            <div class="sl-left"> <img src="assets/images/users/{{ $rec->user->image }}" alt="user" class="img-circle"> </div>
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
                                                            <div class="col-lg-12 col-md-12 m-b-20"><img src="assets/images/big/{{ $rec->image }}" alt="Image" class="img-responsive radius"></div>
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
                        <form class="form-horizontal form-material">
                            <div class="form-group">
                                <label class="col-md-12">Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="{{ $user ->name }}" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" placeholder="{{ $user ->email }}" class="form-control form-control-line" name="example-email" id="example-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" value="password" class="form-control form-control-line">
                                </div>
                            </div>
                           <!-- <div class="form-group">
                                <label class="col-md-12">Phone No</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                </div>
                            </div>-->
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update Profile</button>
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
