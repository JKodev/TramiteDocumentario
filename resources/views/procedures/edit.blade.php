@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Procedure
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($procedure, ['route' => ['procedures.update', $procedure->id], 'method' => 'patch']) !!}

                        @include('procedures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection