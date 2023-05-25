<?php

use App\Http\Controllers\ProfileController;
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


//Working
Route::get('/userManagmentPage', 'App\Http\Controllers\CustomRegistrationController@showRegistrationForm');
Route::post('/userManagmentPage', 'App\Http\Controllers\CustomRegistrationController@register');
// Route::get('/custom-register', 'App\Http\Controllers\CustomRegistrationController@showRegistrationForm');
// Route::post('/custom-register', 'App\Http\Controllers\CustomRegistrationController@register');





// Route::get('/userManagement', function () {
//     return view('userManagmentPage');
// });

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

// Route::get('/userManagmentPage', function () {
//     return view('userManagmentPage');
// });


Route::get('/client', function () {
    return view('client');
});

require __DIR__ . '/auth.php';

