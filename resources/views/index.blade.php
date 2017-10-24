@section('main')

    <h1>All Users</h1>

    <p>{{ link_to_route('users.create', 'Add new user') }}</p>

    @if ($users->count())
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Name</th>
                <th>Province</th>
                <th>Telephone</th>
                <th>Postal Code</th>
                <th>Salary</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->province }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->postalcode }}</td>
                    <td>{{ $user->salary }}</td>
                    <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method'
              => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    @else
        There are no users
    @endif

@stop