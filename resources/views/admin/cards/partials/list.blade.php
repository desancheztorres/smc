@if(count($categoryCards))
    @if(count($cards))
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
                @foreach($cards as $card)
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><img src="{{ asset('images/admin/'.$card->logo) }}" alt="" width="60px"></td>
                        <td>{{ $card->name }}</td>
                        <td>{{ $card->category->name }}</td>
                        <td>
                            <a href="{{ route('admin.cards.edit', $card->id) }}" class="btn btn-info btn-sm">
                                <i class="far fa-edit"></i>
                                Edit
                            </a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{$card->id}}">
                                <i class="fas fa-times-circle"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$card->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Deleting {{$card->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6>Are you sure you want to delete {{$card->name}}?</h6>
                                    <img src="{{ asset('images/admin/'.$card->logo) }}" class="mx-auto d-block img-responsive"></img>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                    {!! Form::open(['route' => ['admin.cards.destroy', $card->id], 'method' => 'DELETE']) !!}

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
            <h2>There are no Cards to show</h2>
            <h3 class="text-uppercase">Please add a new Card car</h3>
            <a href="{{ route('admin.cards.create') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Add Card</a>
        </div>
        <hr>
    @endif
@else
    <div class="error-body text-center">
        <h2>There are no Cards to show</h2>
        <div class="waves-effect waves-light m-b-40">
            You must add categories first
        </div>
    </div>
@endif