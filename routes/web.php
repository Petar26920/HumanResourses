<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FileUploadController;

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

Route::get('/userManagement', function () {
    return view('userManagmentPage');
});

Route::get('/navLajout', function () {
    return view('proba');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/userManagmentPage', function () {
    return view('userManagmentPage');
});




Route::get('/client', [FileUploadController::class, 'index'])->name('client.index');
Route::post('/client', [FileUploadController::class, 'upload'])->name('client.upload');


Route::get('/proba', function () {
    return view('proba');
});


Route::get('/login2', function () {
    return view('login');
});

require __DIR__ . '/auth.php';

