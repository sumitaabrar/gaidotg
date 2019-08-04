@extends('layouts.b-page')

@section('content') 
    <!-- Row -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Google map</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Google map</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href="https://themewagon.com/themes/material-bootstrap-4-free-admin-template/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Download Now</a>
        </div>
    </div>
   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Simple Basic Map</h4>
                    <div id="gmaps-simple" class="gmaps"></div>
                </div>
            </div>
        </div>
    </div>              
@endsection
           