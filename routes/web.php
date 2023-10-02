<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return redirect('/produk');
});

    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('auth', [AuthController::class, 'login']);
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register/process',[RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function (){
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('produk', ProdukController::class);
    Route::resource('profile', ProfileController::class);  
    Route::get('download', [ExportController::class, 'export']);
});

Route::get('storage', function () {
    Artisan::call('storage:link');
    return 'success';
});


