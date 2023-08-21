<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\Product_categoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarrantyController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use App\Services\Permission\Traits\HasPermissions;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;


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
    // auth()->user()->givePermissionsTo(['delete post','delete user']);
});
Route::get('/dashboard', function () {
    return view('panel.other.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('panel.other.dashboard');
// });
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('/admins',UserController::class);
Route::resource('/product',ProductController::class);
Route::resource('/category',Product_categoryController::class);
Route::resource('/warranty',WarrantyController::class);
Route::post('/warrantys',[WarrantyController::class,'welcome'])->name('warrantys');
Route::get('/servicee',[ServiceController::class,'asqar'])->name('servicee');
Route::resource('/service',ServiceController::class);
// Route::resource('/dashboard', WarrantyController::class);
// Route::resource('/dsah', UserController::class);

//Route::get('/delete/{id}', [UserController::class, 'destroy']);

require __DIR__.'/auth.php';
