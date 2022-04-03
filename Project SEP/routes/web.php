<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\logonController;
use Illuminate\Support\Facades\Route;

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
    return redirect('selenium');
});

Route::prefix('selenium')->group(function (){
    Route::get('/', [Home::class, "home"]);
    Route::get('login', function () {
        return view('login');
    });
    Route::post('cekLogin', [logonController::class, 'cekLogin']);
    // Route::post('/dologin', [LoginRegisterController::class,'dologin']);
});
