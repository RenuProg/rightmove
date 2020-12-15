@extends('layouts.app')
@section('title', 'View Query')
@section('content')
    <section class="content-header">
        <h1>
           View Send Query
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('send_queries.show_fields')
                    <a href="{{ route('sendQueries.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
