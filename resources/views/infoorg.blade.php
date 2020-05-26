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
                    </li>
            {{-- @endforeach --}}

                </ul>
            </div>


        {{-- <h3>{{$users->name}}</h3> --}}
        </div>
    </div>
@endsection