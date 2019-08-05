@extends('layouts.signin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-body">
                    
                    <h3>Enter your Business Information</h3>
                    <br>
                    <br>
                    {!!Form::open(['action' => 'Auth\BrandRegisterController@storeBrand', 'method' => 'POST', 'class' => 'form-horizontal form-material', 'enctype' => 'multipart/form-data'])!!}
                        
                        <div class="form-group">
                            {{ Form::label('name', 'Name', [ 'class' => 'col-md-12' ]) }}
                            <div class="col-md-12">
                                {{ Form::text('name', '', [ 'class' => 'form-control form-control-line' ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('website', 'Website', [ 'class' => 'col-md-12']) }}
                            <div class="col-md-12">
                                {{ Form::text('website', '', [ 'class' => 'form-control form-control-line' ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('contact', 'Contact', [ 'class' => 'col-md-12']) }}
                            <div class="col-md-12">
                                {{ Form::text('contact', '', [ 'class' => 'form-control form-control-line' ]) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('type', 'Business Type', [ 'class' => 'col-md-12']) }}
                            <div class="col-md-12">
                                {{ Form::select('type', array('1'=>'Clothing Brand', '3'=>'Fast Food Chain', '4'=>'Bakery', '5'=>'Chinese Restaurant', '6'=>'Ice cream Shop', '8'=>'Steak Place', '9'=>'Continental Restaurant', '10'=> 'General Restaurant'),1, ['style'=>'width: 100%; height: 40px; border-radius: 10px 10px 10px 10px;']) }}  
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('description', 'Description', [ 'class' => 'col-md-12']) }}
                            <div class="col-md-12">
                                {{ Form::textarea('description', '', [ 'class' => 'form-control form-control-line' ]) }}
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="col-sm-12">
                                {{ Form::submit('Submit', [ 'class' => 'btn btn-success']) }}
                            </div>
                        </div>
                    {!!Form::close()!!}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
