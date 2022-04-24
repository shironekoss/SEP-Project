<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\logonController;
use App\Http\Controllers\PesananController;
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
    Route::get('aboutus', [Home::class, "aboutus"]);
    Route::get('menu', [Home::class, "menu"]);
    Route::get('customorder', [Home::class, "customorder"]);
    Route::get('menu/{nama_menu}',[Home::class, "menudetail"]);
    Route::post('menu/{nama_menu}/addpesanan',[Home::class, "addpesanan"]);

    Route::get('login', [logonController::class, "login"]);
    Route::post('cekLogin', [logonController::class, 'cekLogin']);

    //static pesanan
    Route::get('pesanan', [PesananController::class, "listorder"]);
    //untuk dynamic cart
    Route::post('update', [PesananController::class,"update"]);
    Route::post('total', [PesananController::class,"total"]);
    Route::post('changecheckbox', [PesananController::class,"changecheckbox"]);
    Route::get('hapuscart/{cart_id}', [PesananController::class,"hapuscart"]);
    Route::get('cek', [PesananController::class,"simpan"]);

    // Route::post('/dologin', [LoginRegisterController::class,'dologin']);
});
