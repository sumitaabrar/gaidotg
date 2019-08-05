<!-- Modal -->
<div id="addBrandModal" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add a new Business</h4><br>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">  
                <div class="card-block p-t-0 p-b-0">
                    <div class="simpleFont">
                        <div class="m-b-10">
                            <div class="sl-item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        {!! Form::open(['action' => 'PagesController@addBrand', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
                                        <div class="form-group">
                                            {{ Form::label('name', 'Name', [ 'class' => 'col-md-12' ]) }}
                                            <div class="col-md-12">
                                                {{ Form::text('name', '', [ 'class' => 'form-control form-control-line' ]) }}
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            {{ Form::label('type', 'Business Type', [ 'class' => 'col-md-12']) }}
                                            <div class="col-md-12">
                                                {{ Form::select('type', array('1'=>'Clothing Brand', '3'=>'Fast Food Chain', '4'=>'Bakery', '5'=>'Chinese Restaurant', '6'=>'Ice cream Shop', '8'=>'Steak Place', '9'=>'Continental Restaurant', '10'=> 'General Restaurant'),1, ['style'=>'width: 100%; height: 40px; border-radius: 10px 10px 10px 10px;']) }}  
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
                </div>
            </div>
        </div>
    </div>
</div>
