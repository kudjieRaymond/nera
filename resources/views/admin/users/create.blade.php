@extends('admin.admin_template')
@section('title', 'list users')
@section('pageHeader', 'Create User')
@section('level', 'Users')
@section('here', 'Add users')

@section('content')
<div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="">
            <div class="box-body">
              <div class="form-group">
                <label >First Name</label>
                <input type="text" class="form-control"name=""  placeholder="Enter FirstName">
              </div>
              <div class="form-group">
                <label >Last Name</label>
                <input type="text" class="form-control" name=""  placeholder="Enter LastName">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="">
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
  </div>  <!-- left column end-->
</div>

@endsection
