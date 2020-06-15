@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top:50px;">
            <div class="col-12 col-md-8 card-custom">
                <ul class="list-unstyled">
                   
{{-- @foreach ($organize as $organize) --}}
                    <h3>{{$organize->name}}</h3>
                    <li><strong>Address: </strong>{{$organize->address}}</li>
                    <li><strong>Website link: </strong><a href="{{$organize->website}}">{{$organize->website}}</a></li>
                    <li><strong>Email Address: </strong>{{$organize->email}}</li>
                    <li><strong>Contact Number: </strong>{{$organize->phone}}</li>
              
                </ul>
                
            </div>
            <div class="col-md-3 card-custom">
            <a href="/{{$organize->id}}/user_register" class="btn btn-dark my-4 mx-2">Add User</a>

              <a class="btn btn-dark my-4 mx-2" href="/organizes/{{$organize->id}}/edit">Edit </a>
              {!!Form::open(['action' => ['OrganizesController@destroy', $organize->id],'method' => 'POST'])!!}
              {{Form::hidden('_method', 'DELETE')}}
              <button class="btn btn-danger mx-2" value="Delete">Delete</button>
            {!! Form::close() !!}

            </div>
          </div>
            <div class="row justify-content-center">
              <div class="col-10 col-md-8">
<h3 class="my-2">Users linked to the Organization</h3>
              
<table id="example" class="display" style="width:100%">

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
                   
                  </tr>
    @endforeach

                </tbody>
              </table>
    {{-- {{$organize->id}} --}}
    

  </div>
</div>
       
    </div>
        
@endsection