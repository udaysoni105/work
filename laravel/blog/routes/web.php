<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Members;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UsersController;
// use App\Http\Controllers\customer;
use App\Models\Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('list',[Members::class,'dbOperations']);
// Route::resource('my-resource', MyResourceController::class);
// Route::apiResource('my-resource', MyResourceController::class);


// Route::get('/home', [HomeController::class, 'index']);


// Route::get('/all', [TestController::class, 'index']);


// Route::get('/user/{id}', function ($id) {
//     $user = DB::table('users')->where('id', $id)->first();
//     return view('user', ['user' => $user]);
// });

// Route::get('/test', [TestController::class, 'index']);

// Route::get('/test/{id}', [TestController::class, 'show']);

// Route::get('/register',[RegisterController::class,'index']);
// Route::post('/register',[RegisterController::class,'register']);
// Route::get('/customer',[CustomerController::class,'index']);
// Route::post('/customer',[CustomerController::class,'store']);

// Route::get('/customer',function (){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers);
// });

// Route::view('/contact','home.contact');
// Route::post('/contact',[BlogController::class, 'contactus']);http://127.0.0.1:8000/

// Route::post("users",[UsersController::class,'getData']);
// Route::view("login","users");
