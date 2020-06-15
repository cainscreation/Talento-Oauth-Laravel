@extends('layouts.header')

@section('title', '| Permissions')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8 col-12">
    <h4><i class="fa fa-key"></i>Available Permissions</h4>
    <a href="{{ URL::to('permissions/create') }}" class="btn btn-primary my-2 mb-4">Add Permission</a>

   
    <table id="example" class="display" style="width:100%">


            <thead>
                <tr>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td> 
                    <td>
                    <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-link" style="">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-link']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


</div>
</div>


@endsection