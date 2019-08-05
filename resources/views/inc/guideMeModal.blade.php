<!-- Modal -->
<div id="guidemeModal" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
    
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add your Preferences</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                {!! Form::open(['action' => 'DisplayRecController@display', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
                <div class="row">    
                    <div class="col-md-12 m-t-5">
                        {{ Form::select('type', array('1'=>'Clothing Brand', '3'=>'Fast Food', '4'=>'Bakery', '5'=>'Chinese', '6'=>'Ice cream Shop', '8'=>'Steak', '9'=>'Continental', '10'=> 'General'),1, ['style'=>'width: 100%; height: 50px; border-radius: 10px 10px 10px 10px;']) }}
                    </div>
                </div>
                <br>
                <div class="row">    
                    <div class="col-md-9">
                        
                    </div>
                    <div class="col-md-3">
                        {{ Form::submit( 'Go', [ 'class' => 'btn btn-success btn-broad' ]) }}
                    </div>
                </div>
                {!! Form::close() !!}
        </div>
        </div>

    </div>
</div>
