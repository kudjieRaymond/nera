@extends('admin.admin_template')
@section('title', 'Edit Role')
@section('pageHeader', 'Edit Role ')
@section('level', 'Roles')
@section('here', ' Edit Role ')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
        </div>
    </div>
</div>
<div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Role Form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{route('roles.update', $role->id)}}">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}

            <div class="box-body">
              
              <div class="form-group">
                <label >Display Name</label>
                <input type="text" class="form-control" name="display_name"  placeholder="Enter Role Display Name" value={{$role->display_name}}>
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description" placeholder="Enter Role Description ...">{{$role->description}}</textarea>
              </div>
              <!-- select -->
              <div class="form-group">
                  @foreach($permissions as $permission)
                      <div class="checkbox">

                        <label>
                          <input type="checkbox"  @if(in_array($permission->id, $rolePermission)){{'checked'}} @endif name ="permission[]" value="{{$permission->id}}">
                          {{$permission->display_name}}
                        </label>
                     </div>
                  @endforeach
              </div>

            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
  </div>  <!-- left column end-->
</div>

@endsection
