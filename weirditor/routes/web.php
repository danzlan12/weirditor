<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;

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
    return view('index');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/about', function () {
    return view('aboutus');
});
//('/portofolio/1', [PortofolioController::class]);

