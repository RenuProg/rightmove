@extends('layouts.app')
@section('title', 'Add Property Sub Type')
@section('content')
    <section class="content-header">
        <h1>
           Add Property Sub Type
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'propertySubTypes.store']) !!}

                        @include('property_sub_types.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
