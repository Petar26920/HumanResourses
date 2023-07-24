<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('client');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|array',
            'file.*' => 'file|mimes:pdf,docx,doc|max:15360',
        ]);

        $authenticatedUser = auth()->user(); // Get the authenticated user model

        if ($request->hasFile('file')) {
            $files = $request->file('file');
            $uploadedFiles = [];

            foreach ($files as $file) {
                if ($file->isValid()) {
                    $extension = $file->getClientOriginalExtension();

                    // Construct the file name using the authenticated user's ID and the extension
                    $fileName = $authenticatedUser->id . '.' . $extension;

                    // Move the file to the desired location with the new name
                    $file->storeAs('uploads', $fileName);
                    $absolutePath = public_path('uploads/' . $fileName);

                    // Update the authenticated user's CV
                    $authenticatedUser->CV = $fileName;
                    $uploadedFiles[] = $fileName;
                }
            }

            if (!empty($uploadedFiles)) {
                $authenticatedUser->save(); // Save the updated CV in the database
                return redirect()->back()->with('success', 'File uploaded successfully.');
            }
        }

        return redirect()->back()->with('error', 'No file uploaded.');
    }
}
