@if(count($categoryBlogs))
    @if(count($blogs))
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                @foreach($blogs as $blog)
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <img src="{{ asset('images/admin/'.$blog->image) }}" alt="" width="60px">
                        </td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td>{{ substr(strip_tags($blog->content), 0, 50)}} {{ strlen(strip_tags($blog->content)) > 50 ? "..." : "" }} </td>
                        <td> {{ Request::is('loans') ? "active" : "" }}
                            <span @if($blog->status==1) : class="badge badge-success" @else class="badge badge-danger" @endif>{{ getStatus($blog->status) }}</span>
                        </td>
                        <td>
                            <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-secondary btn-sm">
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-info btn-sm">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal{{$blog->id}}">
                                <i class="fas fa-times-circle"></i>
                            </a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Deleting {{$blog->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6>Are you sure you want to delete {{$blog->title}}?</h6>
                                    <img src="{{ asset('images/admin/'.$blog->image) }}" class="mx-auto d-block img-responsive">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                    {!! Form::open(['route' => ['admin.blogs.destroy', $blog->id], 'method' => 'DELETE']) !!}

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
        <div class="text-center">
            {!! $blogs->links(); !!}
        </div>
    @else
        <div class="error-body text-center">
            <h2>There are no Blogs to show</h2>
            <h3 class="text-uppercase">Please add a new blog</h3>
            <a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" href="{{ route('admin.blogs.create') }}">
                Add Blog
            </a>
        </div>
    @endif
@else
    <div class="error-body text-center">
        <h2>There are no Blogs to show</h2>
        <div class="waves-effect waves-light m-b-40">
            You must add categories first
        </div>
    </div>
@endif