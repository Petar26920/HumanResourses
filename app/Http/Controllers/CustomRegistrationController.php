<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User; // Import the User model

//

use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class CustomRegistrationController extends Controller
{
    //
    public function showRegistrationForm()
    {
        // return view('custom.register');
        return view('/userManagmentPage');
    }


public function register(Request $request)
{
  
    $request->validate([
        'firstname' => ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
        'phonenum' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        'role' => ['required', 'string', 'max:10'],
        'password' => ['required', 'string'],
    ]);

    $user = User::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'phonenum' => $request->phonenum,
        'email' => $request->email,
        'role' => $request->role,
        'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));


    //To login after registration
    // auth()->login($user);

    // Perform any additional actions or redirects as needed

    return redirect('/userManagmentPage'); // Redirect the user to a specific page after successful registration
}



}
