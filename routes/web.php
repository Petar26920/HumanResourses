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
//Dodao sam ovu sa middleware-om - Sladjan, route::get, isao sam i u middleware da promenim neke stvari 
//Route::get('/userManagmentPage', 'App\Http\Controllers\CustomRegistrationController@showRegistrationForm');
Route::get('/userManagmentPage', 'App\Http\Controllers\CustomRegistrationController@showRegistrationForm')->middleware(['auth', 'verified'])->name('dashboard');
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

// ovo mi trebalo za login da namestim, ovo je trenutno resenje, premestio sam da radi sa login i logout dugme isto radi, jedino sto
//  se loguje s aemailom al popravicu da bude sa username-om, bilo mi bitno da radi samo prvo - Sladjan
Route::get('/login2', function () {
    return view('login');
})->name('login2');

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

