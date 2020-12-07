<div class="table-responsive">
    <table class="table" id="bedrooms-table">
        <thead>
            <tr>
                <th>Bedroom</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bedrooms as $bedroom)
            <tr>
                <td>{{ $bedroom->bedroom }}</td>
                <td>
                    {!! Form::open(['route' => ['bedrooms.destroy', $bedroom->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bedrooms.show', [$bedroom->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bedrooms.edit', [$bedroom->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
