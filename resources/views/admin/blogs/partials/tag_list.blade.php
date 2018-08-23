@if(count($tags))
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            @foreach($tags as $tag)
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tag{{$tag->id}}">
                            <i class="fas fa-times-circle"></i>
                        </a>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="tag{{$tag->id}}" tabindex="-1" role="dialog" aria-labelledby="tag" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Deleting {{$tag->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Are you sure you want to delete {{$tag->name}}?</h6>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                {!! Form::open(['route' => ['admin.tags.destroy', $tag->id], 'method' => 'DELETE']) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="error-body text-center">
        <h2>There are no Tags to show</h2>
        <h3 class="text-uppercase">Please add a new tag</h3>
        <a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" data-toggle="modal" data-target="#tagCreate">
            <i class="fa fa-plus"></i>
            Add Tag
        </a>
    </div>
@endif