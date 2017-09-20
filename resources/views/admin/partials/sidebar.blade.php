<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <!--<form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>-->
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">NERA</li>
      <!-- Optionally, you can add icons to the links -->

      <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
      <li><a href="{{route('register')}}"><i class="fa fa-link"></i> <span>Register Admin</span></a></li>
      <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Manage Posts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Create New Post</a></li>
          <li><a href="#">Update Posts</a></li>
          <li><a href="#">Category</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Users</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('users.create')}}">Add User</a></li>
          <li><a href="{{route('users.index')}}">All Users</a></li>
          <li><a href="">Your Profile</a></li>
        </ul>
      </li>
      @permission('read-acl')
      <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Manage Roles</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('roles.create')}}">Add Role</a></li>
          <li><a href="{{route('roles.index')}}">All Roles</a></li>
        </ul>
      </li>
      @endpermission
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
