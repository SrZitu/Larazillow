<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        //rendering  vue component from laravel controller
        return inertia(
            'Index/Index',
            [
                'message' => "Hello from Laravel"
            ]
        );
    }
    public function show()
    {
        return inertia('Index/Show');
    }
}
