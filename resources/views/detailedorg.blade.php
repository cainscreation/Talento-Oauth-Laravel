@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create Listing</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {!!Form::open(['action' => 'RegistersController@store','method' => 'POST'])!!}
            {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
            {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
            {{Form::bsText('password','',['placeholder' => 'password'])}}
            {{Form::bsSubmit('submit',['class'=>'btn btn-success'])}}
          {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection