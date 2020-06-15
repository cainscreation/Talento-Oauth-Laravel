@extends('layouts.header')


@section('content')
      <div class="container">
        <div class="jumbotron text-center my-2">
          <h1>Welcome to <br>Learning Management System</h1>
        </div>
        <div class="row">
          <h1 class="my-1">Overview</h1>
          <div class="col-12 card-about">
Your subscription ends in <span class="text-danger" style="font-weight:bolder;">10 Days.</span>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 card-about">
<h2>Courses</h2>
<ul class="list-unstyled">
  <li>Angular</li>
  <li>HTML</li>
  <li>Bootstrap</li>
  <li>PHP</li>
</ul>
          </div>
        </div>
      </div>
      @endsection