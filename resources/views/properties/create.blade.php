@extends('layouts.app')
@section('title', 'Add Property')
@section('content')
    <section class="content-header">
        <h1>
           Add Property
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'properties.store']) !!}

                        @include('properties.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
