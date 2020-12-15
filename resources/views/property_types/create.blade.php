@extends('layouts.app')
@section('title', 'Add Property Type')
@section('content')
    <section class="content-header">
        <h1>
           Add Property Type
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'propertyTypes.store']) !!}

                        @include('property_types.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
