<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                    $fileName = $file->getClientOriginalName();
                    $file->move(storage_path('app/uploads'), $fileName); //where to move
                    $uploadedFiles[] = $fileName;
                }
            }

            if (!empty($uploadedFiles)) {
                return view('client');
            }
        }

        return response()->json(['message' => 'No files uploaded'], 400);
    }
}
