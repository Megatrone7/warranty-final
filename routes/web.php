<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleteController;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Product_categoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarrantyController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use App\Services\Permission\Traits\HasPermissions;
use App\Models\User;
use App\Models\Warranty;
use Spatie\Permission\Traits\HasRoles;
use App\Http\Controllers\PrintController;


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
    return view('welcome');
});
Route::get('code', function () {
    return view('code');
   
});
Route::post('/code',[WarrantyController::class,'code'])->name('code');

Route::get('/dashboard', function () {
    return view('panel.other.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// Route::resource('/service',ServiceController::class);
     
Route::resource('/product',ProductController::class);
Route::resource('/category',Product_categoryController::class);
});
Route::middleware(['auth','Admin'])->group(function () {
    Route::resource('/admins',UserController::class);
    Route::resource('/warranty',WarrantyController::class);
    Route::resource('/service',ServiceController::class);
});
Route::get('/qr-code',[App\Http\Controllers\QrcodeController::class,'view'])->name('add-qr-code');
Route::get('/print',[PrintController::class,'index'])->name('print');
Route::get('/print/{id}',[PrintController::class,'index']); 
Route::resource('/dashboard', WarrantyController::class);
Route::post('/warrantys',[WarrantyController::class,'welcome'])->name('warrantys');
Route::get('/service/create/{ss}',[ServiceController::class,'create']);
Route::get('/service',[ServiceController::class,'index']);
require __DIR__.'/auth.php';
