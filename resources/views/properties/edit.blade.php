@extends('layouts.app')
@section('title', 'Edit Property')
@section('content')
    <section class="content-header">
        <h1>
          Edit Property
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($property, ['route' => ['properties.update', $property->id], 'method' => 'patch','enctype' => 'multipart/form-data']) !!}

                        @include('properties.edit_fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection