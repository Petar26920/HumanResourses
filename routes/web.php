<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FileUploadController;

//Added
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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




Route::get('/client', [FileUploadController::class, 'index'])->name('client.index');
Route::post('/client', [FileUploadController::class, 'upload'])->name('client.upload');


Route::get('/proba', function () {
    return view('proba');
});


Route::get('/login2', function () {
    return view('login');
});

// Route::get('/login',function(){
//     return view('login');
// });
require __DIR__ . '/auth.php';

