@extends('layouts.header')

@section('title', '| Roles')

@section('content')
<div class="row justify-content-center mt-4">
<div class="col-md-8 col-12" style="">
    <h4><i class="fa fa-key"></i> Roles</h4>



    <table id="example" class="display" style="width:100%">

            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>{{  $role->permissions()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-dark" style="margin-right: 3px;">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger my-1']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    <a href="{{ URL::to('roles/create') }}" class="btn btn-primary">Add Role</a>

</div>
</div>
@endsection