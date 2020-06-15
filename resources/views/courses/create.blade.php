@extends('layouts.header')
@section('content')
<div class="container">
    <h1>Create Courses</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {!!Form::open(['action' => 'CoursesController@store','method' => 'POST'])!!}
            {{Form::bsText('name','',['placeholder' => 'Course Name'])}}
            {{Form::bsText('author','',['placeholder' => 'Author'])}}
            {{Form::bsText('img_link','',['placeholder' => 'Thumbnail Link'])}}
            
            {{Form::bsSubmit('submit',['class'=>'btn btn-success'])}}
          {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection