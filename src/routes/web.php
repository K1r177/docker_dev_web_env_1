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
    /* $cache = app()->make('cache');
    $cache->put('test', 123);
    dd($cache->get('test', 'default')); */
    
    /* $cache = app('cache');
    dd($cache->get('test', 'default')); */

    /* $cache = cache();
    dd($cache->get('test')); */

    //dd(Illuminate\Support\Facades\Cache::get('test', 222));

    $cache = Illuminate\Support\Facades\App::make('cache');
    dd($cache->get('test'));

    return view('welcome');
});
