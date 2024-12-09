<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class HomeController extends Controller{

    public function index(){
        return View::make('home.index', ['title' => 'Home Page', 'description' => 'test desc', 'test' => 'Test Value']);
    }

    public function contact(){
        return View::make('home.contact', ['title' => 'Contact Page']);
    }

}