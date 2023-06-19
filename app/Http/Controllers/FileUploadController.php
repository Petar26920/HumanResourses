<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
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
        'file.*' => 'file|mimes:pdf,docx,doc|max:15360', // Specify the allowed file extensions here
    ]);

    if ($request->hasFile('file')) {
        $files = $request->file('file');
        $uploadedFiles = [];

        foreach ($files as $file) {
            if ($file->isValid()) {
                $originalName = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();

                $fileName = $this->generateUniqueFileName($originalName, $extension);

                // Move the file to the desired location with the new name
                $file->storeAs('uploads', $fileName);

                $uploadedFiles[] = $fileName;
            }
        }

        if (!empty($uploadedFiles)) {
            return view('client');
        }
    }

    return response()->json(['message' => 'No files uploaded'], 400);
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
