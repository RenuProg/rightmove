<div class="table-responsive">
    <table class="table" id="floors-table">
        <thead>
            <tr>
                <th>Floor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($floors as $floor)
            <tr>
                <td>{{ $floor->floor }}</td>
                <td>
                    {!! Form::open(['route' => ['floors.destroy', $floor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('floors.show', [$floor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('floors.edit', [$floor->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
