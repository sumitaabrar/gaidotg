<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{  URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{  URL::asset('assets/plugins/chartist-js/dist/chartist.min.css')  }}" rel="stylesheet">
    <link href="{{  URL::asset('assets/plugins/chartist-js/dist/chartist-init.css')  }}" rel="stylesheet">
    <link href="{{  URL::asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')  }}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{  URL::asset('assets/plugins/c3-master/c3.min.css')  }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{  URL::asset('css/style2.css')  }}" rel="stylesheet">


    <link rel="stylesheet" href="{{  URL::asset('css/font-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{  URL::asset('css/linearicons.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">




    <!-- You can change the theme colors from here -->
    <link href="{{  URL::asset('css/colors/blue.css')  }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    
    <div id="main-wrapper">
        
        @include('inc.header')          <!-- Topbar header -->
             
        @include('inc.side-nav')        <!-- Topbar header -->   
        <br><br><br> 

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- Row  -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="assets/images/background/profile-bg-01.jpg" alt="Card image cap">
                            <div class="card-block little-profile text-center">
                                <div class="pro-img"><img src="assets/images/users/01.png" alt="user" /></div>
                                <h3 class="m-b-0">Burger King</h3>
                                <p>Fast Food Chain</p>
                                <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Review</a>
                                <div class="row text-center m-t-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">4 <small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">4<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light">605</h3><small>Suggests</small></div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-block bg-info">
                                <h4 class="text-white card-title">My Contacts</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6>
                            </div>
                            <div class="card-block">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">info@wrappixel.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">pamela1987@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span></div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">kat@gmail.com</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Activity</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">  
                                <!--first tab    REVIEWS-->  
                                <div class="tab-pane active" id="home" role="tabpanel">


                                    <!-- Branch Menu Filter-->
                                    <div class="sl-item">
                                        <h5>Gulshan Branch</h5>
                                    </div>
                                    <hr>
                                    <!--Branch Menu Filter-->



                                    <div class="card-block">
                                        <div class="profiletimeline">

                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/3.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/3.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/3.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="assets/images/users/3.jpg" alt="user" class="img-circle"> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab   PROFILE-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Name</strong>
                                                <br>
                                                <p class="text-muted">Burger King</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Service</strong>
                                                <br>
                                                <p class="text-muted">Fast Food Chain</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Contact</strong>
                                                <br>
                                                <p class="text-muted">111-246-323</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">bk@burger.com</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Branches</h4>
                                        <hr>
                                        <a href="hydri.html">
                                            <h5 class="m-t-30">DHA Phase 2 <span class="pull-right">4 <small> <i class="mdi mdi-star"></i></small></span></h5>
                                            <p>C-123, Block H, Hydri, Karachi.</p>
                                        </a>
                                        <a href="hydri.html">
                                            <h5 class="m-t-30">DHA Phase 2 <span class="pull-right">4 <small> <i class="mdi mdi-star"></i></small></span></h5>
                                            <p>C-123, Block H, Hydri, Karachi.</p>
                                        </a>
                                        <a href="hydri.html">
                                            <h5 class="m-t-30">DHA Phase 2 <span class="pull-right">4 <small> <i class="mdi mdi-star"></i></small></span></h5>
                                            <p>C-123, Block H, Hydri, Karachi.</p>
                                        </a>
                                        

                                    </div>
                                </div>

                                <!--third tab   SETTINGS-->
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Log In ID</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Account Number</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select City</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>Karachi</option>
                                                        <option>Lahore</option>
                                                        <option>Islamabad</option>
                                                        <option>Faisalabad</option>
                                                        <option>Quetta</option>
                                                    </select>
                                                </div>
                                            </div>
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{  URL::asset('assets/plugins/jquery/jquery.min.js')  }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{  URL::asset('assets/plugins/bootstrap/js/tether.min.js')  }}"></script>
    <script src="{{  URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')  }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{  URL::asset('js/jquery.slimscroll.js')  }}"></script>
    <!--Wave Effects -->
    <script src="{{  URL::asset('js/waves.js')  }}"></script>
    <!--Menu sidebar -->
    <script src="{{  URL::asset('js/sidebarmenu.js')  }}"></script>
    <!--stickey kit -->
    <script src="{{  URL::asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')  }}"></script>
    <!--Custom JavaScript -->
    <script src="{{  URL::asset('js/custom.min.js')  }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{{  URL::asset('assets/plugins/chartist-js/dist/chartist.min.js')  }}"></script>
    <script src="{{  URL::asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')  }}"></script>
    <!--c3 JavaScript -->
    <script src="{{  URL::asset('assets/plugins/d3/d3.min.js')  }}"></script>
    <script src="{{  URL::asset('assets/plugins/c3-master/c3.min.js')  }}"></script>
    <!-- Chart JS -->
    <script src="{{  URL::asset('js/dashboard1.js')  }}"></script>
</body>

</html>
