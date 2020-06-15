@extends('layouts.header')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            </div>
            {{-- <div class="text-center">
                <h3>Welcome back <br><strong>{{ Auth::user()->name }}</strong></h3> 
            </div> --}}
        </div>
    </div>
<div class="flex d-flex justify-content-center">
    <div class="col-12 col-md-8 card-about">
        <h4>Your Organizations</h4>
        @can('All')
        <h2><a class="btn btn-dark"href="/organizes/create">Click here to add</a></h2>
        @endcan
        <ul class="list-group">
            <table id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
            @if (count($organizes)>0)
@foreach ($organizes as $organize)
    <tr>
        <th scope="row">{{$organize->id}}</th>
        <td>{{$organize->name}}</td>
        <td>{{$organize->website}}</td>
        <td>{{$organize->phone}}</td>
        <td><a href="organizes/{{$organize->id}}">More Details</a></td>
    </tr>
@endforeach                
            @endif
                </tbody>
            </table>
          </ul>
    </div>


</div>
</div>
@endsection
