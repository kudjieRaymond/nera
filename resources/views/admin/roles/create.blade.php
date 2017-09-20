@extends('admin.admin_template')
@section('title', 'Create Role')
@section('pageHeader', 'Create Role')
@section('level', 'Roles')
@section('here', 'create Role ')

@section('content')
<div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">New Role Form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="{{route('roles.create')}}">
              {{ csrf_field() }}
            <div class="box-body">
              <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control"name="name"  placeholder="Enter Role Name">
              </div>
              <div class="form-group">
                <label >Display Name</label>
                <input type="text" class="form-control" name="display_name"  placeholder="Enter Role Display Name">
              </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="3" name="description" placeholder="Enter Role Description ..."></textarea>
              </div>
              <!-- select -->
              <div class="form-group">
                  @foreach($permissions as $permission)
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name ="permission[]" value="{{$permission->id}}">
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
