<div class="table-responsive">
    <table class="table" id="properties-table">
        <thead>
            <tr>
                <th>Property Type</th>
        <th>Property Sub Type </th>
        <th>Property Title</th>
        <th>Total Area</th>        
        <th>Carpet Area</th>
        <th>Bathroom </th>
        <th>Bedroom</th>
        <th>Balcony</th>
        <th>Floor </th>
        <th>Approved/Disapproved</th>
        
        
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($properties as $property)
            <tr>
                <td>{{ $property->property_type }}</td>
            <td>{{ $property->property_sub_type_id }}</td>
            <td>{{ $property->property_title }}</td>
            <td>{{ $property->total_area }}</td>
            
            <td>{{ $property->carpet_area }}</td>
            
            
            <td>{{ $property->bathroom }}</td>
            <td>{{ $property->bedroom }}</td>
            <td>{{ $property->balcony }}</td>
            <td>{{ $property->floor }}</td>
            <td> <input data-id="{{$property->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Approved" data-off="Disapproved" {{ $property->is_active ? 'checked' : '' }}></td>
            
            
            
                <td>
                    {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                       <!--  <a href="{{ route('properties.show', [$property->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                        <a href="{{ route('properties.edit', [$property->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script>

  $(function() {
    $('.toggle-class').change(function() {
        var is_active = $(this).prop('checked') == 1 ? 1 : 0; 
        var id = $(this).data('id'); 
        //alert(id);
         
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{route('changeUserStatus')}}",
            data: {is_active: is_active, id: id, _token: '{{csrf_token()}}'},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
