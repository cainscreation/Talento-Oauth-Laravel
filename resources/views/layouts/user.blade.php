@extends('layouts.header')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-10 col-md-8">
      <table id="example" class="display" style="width:100%">

    <thead >
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        @can('user_delete')
          
        <th scope="col">Delete</th>
        @endcan

        

      </tr>
    </thead>
    <tbody>
@if (count($organizes)>0)
@foreach ($organizes as $organize)
    <tr>
        <th scope="row">{{$organize->id}}</th>
        <td>{{$organize->name}}</td>
        <td>{{$organize->email}}</td>
        @can('user_delete')
         <td>
            {!!Form::open(['action' => ['RegistersController@destroy', $organize->id],'method' => 'POST'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            <button class="btn btn-danger" value="Delete">Delete</button>
            {{-- {{Form::bsSubmit('Delete'),['class'=>'btn btn-dark']}} --}}
            {!! Form::close() !!}
        </td>
        @endcan


    </tr>
@endforeach                
@endif
  </tbody>
</table>
</div>
</div></div>


@endsection
