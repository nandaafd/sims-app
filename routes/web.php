<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ProdukController;
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

Route::middleware(['auth'])->group(function (){
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('produk', ProdukController::class);  
    Route::get('download', [ExportController::class, 'export']);
});
Route::get('migrate-first', function () {
    Artisan::call('migrate --path=database/migrations/2023_09_30_093118_create_kategoris_table.php');
    return 'success';
});
Route::get('migrate-sec', function () {
    Artisan::call('migrate');
    return 'success';
});
Route::get('seed-first', function () {
    Artisan::call('db:seed --class=UserSeeder');
    return 'success';
});
Route::get('seed-sec', function () {
    Artisan::call('db:seed --class=KategoriSeeder');
    return 'success';
});
Route::get('storage', function () {
    Artisan::call('storage:link');
    return 'success';
});


