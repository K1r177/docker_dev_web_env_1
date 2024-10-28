<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function(){
    return '<h1>Hello world</h1>';
}); */

/* Route::get('/', function(){
    return view('hi', ['title' => 'Main page']);
}); */

/* Route::view('/', 'test.hi', ['title' => 'Main page']);

Route::get('/posts/{id?}', function($id = 1){
    return "Post ID {$id}";
});

Route::get('/posts/{id?}/comments/{comment?}', function($id = 1, $comment_id){
    return "Post ID {$id}, Comment ID {$comment_id}";
}); */

Route::get('/posts/{id}', function($id){
    return "Post ID {$id}";
});

Route::get('/posts/contact', function(){
    return "Post SLUG CONTACT";
});

Route::get('/posts/{slug}', function($slug){
    return "Post SLUG {$slug}";
});

Route::get('/search/{search}', function($search){
    return "Searching: {$search}";
})->where(['search' => '.*']);

Route::post('posts', function(){
    return 'Store post';
})->withoutMiddleware(VerifyCsrfToken::class);

/* Route::match(['get', 'post'], '/get-post', function(){
    return 'Hello from GET|POST'; 
})->withoutMiddleware(VerifyCsrfToken::class); */

Route::any('/get-post', function(){
    return 'Hello from ANY METHOD'; 
})->withoutMiddleware(VerifyCsrfToken::class);

Route::redirect('/here', '/get-post', 301);
