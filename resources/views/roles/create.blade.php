@extends('layouts.header')

@section('title', '| Add Role')

@section('content')

<div class="row justify-content-center mt-1">
    <div class="col-md-6 col-12">

    <h1><i class='fa fa-key'></i> Add Role</h1>

    {{-- @include ('errors.list') --}}

    {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>
    <h5><b>Assign Permissions</b></h5>
    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
        @endforeach
    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</div>


@endsection