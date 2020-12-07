<!-- Property Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property_type', 'Property Type:') !!}
    {!! Form::text('property_type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('propertyTypes.index') }}" class="btn btn-default">Cancel</a>
</div>
