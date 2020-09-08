<?php

use Illuminate\Support\Facades\Route;

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
 
//rute baru
Route::get('HELLO', function () {
    echo "<h1>HELLO WORD!!!</h1>";
    echo "<h2> ini laravel Aisyah Mukti Pratiwi</h2>";
});

//rute baru mengarah ke cotroller
route::get('hellocontroller', 'HelloController@index');