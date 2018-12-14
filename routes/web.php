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

Route::get('/', function () {
    return view('template2');
});

Route::resource('pelapor','pelaporController');
Route::resource('prioritas','prioritasController');
Route::resource('dinas','dinasController');
Route::resource('bpbd','bpbdController');
Route::resource('jadwal','jadwalController');
Route::resource('laporan','laporanController');

Route::get('/login',function(){
	return view('login');
})->name('login');

Auth::routes();

Route::get('/template2', 'HomeController@index')->name('home');
Route::get('/logout', 'LoginController@logout');

Route::get('logout','\App\Http\Controller\Auth\LoginController@logout');

Route::get('/homeD',function(){
	return view('/dinas/homeD');
});

Route::get('/homeB',function(){
	return view('/bpbd/homeB');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
