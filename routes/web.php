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
    return view('auth.login');
});

Route::get('/home','HomeController@index');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login','HomeController@index');

Route::group(['prefix'=> 'Role', 'namespace'=>'Admin'], function(){
    Route::get('add','RoleController@add');
    Route::post('store','RoleController@store');
    Route::get('show','RoleController@show');
    Route::get('edit/{id}','RoleController@edit');
    Route::post('update','RoleController@update');
    Route::get('delete/{id}','RoleController@delete');
});

Route::group(['prefix'=> 'Permission', 'namespace'=>'Admin'], function(){
    Route::get('add','PermissionController@add');
    Route::post('store','PermissionController@store');
    Route::get('show','PermissionController@show');
    Route::get('edit/{id}','PermissionController@edit');
    Route::post('update','PermissionController@update');
    Route::get('delete/{id}','PermissionController@delete');
});

Route::group(['prefix'=> 'Employee','namespace'=>'Admin'], function(){
    Route::get('add','EmployeeController@add');
    Route::get('add1','EmployeeController@add1');
    Route::post('store','EmployeeController@store');
    Route::get('show','EmployeeController@show');
    Route::get('edit/{id}','EmployeeController@edit');
    Route::post('update','EmployeeController@update');
    Route::get('delete/{id}','EmployeeController@delete');

});

Route::group(['prefix'=> 'Bill','namespace'=>'Admin'], function(){

    Route::get('add','BillController@add') ->middleware('permission:edit');
    Route::get('add','BillController@add')->middleware('role:manager');

});

Route::group(['prefix'=> 'Relation','namespace'=>'Admin'], function(){

//    Route::get('add','BillController@add') ->middleware('permission:edit');
    Route::get('EmployeeRelation','RelationController@showEmployeeRelation');
    Route::get('PermissionRelation','RelationController@showPermissionRelation');
    Route::get('editPermissionRelation/{id}','RelationController@editPermissionRelation');
    Route::post('updatePermissionRelation','RelationController@updatePermissionRelation');
    Route::get('editEmployeeRelation/{id}','RelationController@editEmployeeRelation');
    Route::post('updateEmployeeRelation','RelationController@updateEmployeeRelation');

});


