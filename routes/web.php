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


use App\Ticket;


Auth::routes();
Route::get('/', function (){
    return Ticket::all();
    return view('home');
});
Route::get('/list', 'TicketsController@index');

Route::resource('tickets', 'TicketsController');

Route::get('/', function () {

    //    return \Illuminate\Support\Facades\DB::table('tickets')->get();
    return view('home');
});

Route::get('/edit', function () {

		//    return \Illuminate\Support\Facades\DB::table('tickets')->get();
		return view('edit');
	});