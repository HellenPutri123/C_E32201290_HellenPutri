<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
	//App\Http\Controllers\frontend\HomeController;
// use App\Http\Controllers\Backend\PendidikanController;
// use App\Http\Controllers\Backend\DashboardController;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\HellenController;
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

Route::get('/', function ()
 {
    return view('welcome');
});

/* Route::get('/hello',function(){
	return 'Helloo world';
});

Route::get('/belajar',function()
{
	echo'<h1> Hello world </h1>';
	echo'<p>Sedang belajar laravel</p>';
});

Route::get('page/{nomor}',function($nomor){
	return 'Ini halaman ke-' .$nomor;
});

Route::get('/image',function(){
	return view('hellen');
});
/*
Route::get('user', [Hellencontroller::class, 'index']);
Route::resource('user', Hellencontroller::class);

Route::get("/putri", function(){
	return view("putri");
});
Route::group(['namespace'=> 'Frontend'], function(){
	Route::resource('home', 'HomeController');
}); */
/* Route::group(['namespace'=> 'Backend'], function() {
	Route::resource('admin', 'DashboardController');
}); */
Route::resource('/dashboard', DashboardController::class);

Route::resource('home', HomeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home');

Route::middleware(['web' , 'auth'])->group(function()
{
	Route::group(['namespace' => 'Backend'], function()
	{
		Route::resource('dashboard', DashboardController::class);
        Route::resource('pendidikan', PendidikanController::class);
	});
});

