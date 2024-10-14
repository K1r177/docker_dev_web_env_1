<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //dump("Hello");
    //dd("Hello");
    //dump(config('app.locale'));
    //dump(config('database.connections.mysql'));
    //dump(config('app.env'));
    dump(config('custom.custom_test'));
    return view('welcome');
});
