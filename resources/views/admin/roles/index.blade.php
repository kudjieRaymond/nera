@extends('admin.admin_template')
@section('title', 'Role List')
@section('pageHeader', ' Role List')
@section('level', 'Roles')
@section('here', ' Role List')

@section('content')
@if ($message = Session::get('success'))
<div class="row">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Alert!</h4>
        {{$message}}
    </div>
</div>

@endif

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">List of Roles</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
          @foreach($roles as $key=>$role)
          <tr>
            <td>{{++$i}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->display_name}}</td>
            <td>{{$role->description}}</td>
            <td>
                @permission('read-acl')
                <a href="{{route('roles.show',$role->id) }}"><span class="label label-success">Show</span></a>
                @endpermission
                @permission('update-acl')
                    <a href="{{route('roles.edit',$role->id) }}"><span class="label label-primary">Edit</span></a>
                @endpermission
                @permission('delete-acl')
                    <a href ="{{ route('roles.destroy',  $role->id) }}" onclick =" event.preventDefault();                          document.getElementById('delete_Role').submit()"><span class="label label-danger">Delete</span></a>

                    <form id="delete_Role" action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                    </form>
                @endpermission

            </td>

          </tr>
          @endforeach

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection
