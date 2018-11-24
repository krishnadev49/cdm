<?php
Route::get('/register', function () {
    return view('register');
});
Route::post("/r1",array('uses' => 'controller1@insertingfunction'));

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
Route::post("/r2",array('uses' => 'controller1@f2'));
Route::get('/', function () {
    return view('welcome');
});
