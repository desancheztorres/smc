@if(count($users))
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>email</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
            @foreach($users as $user)
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td></td>
                </tr>
                <?php $i++; ?>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="error-body text-center">
        <h2>There are no Users to show</h2>
        <h3 class="text-uppercase">Please add a new user</h3>
        <a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" href="#">
            Add User
        </a>
    </div>
@endif