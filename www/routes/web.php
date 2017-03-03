<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

/**
 * Customers
 */
Route::get('/customers/', 'CustomerController@index');
Route::get('/customer/create/', 'CustomerController@create');
Route::post('/customer/create/', 'CustomerController@store');
Route::post('/customer/edit/{id?}', 'CustomerController@update');
Route::get('/customer/edit/{id}', 'CustomerController@edit');

Route::get('/customer/edit/{customer}',function()
{
	return RecordController::index($)
}),

/**
 * Suppliers
 */
Route::get('/suppliers/', 'SupplierController@index');
Route::get('/supplier/create/', 'SupplierController@create');
Route::post('/supplier/create/', 'SupplierController@store');
Route::post('/supplier/edit/{id?}', 'SupplierController@update');
Route::get('/supplier/edit/{id}', 'SupplierController@edit');

/**
 * Projects
 */
Route::get('/projects/', 'ProjectController@index');

Route::get('/project/create/', 'ProjectController@create');
Route::post('/project/create/', 'ProjectController@store');

Route::post('/project/edit/{id?}', 'ProjectController@update');
Route::get('/project/edit/{project}', 'ProjectController@edit');

/**
 * Supplier Bills
 */
Route::get('/supplier_bills/', 'SupplierBillController@index');
Route::get('/supplier_bill/create/', 'SupplierBillController@create');
Route::post('/supplier_bill/create/', 'SupplierBillController@store');
Route::post('/supplier_bill/edit/{id?}', 'SupplierBillController@update');
Route::get('/supplier_bill/edit/{id}', 'SupplierBillController@edit');

/**
 * Items
 */
Route::get('/items/', 'ItemController@index');
Route::get('/item/create/', 'ItemController@create');
Route::post('/item/create/', 'ItemController@store');
Route::post('/item/edit/{id?}', 'ItemController@update');
Route::get('/item/edit/{id}', 'ItemController@edit');



