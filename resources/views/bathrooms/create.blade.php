@extends('layouts.app')
@section('title', 'Add Bathroom')
@section('content')
    <section class="content-header">
        <h1>
            Add Bathroom
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'bathrooms.store']) !!}

                        @include('bathrooms.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
