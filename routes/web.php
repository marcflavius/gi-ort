<?php

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


use App\Role;
use App\RoleUser;
use App\User;


Auth::routes();


Route::get('/', function (){

//    return \Illuminate\Support\Facades\DB::table('tickets')->get();
    return User::all();
});

