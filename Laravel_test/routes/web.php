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

$route_prefix = '/Laravel_test/'; // reikalingas todėl, kad kai ateiname iš localost/app, tai url nėra “/”, bet “/app
Route::get($route_prefix . '/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});
