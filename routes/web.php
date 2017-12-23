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
//use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Auth\Auth;

Route::get('/', function () {
//    return view('auth.login');
    return view('Users.index');
});


Route::get('cheque',function(){

  // return view('');
    return view('Users.Cheque.cheque_register');

});

Route::get('cheque_bounce',function(){
    echo "test";
    // return view('');
    return view('Users.Cheque.cheque_bounce');

});


Route::get('cheque_register',function(){
   // echo "test";
    // return view('');
    return view('Users.Cheque.cheque_bounce');

});




Route::post('removePastAllocationByAjax','Admin\BillAjaxController@removePastAllocationByAjax');
Route::post('pastAllocateBillsByAjax','Admin\BillAjaxController@addPastAllocationByAjax');
Route::post('allocateBillsByAjax','Admin\BillController@allocateBillsByAjax');
Route::post('removeCurrentAllocationByAjax','Admin\BillController@removeCurrentAllocationByAjax');
Route::get('unallocatedBills','Admin\BillController@unallocatedBills');
Route::post('BillNosearch','Admin\BillController@BillNosearch');

Route::post('sheetUpload','Admin\BillController@sheetUpload');
Route::post('billDetailsUpload','Admin\BillController@billDetailsUpload');

Route::post('authenticate','Auth\LoginController@authenticate');

Route::get('uploadbill','Admin\BillController@uploadBill');
Route::post('searchAllocation','Admin\BillController@searchAllocation');
Route::post('searchBill','Admin\BillController@searchBill');


Route::get('create-allocation-no','Admin\BillController@createAllocationNo');
Route::get('manager-dashboard','Admin\BillController@managerDashboard');


Route::get('cashier-dashboard','Admin\CashierController@cashierDashboard');


Route::post('/storebill','Admin\BillController@storeBill');
Route::get('storebill',function (){


    dd(config('app.company_name')."-".date("dmY")."-"."1");
});

//Route::post('authenticate','');
Route::get('/home','HomeController@index');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login','HomeController@index');


Route::group(['prefix'=> 'ChequePenalty', 'namespace'=>'Admin'], function(){
    Route::get('add','ChequePenalty@add');
    Route::post('store','ChequePenalty@store');
    Route::get('show','ChequePenalty@index');
    Route::get('edit/{id}','RoleController@edit');
    Route::post('update','RoleController@update');
    Route::get('delete/{id}','RoleController@delete');
});



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
//
//Route::group(['prefix'=> 'Bill','namespace'=>'Admin'], function(){
//
//    Route::get('add','BillController@add') ->middleware('permission:edit');
//    Route::get('add','BillController@add')->middleware('role:manager');
//
//});

Route::group(['prefix'=> 'Relation','namespace'=>'Admin'], function(){

//    Route::get('add','BillController@add') ->middleware('permission:edit');
    Route::get('EmployeeRelation','RelationController@showEmployeeRelation');
    Route::get('PermissionRelation','RelationController@showPermissionRelation');
    Route::get('editPermissionRelation/{id}','RelationController@editPermissionRelation');
    Route::post('updatePermissionRelation','RelationController@updatePermissionRelation');
    Route::get('editEmployeeRelation/{id}','RelationController@editEmployeeRelation');
    Route::post('updateEmployeeRelation','RelationController@updateEmployeeRelation');

});

Route::get('/manager', function (){
   return view('Users.index');
});


