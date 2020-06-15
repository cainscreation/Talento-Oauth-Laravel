@extends('layouts.header')
@section('content')
<div class="container">
    <h1>Create Courses</h1>
<h3>Course selected : <span>{{$courses->name}}</span></h3>
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            {!!Form::open(['action' => 'TopicsController@store','method' => 'POST'])!!}
            {{Form::bsText('topic_name','',['placeholder' => 'Topic Name'])}}
            {{Form::hidden('course_id',$courses->id,['placeholder' => $courses->id])}}
            {{Form::bsSubmit('submit',['class'=>'btn btn-success'])}}
          {!! Form::close() !!}
        </div>
    </div>
</div>
<div class="continer">
<div class="row justify-content-center">
    <h3>Already Added Topics</h3>
</div>
<div class="row justify-content-center">



@foreach ($topics as $topic)
@if ($topic->course_id == $courses->id)

        <div class="col-12 col-md-9">
           <p  style="color:black!important;font-size:20px;"> {{$topic->topic_name}}</p>
        </div>
@endif
  
@endforeach
    </div>
</div>   

@endsection