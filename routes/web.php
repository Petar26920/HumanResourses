<?php

<<<<<<< Updated upstream
use Illuminate\Support\Facades\Auth;
=======
use App\Http\Controllers\ProfileController;
>>>>>>> Stashed changes
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

Route::get('/userManagment', function () {
    return view('userManagmentPage');
});

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< Updated upstream
Route::get('/userManagmentPage', function () {
    
    return view('userManagmentPage');

})->middleware('auth');

Route::get('/login', function () {
    return view('login');
})->name('login');
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
>>>>>>> Stashed changes
