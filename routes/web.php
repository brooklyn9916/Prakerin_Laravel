<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index', [
        "title" => "Beranda"
    ]);
    
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Rafa Fausta Muliawan",
        "NIK" => "31331313",
        "GAMBAR" => "telkom.jpg",
        "title" => "About"
    ]);

});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/inputdata', function () {
    return view('inputdata', [
        "title" => "InputData"
    ]);
});

Route::get('/form', function () {
    return view('form', [
        "title" => "Input Data"
    ]);
});


Route::resource('/inputdata', ContactController::class);
Auth::routes();

Route::group(['middleware'=> ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
