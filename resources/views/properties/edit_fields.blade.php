<!-- Property Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_type_id', 'Property Type Id:') !!}
     <select class="form-control" id="MainPropertyType" name="property_type_id" style="border:1px solid #e7e7e7">
                              
        <option value="">Select Property Type</option>
         @foreach($property_type as $propertys)
         
        <option value="{{$propertys->id}}" >{{  $propertys->property_type}}</option>
        @endforeach
    
                            </select>
</div>

<!-- Property Sub Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_sub_type_id', 'Property Sub Type Id:') !!}
      <select class="form-control" name="property_sub_type_id" id="PropertyType" >
                                    <!-- <option value="">Property Sub Type</option> -->
                                    
                                </select>
</div>

<!-- Property Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_title', 'Property Title:') !!}
    {!! Form::text('property_title', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Total Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_area', 'Total Area:') !!}
    {!! Form::text('total_area', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Builtup Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('builtup_area', 'Builtup Area:') !!}
    {!! Form::text('builtup_area', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Carpet Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carpet_area', 'Carpet Area:') !!}
    {!! Form::text('carpet_area', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Localtion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bathroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bathroom_id', 'Bathroom:') !!}
    <select name="bathroom_id" class="form-control">
                                    <option value="">Bathroom</option>
                                     @foreach($bedroom as $bedrooms)
        <option value="{{$bedrooms->id}}" >{{  $bedrooms->bedroom}}</option>
        @endforeach
                                </select>`
</div>

<!-- Bedroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bedroom_id', 'Bedroom :') !!}
    <select name="bedroom_id" class="form-control">
                                        <option value="">Bedroom</option>
                                         @foreach($bathroom as $bathrooms)
        <option value="{{$bathrooms->id}}" >{{  $bathrooms->bathroom}}</option>
        @endforeach
                                    </select>
</div>

<!-- Balcony Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balcony_id', 'Balcony :') !!}
   <select name="balcony_id" class="form-control">
                                        <option value="">Select balcony</option>
         @foreach($balcony as $balconies)
        <option value="{{$balconies->id}}" >{{  $balconies->balcony}}</option>
        @endforeach
                                    </select>
</div>

<!-- Floor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('floor_id', 'Available Floor:') !!}
   <select name="floor_id" class="form-control">
                                    <option value="">Available Floor</option>
                                    @foreach($floor as $floors)
        <option value="{{$floors->id}}" >{{  $floors->floor}}</option>
        @endforeach
                                </select>
</div>

<!-- About Property Field -->
<div class="form-group col-sm-6">
    {!! Form::label('about_property', 'About Property:') !!}
    {!! Form::textarea('about_property', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
     <input type="file" name="image[]" multiple class="form-control1">

</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('properties.index') }}" class="btn btn-default">Cancel</a>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function()
{
$("#MainPropertyType").change(function()
{
var property_type_id=$(this).val();
//alert(property_type_id);


 
           
 $.ajax({
    type: "POST",
    url: "{{ route('get_sub_type') }}",
    data: { id: property_type_id, _token: '{{csrf_token()}}' },
    success: function (data) {
         $('#PropertyType').html(data);
    },
    error: function (data, textStatus, errorThrown) {
        console.log(data);

    },
});
 
});
});
</script>
