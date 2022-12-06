<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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


//FrontEnd
Route::get('/', [IndexController::class, 'index']);
Route::get('/index', [IndexController::class, 'index']);
Route::get('/aboutUs', [IndexController::class, 'aboutUs']);
Route::get('/benefits', [IndexController::class, 'benefits']);
Route::get('/benefitsDetail', [IndexController::class, 'benefitsDetail']);
Route::get('/contactUs', [IndexController::class, 'contactUs']);
Route::get('/newsDetail/news{id?}', [IndexController::class, 'newsDetail']);
Route::get('/service', [IndexController::class, 'service']);
Route::get('/serviceDetail', [IndexController::class, 'serviceDetail']);
Route::post('/contactUs/store', [IndexController::class, 'store']);



//--BackEnd
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
