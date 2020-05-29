@extends('layouts.app')

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
    <div class="col-12 col-md-4 card-about">
        <h4>Your Courses</h4>
        <h2><a class="btn btn-dark"href="/organizes/create">Click here to add</a></h2>
        <ul class="list-group">
            @if (count($organizes)>0)
@foreach ($organizes as $organize)
    
<li class="list-group-item">{{$organize->name}}</li>
        <li class="list-group-item"><a href="organizes/{{$organize->id}}" class="btn btn-dark">More Detail</a></li>
@endforeach                

            @endif

          </ul>
    </div>


</div>
</div>
@endsection
