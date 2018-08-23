@if(count($categoryLoans))
    @if(count($loans))
        <h4 class="card-title">List</h4>
        {{--<h6 class="card-subtitle">Add class <code>.table</code></h6>--}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                @foreach($loans as $loan)
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><img src="{{ asset('images/admin/'.$loan->logo) }}" alt="" width="60px"></td>
                        <td>{{ $loan->name }}</td>
                        <td>{{ $loan->category->name }}</td>
                        <td>
                            <a href="{{ route('admin.loans.edit', $loan->id) }}" class="btn btn-info btn-sm">
                                <i class="far fa-edit"></i>
                                Edit
                            </a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{$loan->id}}">
                                <i class="fas fa-times-circle"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$loan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Deleting {{$loan->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6>Are you sure you want to delete {{$loan->name}}?</h6>
                                    <img src="{{ asset('images/admin/'.$loan->logo) }}" class="mx-auto d-block img-responsive">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                    {!! Form::open(['route' => ['admin.loans.destroy', $loan->id], 'method' => 'DELETE']) !!}

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
        <hr>
    @else
        <div class="error-body text-center">
            <h2>There are no Loans to show</h2>
            <h3 class="text-uppercase">Please add a new Loan car</h3>
            <a href="{{ route('admin.loans.create') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Add Loan</a>
        </div>
        <hr>
    @endif
@else
    <div class="error-body text-center">
        <h2>There are no Loans to show</h2>
        <div class="waves-effect waves-light m-b-40">
            You must add categories first
        </div>
    </div>
@endif