<?php

use Illuminate\Support\Facades\Route;
use App\Models\Customer\CustomerController;

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
Route::get('/',[CustomerController,'index']);
Route::post('/store',[CustomerController,'store']);
