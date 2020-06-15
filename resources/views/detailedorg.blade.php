@extends('layouts.header')
@section('content')
<div class="container">
    {{-- <h3>{{$organ_id->id}}</h3> --}}
    <div class="row justify-content-center ">
        <div class="col-12 col-md-6 card-custom">
    <h3 class="text-center mb-4">Create New User</h3>

            {!!Form::open(['action' => 'RegistersController@store','method' => 'POST'])!!}
            {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
            {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
            {{-- <div class="form-check">
            <input type="checkbox" value="{{$organ_id->id}}" class="form-check-input">
                <label class="form-check-label " value="{{$organ_id->id}}">{{$organ_id->id}}</label>
            </div> --}}
            {{Form::hidden('organization',$organ_id->id,['placeholder' => $organ_id->id])}}
            <div class='form-group'>
                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>
        
                @endforeach
            </div>

            {{Form::bsText('password','',['placeholder' => 'password'])}}
            {{Form::bsSubmit('submit',['class'=>'btn btn-success'])}}
          {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection