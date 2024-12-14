<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class HomeController extends Controller{

    public function index(){
        $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);
        $title = 'Home Page';
        //$users = Http::get('https://jsonplaceholder.typicode.com/users')->json();
        //dump($users);
        //$users = [];
        return View::make('home.index', compact('title', 'users'));
    }

}