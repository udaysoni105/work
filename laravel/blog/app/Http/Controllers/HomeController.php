<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ];
        
        return view('home.index', $data);
    }
}
