<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RabController;
use App\Http\Controllers\LampuController;

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

Route::get('/indexpt', function () {return view('Viewindex');});

Route::get('/login', function () { return view('Pengguna.Viewlogin');})->name('login');

Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'fungsilogout'])->name('fungsilogout');

    
    Route::group(['middleware'=>['auth','CekLevel:user,admin']],function(){
        // ceklevel diatas memanggil fungsi ceklevel.php pada kernel.php didalam folder midelware
            // jika kita mengklik link beranda tanpa login maka middleware akan mengecek pada fungsi Authentificate.php 
            // pada folder Http/middleware/aunthenticate.hp
        
            
            Route::get('/beranda', [BerandaController::class,'index'])->name('index');
            Route::get('/halaman-lampu', [BerandaController::class,'fungsihalamanlampu'])->name('fungsihalamanlampu');
            Route::get('indexrab', [RabController::class, 'indexfungsirab'])->name('indexfungsirab');
          
        });
    
// --------------------------------------ROUTE RAB-------------------------------------------------
// tampil data

// input data
Route::get('/createrab', [RabController::class, 'fungsicreaterab'])->name('fungsicreaterab');
Route::post('/simpandatarab', [RabController::class, 'storerab'])->name('storerab');
// edit data
Route::get('/editrab/{id}', [RabController::class, 'fungsieditrab'])->name('fungsieditrab');
Route::post('/updatedatarab/{id}', [RabController::class, 'fungsiupdaterab'])->name('fungsiupdaterab');
Route::get('/delete/{id}', [RabController::class, 'delete'])->name('delete');
// tampil data
Route::get('/tampilkandatarab/{id}', [RabController::class, 'fungsishowrab'])->name('fungsishowrab');
// cetak laporan
Route::get('/linkcetakrabpdf', [RabController::class, 'cetakrabpdf'])->name('cetakrabpdf');
Route::get('/linkcetakrabexcel', [RabController::class, 'cetakrabexcel'])->name('cetakrabexcel');
Route::post('/linkimportrab', [RabController::class, 'importrabexcel'])->name('importrabexcel');


// --------------------------------------ROUTE RAB-------------------------------------------------
// --------------------------------------ROUTE VENUS-------------------------------------------------
// PANGGIL VENUS SECCARA UNIVERSAL Route::resource('venus', LampuController::class);
// tampil data
 Route::get('indexlampu', [LampuController::class, 'indexfungsilampu'])->name('indexfungsilampu');
// input data
Route::get('/createlampu', [LampuController::class, 'fungsicreatevenus'])->name('fungsicreatevenus');
Route::post('/simpandatalampu', [LampuController::class, 'store'])->name('store');
// edit data
Route::get('/editlampu/{id}', [LampuController::class, 'fungsieditvenus'])->name('fungsieditvenus');
Route::post('/updatedata/{id}', [LampuController::class, 'fungsiupdatevenus'])->name('fungsiupdatevenus');
Route::get('/deletelampu/{id}', [LampuController::class, 'fungsideletelampu'])->name('fungsfungsideletelampu');
// tampil data
Route::get('/tampilkandata/{id}', [LampuController::class, 'fungsishow'])->name('fungsishow');
// cetak laporan
Route::get('/linkcetakpdf', [LampuController::class, 'cetakpdf'])->name('cetakpdf');
// cetak Excel
Route::get('/linkcetakvenusexcel', [LampuController::class, 'cetakvenusexcel'])->name('cetakvenusexcel');
//  Import
Route::post('/linkimportlampu', [LampuController::class, 'importlampuexcel'])->name('importlampuexcel');
// --------------------------------------ROUTE VENUS-------------------------------------------------
