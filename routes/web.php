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

// protection de l'application
Auth::routes();
Route::get('t', function (){
    $q = request()->get('q');
    $r = Ticket::where('status',$q)->get();
    return view('test', compact('r'));
    
});

// // espace public
//page d'accueil
Route::get('/', 'HomeController@index');

// // espace priver
Route::middleware(['auth'])->group(function(){

    Route::resource('tickets', 'TicketsController');
    Route::get('admin/tickes/get/{status}','TicketController@status' );

    Route::group(['as' => 'admin.'], function(){
        Route::resource('admin/tickets', 'AdminTicketController');
        Route::resource('admin/users', 'AdminUserController');
        Route::resource('admin/categories', 'AdminCategoryController');
    });
    
});


