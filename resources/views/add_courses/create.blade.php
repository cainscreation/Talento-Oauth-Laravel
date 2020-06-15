@extends('layouts.header')
@section('content')

<div class="container">
    <h3>Allocate Courses to Organizations</h3>
    <div class="row">
        <div class='form-group'>
            <h3>{{$organize->name}}</h3>

            @foreach ($courses as $course)
            {!!Form::open(['action' => 'AddCoursesController@store','method' => 'POST'])!!}
                {{ Form::checkbox('courses[]',$course->id) }}
                {{Form::hidden('id',$organize->id,['placeholder' => $organize->id])}}
                {{ Form::label($course->name , ucfirst($course->name)) }}<br>
            @endforeach
                {{Form::bsSubmit('submit',['class'=>'btn btn-success'])}}
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection