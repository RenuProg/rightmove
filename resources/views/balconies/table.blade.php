<div class="table-responsive">
    <table class="table" id="balconies-table">
        <thead>
            <tr>
                <th>Balcony</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($balconies as $balcony)
            <tr>
                <td>{{ $balcony->balcony }}</td>
                <td>
                    {!! Form::open(['route' => ['balconies.destroy', $balcony->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('balconies.show', [$balcony->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('balconies.edit', [$balcony->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
