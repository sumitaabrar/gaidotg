<!-- Modal -->
<div id="testModal" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Share your Gaido Expereince with us</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body"> 
                <p>We would love to get your feedback about your expereince with Gaido. It is a way for us to improve our service and give the best we can.</p>  
                <div class="card-block p-t-0 p-b-0">
                    <div class="simpleFont">
                        <div class="m-b-10">
                            <div class="sl-item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        {!! Form::open(['action' => 'PagesController@testStore', 'method' => 'POST', 'class' => 'form-horizontal form-material']) !!}
                                        <div class="row">    
                                            <div class="col-md-12 m-t-5">
                                                {{ Form::textarea('test', '',  [ 'id' => 'test', 'placeholder' => 'Your Testimonial', 'class' => 'revTextArea' ]) }}
                                            </div>
                                        </div>
                                        <div class="row">    
                                            <div class="col-md-9">
                                                
                                            </div>
                                            <div class="col-md-3">
                                                {{ Form::submit( 'Post', [ 'class' => 'btn btn-success btn-broad' ]) }}
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
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
