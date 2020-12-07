<!-- Property Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_type_id', 'Property Type Id:') !!}
    {!! Form::number('property_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Property Sub Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_sub_type_id', 'Property Sub Type Id:') !!}
    {!! Form::number('property_sub_type_id', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('location', 'Localtion:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Bathroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bathroom_id', 'Bathroom Id:') !!}
    {!! Form::number('bathroom_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bedroom Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bedroom_id', 'Bedroom Id:') !!}
    {!! Form::number('bedroom_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Balcony Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balcony_id', 'Balcony Id:') !!}
    {!! Form::number('balcony_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Floor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('floor_id', 'Floor Id:') !!}
    {!! Form::number('floor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- About Property Field -->
<div class="form-group col-sm-6">
    {!! Form::label('about_property', 'About Property:') !!}
    {!! Form::text('about_property', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
  <input type="file" name="image[]" class="form-control">
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', 0) !!}
        {!! Form::checkbox('is_active', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('properties.index') }}" class="btn btn-default">Cancel</a>
</div>
