<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'Home',
    'uses' => 'DashboardController@home'
]);


/*
|--------------------------------------------------------------------------
| Routes for Branch
|--------------------------------------------------------------------------
| That is a CRUD roudes for branch!
|
*/
Route::get('/branch/show',array('uses'=>'BranchController@index'));

Route::get('/branch/show/{id}',array('uses'=>'BranchController@show'));

Route::get('/branch/create',array('uses'=>'BranchController@create'));

Route::post('/branch/create',array('uses'=>'BranchController@store'));

Route::get('/branch/update/{id}',array('uses'=>'BranchController@edit'));

Route::post('/branch/update',array('uses'=>'BranchController@update'));

Route::get('/branch/delete/{id}', array('uses' => 'BranchController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for User
|--------------------------------------------------------------------------
| That is a CRUD roudes for user!
|
*/
Route::get('/user/show',array('uses'=>'UserController@index'));

Route::get('/user/show/{id}',array('uses'=>'UserController@show'));

Route::get('/user/create',array('uses'=>'UserController@create'));

Route::post('/user/create',array('uses'=>'UserController@store'));

Route::get('/user/update/{id}',array('uses'=>'UserController@edit'));

Route::post('/user/update',array('uses'=>'UserController@update'));

Route::get('/user/delete/{id}', array('uses' => 'UserController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for Customer
|--------------------------------------------------------------------------
| That is a CRUD roudes for customer!
|
*/
Route::get('/customer/show',array('uses'=>'CustomerController@index'));

Route::get('/customer/show/{id}',array('uses'=>'CustomerController@show'));

Route::get('/customer/create',array('uses'=>'CustomerController@create'));

Route::post('/customer/create',array('uses'=>'CustomerController@store'));

Route::get('/customer/update/{id}',array('uses'=>'CustomerController@edit'));

Route::post('/customer/update',array('uses'=>'CustomerController@update'));

Route::get('/customer/delete/{id}', array('uses' => 'CustomerController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for Food
|--------------------------------------------------------------------------
| That is a CRUD roudes for Food!
|
*/
Route::get('/food/show',array('uses'=>'FoodController@index'));

Route::get('/food/show/{id}',array('uses'=>'FoodController@show'));

Route::get('/food/create',array('uses'=>'FoodController@create'));

Route::post('/food/create',array('uses'=>'FoodController@store'));

Route::get('/food/update/{id}',array('uses'=>'FoodController@edit'));

Route::post('/food/update',array('uses'=>'FoodController@update'));

Route::get('/food/delete/{id}', array('uses' => 'FoodController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for Order
|--------------------------------------------------------------------------
| That is a CRUD roudes for Order!
|
*/
Route::get('/order/show',array('uses'=>'OrderController@index'));

Route::get('/order/show/{id}',array('uses'=>'OrderController@show'));

Route::get('/order/create',array('uses'=>'OrderController@create'));

Route::post('/order/create',array('uses'=>'OrderController@store'));

Route::get('/order/update/{id}',array('uses'=>'OrderController@edit'));

Route::post('/order/update',array('uses'=>'OrderController@update'));

Route::get('/order/delete/{id}', array('uses' => 'OrderController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for Food Categories
|--------------------------------------------------------------------------
| That is a CRUD roudes for Food Categories!
|
*/
Route::get('/foodcategory/show',array('uses'=>'FoodCategoryController@index'));

Route::get('/foodcategory/show/{id}',array('uses'=>'FoodCategoryController@show'));

Route::get('/foodcategory/create',array('uses'=>'FoodCategoryController@create'));

Route::post('/foodcategory/create',array('uses'=>'FoodCategoryController@store'));

Route::get('/foodcategory/update/{id}',array('uses'=>'FoodCategoryController@edit'));

Route::post('/foodcategory/update',array('uses'=>'FoodCategoryController@update'));

Route::get('/foodcategory/delete/{id}', array('uses' => 'FoodCategoryController@destroy'));



/*
|--------------------------------------------------------------------------
| Routes for Delivery Location
|--------------------------------------------------------------------------
| That is a CRUD roudes for elivery Location!
|
*/
Route::get('/location/show',array('uses'=>'LocationController@index'));

Route::get('/location/show/{id}',array('uses'=>'LocationController@show'));

Route::get('/location/create',array('uses'=>'LocationController@create'));

Route::post('/location/create',array('uses'=>'LocationController@store'));

Route::get('/location/update/{id}',array('uses'=>'LocationController@edit'));

Route::post('/location/update',array('uses'=>'LocationController@update'));

Route::get('/location/delete/{id}', array('uses' => 'LocationController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for Table
|--------------------------------------------------------------------------
| That is a CRUD roudes for Table!
|
*/
Route::get('/table/show',array('uses'=>'TableController@index'));

Route::get('/table/show/{id}',array('uses'=>'TableController@show'));

Route::get('/table/create',array('uses'=>'TableController@create'));

Route::post('/table/create',array('uses'=>'TableController@store'));

Route::get('/table/update/{id}',array('uses'=>'TableController@edit'));

Route::post('/table/update',array('uses'=>'TableController@update'));

Route::get('/table/delete/{id}', array('uses' => 'TableController@destroy'));



/*
|--------------------------------------------------------------------------
| Routes for Reservation
|--------------------------------------------------------------------------
| That is a CRUD roudes for Reservation!
|
*/
Route::get('/reservation/show',array('uses'=>'ReservationController@index'));

Route::get('/reservation/show/{id}',array('uses'=>'ReservationController@show'));

Route::get('/reservation/create',array('uses'=>'ReservationController@create'));

Route::post('/reservation/create',array('uses'=>'ReservationController@store'));

Route::get('/reservation/update/{id}',array('uses'=>'ReservationController@edit'));

Route::post('/reservation/update',array('uses'=>'ReservationController@update'));

Route::get('/reservation/delete/{id}', array('uses' => 'ReservationController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for Monthly Order
|--------------------------------------------------------------------------
| That is a CRUD roudes for MOnthly Order!
|
*/
Route::get('/monthlyorder/show',array('uses'=>'MonthlyOrderController@index'));

Route::get('/monthlyorder/show/{id}',array('uses'=>'MonthlyOrderController@show'));

Route::get('/monthlyorder/create',array('uses'=>'MonthlyOrderController@create'));

Route::post('/monthlyorder/create',array('uses'=>'MonthlyOrderController@store'));

Route::get('/monthlyorder/update/{id}',array('uses'=>'MonthlyOrderController@edit'));

Route::post('/monthlyorder/update',array('uses'=>'MonthlyOrderController@update'));

Route::get('/monthlyorder/delete/{id}', array('uses' => 'MonthlyOrderController@destroy'));


/*
|--------------------------------------------------------------------------
| Routes for Lunchbox Order
|--------------------------------------------------------------------------
| That is a CRUD roudes for Lunchbox Order!
|
*/
Route::get('/lunchboxorder/show',array('uses'=>'LunchboxOrderController@index'));

Route::get('/lunchboxorder/show/{id}',array('uses'=>'LunchboxOrderController@show'));

Route::get('/lunchboxorder/create',array('uses'=>'LunchboxOrderController@create'));

Route::post('/lunchboxorder/create',array('uses'=>'LunchboxOrderController@store'));

Route::get('/lunchboxorder/update/{id}',array('uses'=>'LunchboxOrderController@edit'));

Route::post('/lunchboxorder/update',array('uses'=>'LunchboxOrderController@update'));

Route::get('/reservation/delete/{id}', array('uses' => 'LunchboxOrderController@destroy'));

