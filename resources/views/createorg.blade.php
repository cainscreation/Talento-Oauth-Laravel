@extends('layouts.header')
@section('content')
<div class="container">
    <h1>Create Listing</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {!!Form::open(['action' => 'OrganizesController@store','method' => 'POST'])!!}
            {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
            {{Form::bsText('website','',['placeholder' => 'Company Website'])}}
            {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
            {{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}}
            {{Form::bsText('address','',['placeholder' => 'Organization Address'])}}
            {{Form::bsSubmit('submit',['class'=>'btn btn-success'])}}
          {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection