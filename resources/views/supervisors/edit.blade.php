@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Supervisor
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($supervisor, ['route' => ['supervisors.update', $supervisor->id], 'method' => 'patch']) !!}

                        @include('supervisors.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection