<!-- Property Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_type_id', 'Property Type :') !!}
   <!--  {!! Form::number('property_type_id', null, ['class' => 'form-control']) !!} -->
    <select class="form-control" name="property_type_id">
    	<option value="">Select Property Type</option>
    	 @foreach($property_type as $property)
        
         <?php if($property->id == $propertySubType['property_type_id']){
                $selected = "selected = 'selected'";
            }else{
                $selected="";
            } ?>
         
    	<option value="{{$property->id}}" {{$selected}}>{{  $property->property_type}}</option>
    	@endforeach
    </select>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('propertySubTypes.index') }}" class="btn btn-default">Cancel</a>
</div>
