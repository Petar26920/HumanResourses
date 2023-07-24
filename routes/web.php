<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FileUploadController;


//Added
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FileController;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Storage;
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

Route::get('storage/app/uploads/{user_id}', [FileController::class, 'download'])->name('file.download');


Route::post('/userManagmentPage', 'App\Http\Controllers\CustomRegistrationController@register');
//Download button
Route::get('storage/app/uploads/{user_id}', [FileController::class, 'download'])->name('file.download');
//Delete button in datatable
Route::post('users/{user_id}/delete', [UserController::class, 'destroy'])->name('user.delete');

Route::get('users-data', function () {
    $users = User::select('id', 'role', 'firstname', 'lastname', 'email')->get();
    
    return DataTables::of($users)
        ->addColumn('action', function ($user) {
            $userFile = 'uploads/'.$user->id.'.pdf';
 
            // JavaScript confirmation function
            $deleteConfirmation = "return confirm('Are you sure you want to delete this user?');";
            
            return '<td>
                <button type="button" class="btn crvena">Info</button>
                <button type="button" class="btn siva">Edit</button>
                <button type="button" class="btn crna" data-userid="'.$user->id.'" onclick="confirmDelete(this)">Delete</button>
 
            </td>';
        })->addColumn('download', function ($user) {
            $userFile = 'uploads/'.$user->id.'.pdf';
            $downloadButton = Storage::exists($userFile)
                ? '<a href="'.route('file.download', ['user_id' => $user->id]).'" style="background-color:#f1f1f1;" class="btn"><img width="24" src="images/navbarIkone/download.png" alt="Ikona dugmeta"></a>'
                : '';

            return $downloadButton;
        })
        ->rawColumns(['action','download'])
        ->toJson();
});


//  

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

