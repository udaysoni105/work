<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function store(request $request){
        echo "<pre>";
        print_r($request->all());

        $customer = new Customer;
    }
}
