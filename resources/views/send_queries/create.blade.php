@extends('layouts.app')
@section('title', 'Add Query')
@section('content')
    <section class="content-header">
        <h1>
            Send Query
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'sendQueries.store']) !!}

                        @include('send_queries.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
