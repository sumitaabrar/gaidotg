@extends('layouts.b-page')

@section('content') 
    <!-- Row -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            @if($a != NULL)
                <h3 class="text-themecolor m-b-0 m-t-0">Report for {{ $a->created_at->month }}, {{$a->created_at->year}}</h3>
            @else
                <h3 class="text-themecolor m-b-0 m-t-0">Monthly Report</h3>
            @endif
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
                    @if($a != NULL)
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4">
                                <h3 class="m-b-0 font-light">{{ $a->ranking }}<small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                            <div class="col-lg-4 col-md-4">
                                <h3 class="m-b-0 font-light">{{ $a->rating }}<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                            <div class="col-lg-4 col-md-4">
                                <h3 class="m-b-0 font-light">{{$a->suggested_by}}</h3><small>Suggest</small></div>
                        </div>
                    @else
                        <div class="row text-center">
                            <div class="col-lg-4 col-md-4">
                                <h3 class="m-b-0 font-light">0<small> <i class="mdi mdi-trophy"></i></small></h3><small>Rank</small></div>
                            <div class="col-lg-4 col-md-4">
                                <h3 class="m-b-0 font-light">0<small> <i class="mdi mdi-star"></i></small></h3><small>Ratings</small></div>
                            <div class="col-lg-4 col-md-4">
                                <h3 class="m-b-0 font-light">0</h3><small>Suggest</small></div>
                        </div>
                    @endif

                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card p-t-10 p-l-20">
                                <div class="card-block">
                                    <h5>What your consumers rated you</h5>
                                    @if($a != NULL)
                                        <div class="p-l-30"><div class="card-block">
                                            <img src="../storage/images/rate_graph/{{$a->rating_img}}" alt="graph" style="width:400px" />
                                        </div></div>
                                    @endif
                            
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card p-t-10 p-l-20">
                                <div class="card-block">
                                    <h5>This month's review Analysis</h5>
                                    @if($a != NULL)
                                        <div class="p-l-30"><div class="card-block">
                                            <img src="../storage/images/senti_graph/{{$a->score_img}}" alt="graph" style="width:400px" />
                                        </div></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>              
@endsection