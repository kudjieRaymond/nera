@extends('admin.admin_template')
@section('title', 'list users')
@section('pageHeader', 'List Users')
@section('Level', 'Users')
@section('here', 'list users')

@section('content')
<div class="row">
     <div class="col-xs-12">
       <div class="box">
         <div class="box-header">
           <h3 class="box-title">Complete list Of Admins</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body table-responsive no-padding">

           <table class="table table-hover">

             <tr>
               <th>ID</th>
               <th>User</th>
               <th>Email</th>
               <th></th>
               <th></th>
             </tr>
             @foreach($users as $user)
               <tr>
                 <td>{{$user->id}}</td>
                 <td>{{$user->name}}</td>
                 <td>{{$user->email}}</td>
                 <th><a href ="#"><span class="label label-warning">Suspend</span></a></th>
                 <th><a href ="#"><span class="label label-primary">Update</span></a></th>
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
