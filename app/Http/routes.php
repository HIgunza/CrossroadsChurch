<?php
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/resource', 'ResourceCenterController@index'); /*function () {
    return view('login');
	
});*/

Route::get('/person-home', function () {
    return view('login');
	
});
Route::get('/', function () {
    return view('welcome');
	
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


// Registration routes...


Route::auth();

Route::get('/home', 'HomeController@index');
