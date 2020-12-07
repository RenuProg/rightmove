<div class="table-responsive">
    <table class="table" id="sendQueries-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Message</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sendQueries as $sendQuery)
            <tr>
                <td>{{ $sendQuery->first_name }}</td>
            <td>{{ $sendQuery->last_name }}</td>
            <td>{{ $sendQuery->email }}</td>
            <td>{{ $sendQuery->phone_number }}</td>
            <td>{{ $sendQuery->message }}</td>
                <td>
                    {!! Form::open(['route' => ['sendQueries.destroy', $sendQuery->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sendQueries.show', [$sendQuery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sendQueries.edit', [$sendQuery->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
