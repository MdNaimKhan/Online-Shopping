<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
       // return 'hello world';
        return view ('front.home.home-content');
    }
    public function category(){
        return view ('front.category.category-content');
    }

}
