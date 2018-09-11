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

Route::get('/','frontController@index');
Auth::routes();
Route::get('/account/register', 'accountController@register');
Route::post('/account/register', 'accountController@saveregister');
Route::get('register/verify/{id}','accountController@verify');

Route::get('/test', function() {
    abort(404);
});
Route::get('/home', function() {
    return redirect('/account');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/admin', 'adminController@index');
    Route::get('/setting', 'adminController@setting');
    Route::post('/setting', 'adminController@savesetting');
    Route::get('/admin/ico', 'adminController@ico');
    Route::post('/admin/ico', 'adminController@saveico');
    Route::post('/admin/ico/edit/{id}', 'adminController@editAdminICO');
	Route::post('/admin/ico/status/{id}', 'adminController@statusAdminICO');
	Route::post('/admin/ico/del/{id}', 'adminController@delAdminICO');
    Route::get('/admin/inject', 'adminController@injectBTX');
    Route::post('/admin/inject', 'adminController@saveinjectBTX');
    Route::get('/admin/user', 'adminController@user');
    Route::get('/admin/btc', 'adminController@btc');
    Route::post('/admin/btc', 'adminController@confbtc');
});



Route::group(['middleware' => ['auth', 'role:user']], function () {
	Route::get('/account', 'accountController@index');

	Route::get('/account/ico', 'accountController@ico');
	Route::post('/account/ico', 'accountController@saveico');

	Route::get('/account/deposit', 'accountController@deposit');
	Route::post('/account/deposit', 'accountController@savedeposit');

	Route::get('/account/transfer', 'accountController@transfer');
	Route::post('/account/transfer', 'accountController@savetransfer');

	Route::get('/account/withdraw', 'accountController@withdraw');
	Route::post('/account/withdraw', 'accountController@savewithdraw');

	Route::get('/account/history', 'accountController@history');

	Route::get('/account/referral', 'accountController@referral');
	
	Route::get('/account/security', 'accountController@security');

	Route::get('/account/setting', 'accountController@setting');
	Route::post('/account/setting', 'accountController@savesetting');
	
	Route::get('/account/support', 'accountController@support');
	
});
