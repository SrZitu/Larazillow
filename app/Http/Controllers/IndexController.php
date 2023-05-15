<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        //rendering  vue component from laravel controller
        return inertia('index/Index');
    }
    public function show(){
        return inertia('index/Show');
    }
}
