<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function store(Request $request)
    {
            return view('client');

        
        //  // Access the uploaded files
        //  if ($request->hasFile('file')) {
        //     $files = $request->file('file');

        //     // Process each uploaded file
        //     foreach ($files as $file) {
        //         // Perform necessary operations with the file
        //         $filename = $file->getClientOriginalName();
        //         $file->move(public_path('uploads'), $filename);
        //         // ... Additional processing
        //     }
            
        // }
    }
}
