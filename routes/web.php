<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('admin', function () {
    return view('admin.admin_template');
});*/


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

//Route::middleware();

Route::prefix('admin')->group(function () {

  Route::middleware('auth')->group(function () {
    //Route::get('/admin', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController');
    // User can only work fiddle with Role if he/she is a superadministrator
    //change all the middleware to 'role:superadministrator' then use the current one for
    Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['role:superadministrator']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:create-acl']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:create-acl']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:update-acl']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:update-acl']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:delete-acl']]);


  });



});
