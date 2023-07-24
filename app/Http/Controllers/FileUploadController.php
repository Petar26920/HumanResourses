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
        $emailInput = $request->input('email-label');

        $users = User::all();

        $request->validate([
            'file' => 'required|array',
            'file.*' => 'file|mimes:pdf,docx,doc|max:15360',
        ]);

        if ($request->hasFile('file')) {
            $files = $request->file('file');
            $uploadedFiles = [];

            foreach ($files as $file) {
               

                    

                    foreach ($users as $user) {
                        $email = $user->email;
                    
                        if ($file->isValid()) {
                            $originalName = $file->getClientOriginalName();
                            $extension = $file->getClientOriginalExtension();
        
                            $fileName = $user->id ."." .$extension;
        
                            // Move the file to the desired location with the new name
                            $file->storeAs('uploads', $fileName);
                            $absolutePath = public_path('uploads/' . $fileName);
                            
                            $uploadedFiles[] = $fileName;
                            $user->CV = "AA";
                            $user->CV = $user->id;
                            $user->save();
                            break; // Exit the loop if found matching email
                        
                    }
                }
            }

            if (!empty($uploadedFiles)) {
                return redirect()->back()->with('success', 'Files uploaded successfully.');
            }
        }

        return redirect()->back()->with('error', 'No files uploaded.');
    }

    private function generateUniqueFileName($originalName, $extension)
    {
        $baseName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME));
        $fileName = $baseName . '.' . $extension;
        $counter = 1;

        // Check if a file with the same name already exists
        while (Storage::exists('uploads/' . $fileName)) {
            $fileName = $baseName . '-' . $counter . '.' . $extension;
            $counter++;
        }

        return $fileName;
    }
}
