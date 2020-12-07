<div class="table-responsive">
    <table class="table" id="propertySubTypes-table">
        <thead>
            <tr>
                <th>Property Type</th>
        <th>Property Sub Type</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propertySubTypes as $propertySubType)
            <tr>
                <td>{{ $propertySubType->property_type }}</td>
            <td>{{ $propertySubType->type }}</td>
                <td>
                    {!! Form::open(['route' => ['propertySubTypes.destroy', $propertySubType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('propertySubTypes.show', [$propertySubType->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('propertySubTypes.edit', [$propertySubType->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
