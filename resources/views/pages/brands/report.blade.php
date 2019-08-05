@extends('layouts.b-page')

@section('content') 
    <!-- Row -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Monthly Report</h3>
            <h6 class="breadcrumb">July, 2019</h6>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href="{{ route('brand.report.gen') }}" class="btn waves-effect waves-light btn-warning pull-right hidden-sm-down">Generate Report</a>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Charts</h4>
                    <hr>
                    <div class="row text-center">
                        <div class="col-lg-4 col-md-4">
                            <h3 class="m-b-0 font-light">4<small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                        <div class="col-lg-4 col-md-4">
                            <h3 class="m-b-0 font-light">3.4<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                        <div class="col-lg-4 col-md-4">
                            <h3 class="m-b-0 font-light">22</h3><small>Suggest</small></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card p-t-10 p-l-20">
                                <div class="card-block">
                                    <h5>What your consumers rated you</h5>
                                    <div class="p-l-30"><div class="card-block">
                                        <img src="../storage/images/rate_graph/img1.png" alt="graph" style="width:400px" />
                                    </div></div>
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card p-t-10 p-l-20">
                                <div class="card-block">
                                    <h5>This month's review Analysis</h5>
                                    <div class="p-l-30"><div class="card-block">
                                        <img src="../storage/images/senti_graph/img1.png" alt="graph" style="width:400px" />
                                    </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>              
@endsection
           