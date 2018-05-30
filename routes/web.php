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




Route::get('/', function () {
//    Auth::logout();
    //    return \Illuminate\Support\Facades\DB::table('tickets')->get();
    return view('home');
});

Route::middleware(['auth'])->group(function(){
    Route::resource('tickets', 'TicketsController');
    Route::resource('admin/user', 'AdminUserController');
    Route::resource('admin/category', 'AdminCategoryController');
    Route::resource('admin/ticket', 'AdminTicketController');
});
