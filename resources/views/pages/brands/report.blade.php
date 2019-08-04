@extends('layouts.b-page')

@section('content') 
    <!-- Row -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Monthly Report</h3>
            <h6 class="breadcrumb">July, 2019</h6>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href="{{ route('brand.report.gen') }}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Generate Report</a>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Charts</h4>
                    <div id="chart1" class="gmaps"></div>
                </div>
            </div>
        </div>
    </div>              
@endsection
           