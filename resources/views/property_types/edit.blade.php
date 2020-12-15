@extends('layouts.app')
@section('title', 'Edit Property Type')
@section('content')
    <section class="content-header">
        <h1>
           Edit Property Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($propertyType, ['route' => ['propertyTypes.update', $propertyType->id], 'method' => 'patch']) !!}

                        @include('property_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection