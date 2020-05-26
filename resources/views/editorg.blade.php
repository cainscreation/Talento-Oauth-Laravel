@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Listing <a href="/home" class="btn btn-primary">Go Back</a></div>

            
              {!!Form::open(['action' => ['OrganizesController@update', $organize->id],'method' => 'POST'])!!}
                {{Form::bsText('name',$organize->name,['placeholder' => 'Company Name'])}}
                {{Form::bsText('website',$organize->website,['placeholder' => 'Company Website'])}}
                {{Form::bsText('email',$organize->email,['placeholder' => 'Contact Email'])}}
                {{Form::bsText('phone',$organize->phone,['placeholder' => 'Contact Phone'])}}
                {{Form::bsText('address',$organize->address,['placeholder' => 'Organization Address'])}}
                {{Form::hidden('_method', 'PUT')}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection