<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
{
    $user = Auth::user();

    // Validate the request data
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'phonenum' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'address' => 'nullable|string|max:255',
        'birth_date' => 'nullable|date',
    ]);

    // Update the user attributes with the validated data
    $user->update($request->all());

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Profile updated successfully.');
}

}
