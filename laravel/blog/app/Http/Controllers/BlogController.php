<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
public function about(Request $request)
{
    return view('home.about');
}
public function contactus(Request $request){
    dd($request->all());
}

}
