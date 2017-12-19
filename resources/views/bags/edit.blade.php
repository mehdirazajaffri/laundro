@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bag
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bag, ['route' => ['bags.update', $bag->id], 'method' => 'patch']) !!}

                        @include('bags.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection