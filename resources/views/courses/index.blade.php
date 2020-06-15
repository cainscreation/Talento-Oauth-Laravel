@extends('layouts.header')
@section('content')
    
<div class="container">
    <div class="flex d-flex justify-content-center">
        <div class="col-12 col-md-8 card-about">
            <h4>Courses Available</h4>
           
                <table id="example" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th scope="col">Course Name</th>
                        <th scope="col">Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Add Topics</th>
                      </tr>
                    </thead>
            <tbody>
                @if (count($courses)>0)
                    @foreach ($courses as $course)
                        <tr>
                            <td scope="row">{{$course->id}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->author}}</td>
                            <td><a href="/{{$course->id}}/topics">Add Topics</a></td>
                        </tr>
                        
                       
                    @endforeach                
                @endif
            </tbody>
    </table>
 </div>
    
    
    </div>
</div>

@endsection