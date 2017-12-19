@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bag Items
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bagItems, ['route' => ['bagItems.update', $bagItems->id], 'method' => 'patch']) !!}

                        @include('bag_items.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection