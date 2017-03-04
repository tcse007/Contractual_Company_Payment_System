<?php
use App\User;
use App\Contract_detail;
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
////////////Admin Route
Route::group(['middleware' => 'auth'], function () {
	Route::get('/admin/home', function () {
		$users=User::all();
	    return view('admin.home',compact('users'));
	});
	Route::get('admin/contract_request', function () {
		$contract_details=Contract_detail::all();
	    return view('admin.contract_request',compact('contract_details'));
	});
	Route::get('admin/user_request', function () {
		$users=User::all();
	    return view('admin.user_request',compact('users'));
	});
	Route::get('admin/home/user_delete/{id}','AdminController@delete');
	Route::get('admin/home/user_edit/{id}','AdminController@edit');
	Route::post('admin/home/user_update/','AdminController@update');



});

Route::get('/staff/home', function () {
    return view('staff/home');
});


//Client Route
Route::get('/client/home', function () {
    return view('client/home');
});
Route::get('/client/make_contract', function () {
    return view('client/make_contract');
});

Route::post('client/make_contract/store','ClientController@store');








Route::get('/manager/home', function () {
    return view('manager/home');
});



Auth::routes();

Route::get('/home', 'HomeController@index');
