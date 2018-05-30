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


use App\Admin;
use App\Ticket;
use App\User;


Auth::routes();
Route::get('/', function (){
	    $admin =   Admin::find(1);
     return view('home',compact('admin'));
});

Route::get('/list', 'TicketsController@index');

Route::resource('tickets', 'TicketsController');



Route::get('/edit', function () {

		//    return \Illuminate\Support\Facades\DB::table('tickets')->get();
		return view('edit');
	});