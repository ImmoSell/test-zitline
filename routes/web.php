<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HargaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Route::get('/', function () {
//      return view('welcome');
//      });

     Route::get('/', function () {
        return view('beranda');
        });

        Route::get('/beranda', function () {
            return view('buka');
            });

    //  Controller Customer...
     Route::get('/customers', [CustomerController::class, 'index'])->name('customer');
     Route::get('/tambahcustomer', [CustomerController::class, 'tambahcustomer'])->name('tambahcustomer');
     Route::post('/insertdata', [CustomerController::class, 'insertdata'])->name('insertdata');
     Route::get('/editcustomer/{id}', [CustomerController::class, 'editcustomer'])->name('editcustomer');
     Route::put('/uploadcustomer/{id}', [CustomerController::class, 'uploadcustomer'])->name('uploadcustomer');
     Route::get('/deletecustomer/{id}', [CustomerController::class, 'deletecustomer'])->name('deletecustomer');
    // End Controller Customer.............................................................................................................

    // Controller Login dan register..................................................
    Route::get('/', [HomeController::class, 'home'])->name('/');
     Route::get('/login', [UserController::class, 'login'])->name('login');
     Route::post('/postlogin', [UserController::class, 'postlogin'])->name('postlogin');
    //  //////////////////////////////////////////////////////////////////////////////////////

    // Controller Harga..............
    Route::get('/harga', [HargaController::class, 'harga'])->name('harga');
    Route::get('/tambahharga', [HargaController::class, 'tambahharga'])->name('tambahharga');
    Route::post('/insertharga', [HargaController::class, 'insertharga'])->name('insertharga');
    Route::get('/editharga/{id}', [HargaController::class, 'editharga'])->name('editharga');
    Route::put('/uploadharga/{id}', [HargaController::class, 'uploadharga'])->name('uploadharga');
    Route::get('/deleteharga/{id}', [HargaController::class, 'deleteharga'])->name('deleteharga');
    
    // End Controller Harga..........................................................................................

    // Tagihan Controller..................................................................
    Route::get('/tagihan', [TagihanController::class, 'tagihan'])->name('tagihan');
    Route::get('/createtagihan', [TagihanController::class, 'createtagihan'])->name('createtagihan');
    // End Tagihan Controller...........................................................................