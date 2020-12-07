@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Send Query
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sendQuery, ['route' => ['sendQueries.update', $sendQuery->id], 'method' => 'patch']) !!}

                        @include('send_queries.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection