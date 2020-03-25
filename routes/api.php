<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/register', 'UserController@store');
Route::post('/login', 'UserController@user_login');
Route::post('/recover_password', 'UserController@recover_user_password');


Route::get('/generate_password', 'UserController@generate_password');

Route::group(['middleware' => ['auth']], function () {

    
    Route::get('/user_information', 'UserController@get_user_information');
    Route::post('/create_restriction/{id}', 'UserController@create_restriction');
    Route::post('/change_user_password', 'UserController@change_user_password');
    Route::get('/get_time_diff/{id}', 'UserController@get_time_diff');
    Route::get('/daily_usage_time/{id}', 'UserController@daily_usage_time');
    Route::post('/send_notification_email', 'UserController@send_notification_email');
        
    Route::apiResource('/app', 'AppController'); 
    
    Route::get('/get_apps_data', 'AppController@get_apps_data');  
 
    Route::get('/total_time_used/{id}', 'AppController@total_time_used');    
    Route::get('/time_per_day_used/{id}', 'AppController@time_per_day_used');        

    Route::post('/store_apps_list', 'AppController@store_apps_list');
    Route::post('/store_apps_data', 'AppController@store_apps_data');  

    Route::get('/listApps', 'AppController@listApps');
    Route::get('/apps_coordinates', 'AppController@apps_coordinates');
    Route::get('/apps_statistics', 'AppController@apps_statistics');
    Route::get('/apps_restrictions', 'AppController@apps_restrictions');
    Route::get('/apps_usage_range/{date}', 'AppController@apps_usage_range');
    
    
});


