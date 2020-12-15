@extends('layouts.app')
@section('title', 'View Property Sub Type')
@section('content')
    <section class="content-header">
        <h1>
           View Property Sub Type
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('property_sub_types.show_fields')
                    <a href="{{ route('propertySubTypes.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
