<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Added
use Yajra\DataTables\DataTables;
use App\Models\User;

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


//Rute za userManagment stranicu
Route::get('/userManagmentPage', 'App\Http\Controllers\CustomRegistrationController@showRegistrationForm');
Route::post('/userManagmentPage', 'App\Http\Controllers\CustomRegistrationController@register');
Route::get('users-data', function () {
    $users = User::select('role','firstname', 'lastname', 'email')->get();

    return DataTables::of($users)
        ->addColumn('action', function ($user) {
            return '<td>
            <button type="button" class="btn crvena">Info</button>
            <button type="button" class="btn siva">Edit</button>
            <button type="button" class="btn crna">Delete</button>
        </td>';
        })
        ->rawColumns(['action'])
        ->toJson();
});



//

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


Route::get('/client', function () {
    return view('client');
});

Route::get('/login',function(){
    return view('login');
});
require __DIR__ . '/auth.php';

