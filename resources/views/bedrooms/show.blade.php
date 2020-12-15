@extends('layouts.app')
@section('title', 'View Bedroom')
@section('content')
    <section class="content-header">
        <h1>
           View Bedroom
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('bedrooms.show_fields')
                    <a href="{{ route('bedrooms.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
