@extends('layouts.app')
@section('title', 'View Bathroom')
@section('content')
    <section class="content-header">
        <h1>
           View Bathroom
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('bathrooms.show_fields')
                    <a href="{{ route('bathrooms.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
