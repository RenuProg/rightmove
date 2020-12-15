@extends('layouts.app')
@section('title', 'Edit User')
@section('content')
    <section class="content-header">
        <h1>
           Edit User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}

                        @include('users.edit_fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection