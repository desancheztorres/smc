@if(count($categoryLoans))
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
            @foreach($categoryLoans as $category)
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">
                            <i class="far fa-edit"></i>
                            Edit
                        </a>
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#category{{$category->id}}">
                            <i class="fas fa-times-circle"></i>
                            Delete
                        </a>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="category{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="category{{$category->id}}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Deleting {{$category->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Are you sure you want to delete {{$category->name}}?</h6>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                {!! Form::open(['route' => ['admin.loans_category.destroy', $category->id], 'method' => 'DELETE']) !!}

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
        <h2>There are no Categories to show</h2>
        <h3 class="text-uppercase">Please add a new category</h3>
        <a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" data-toggle="modal" data-target="#categoryCreate">
            <i class="fa fa-plus"></i>
            Add Category
        </a>
    </div>
@endif