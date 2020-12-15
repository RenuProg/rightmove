@extends('layouts.app')
@section('title', 'Edit Floor')
@section('content')
    <section class="content-header">
        <h1>
           Edit Floor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($floor, ['route' => ['floors.update', $floor->id], 'method' => 'patch']) !!}

                        @include('floors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection