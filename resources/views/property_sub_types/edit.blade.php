@extends('layouts.app')
@section('title', 'Edit Property Sub Type')
@section('content')
    <section class="content-header">
        <h1>
           Edit Property Sub Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($propertySubType, ['route' => ['propertySubTypes.update', $propertySubType->id], 'method' => 'patch']) !!}

                        @include('property_sub_types.edit_fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection