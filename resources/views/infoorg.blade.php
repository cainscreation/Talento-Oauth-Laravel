@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <ul class="list-unstyled">
                   
{{-- @foreach ($organize as $organize) --}}
                    <h3>{{$organize->name}}</h3>
                    <li>{{$organize->address}}</li>
                    <li>{{$organize->website}}</li>
                    <li>{{$organize->email}}</li>
                    <li>{{$organize->phone}}</li>
                    

                    <li><a class="btn btn-dark" href="/organizes/{{$organize->id}}/edit">Edit </a></li>
                    <li class="">

                        {!!Form::open(['action' => ['OrganizesController@destroy', $organize->id],'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::bsSubmit('Delete'),['class'=>'btn btn-dark']}}
                      {!! Form::close() !!}
                    </li><li> <a href="/{{$organize->id}}/user_register" class="btn btn-dark">Add User</a>
                    </li>

                </ul>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    {{-- <th scope="col">Delete</th> --}}

                  </tr>
                </thead>

                <tbody>
                  @foreach ($organize->user()->get() as $organize) 

                  <tr>
                    <th scope="row">{{$organize->id}}</th>
                    <td>{{$organize->name}}</td>
                    <td>{{$organize->email}}</td>
                    <td>{{$organize->created_at}}</td>
                    {{-- <td><li class="">
                      {!!Form::open(['action' => ['RegistersController@delete', $organize->id],'method' => 'POST'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::bsSubmit('Delete'),['class'=>'btn btn-dark']}}
                    {!! Form::close() !!}
                  </li></td> --}}
                  </tr>
    @endforeach

                </tbody>
              </table>
    {{-- {{$organize->id}} --}}
    


        </div>
    </div>
        
@endsection