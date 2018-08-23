<!-- Modal -->
<div class="modal fade" id="tagCreate" tabindex="-1" role="dialog" aria-labelledby="tagCreate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Add Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'admin.tags.store', 'data-parsley-validate' => '']) !!}
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <div class="form-group">
                            {{ Form::label('name', 'Name:') }}
                            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{ Form::submit('Create Tag', array('class' => 'btn btn-success')) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
