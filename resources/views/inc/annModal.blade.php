<!-- Modal -->
<div id="annModal" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add an Announcement</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body"> 
                <div class="card-block p-t-0 p-b-0">
                    <div class="simpleFont">
                        <div class="m-b-10">
                            <div class="sl-item">
                                <div class="row">
                                    <div class="col-sm-12">
                                        {!! Form::open(['action' => 'AnnouncementsController@store', 'method' => 'POST', 'class' => 'form-horizontal form-material', 'enctype' => 'multipart/form-data']) !!}
                                        <div class="row">    
                                            <div class="col-md-6">
                                                {{ Form::text('ann_title', '', [ 'placeholder' => 'Title'  ])}}                                                
                                                {{ Form::text('ann_url', '', [ 'placeholder' => 'Link'  ])}}                                                
                                                
                                            </div>
                                            <div class="col-md-3">
                                                {{ Form::file('image')}}
                                            </div>
                                            <div class="col-md-3">
                                                {{ Form::submit( 'Post', [ 'class' => 'btn btn-success btn-broad' ]) }}
                                            </div>
                                        </div>
                                        
                                        <div class="row">    
                                            <div class="col-md-12 m-t-5">
                                                {{ Form::textarea('ann', '',  [ 'id' => 'test', 'placeholder' => 'Enter your Announcement', 'class' => 'revTextArea' ]) }}
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
