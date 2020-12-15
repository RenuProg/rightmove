@extends('layouts.app')
@section('title', 'Add Balcony')
@section('content')
    <section class="content-header">
        <h1>
            Add Balcony
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'balconies.store']) !!}

                        @include('balconies.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
