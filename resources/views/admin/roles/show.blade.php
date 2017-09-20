@extends('admin.admin_template')
@section('title', 'Show Role')
@section('pageHeader', 'Show Role ')
@section('level', 'Roles')
@section('here', ' Show Role ')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->display_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {{ $role->description }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $rolePermission)
                    <label class="label label-success">{{ $rolePermission->display_name }}</label>
                @endforeach

            @endif

        </div>

    </div>

</div>

@endsection
