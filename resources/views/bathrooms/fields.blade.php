<!-- Bathroom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bathroom', 'Bathroom:') !!}
    {!! Form::text('bathroom', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bathrooms.index') }}" class="btn btn-default">Cancel</a>
</div>
