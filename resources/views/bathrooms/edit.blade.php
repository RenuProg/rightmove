@extends('layouts.app')
@section('title', 'Edit Bathroom')
@section('content')
    <section class="content-header">
        <h1>
           Edit Bathroom
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bathroom, ['route' => ['bathrooms.update', $bathroom->id], 'method' => 'patch']) !!}

                        @include('bathrooms.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection