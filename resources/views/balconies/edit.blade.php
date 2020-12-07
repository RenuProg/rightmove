@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Balcony
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($balcony, ['route' => ['balconies.update', $balcony->id], 'method' => 'patch']) !!}

                        @include('balconies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection