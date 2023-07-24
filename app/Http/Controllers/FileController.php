<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FileController extends Controller
{

public function download($user_id)
{   $filePath = storage_path('app/uploads/'.$user_id.'.pdf');
    
    // Check if the file exists
    if (!Storage::exists('uploads/'.$user_id.'.pdf')) {
        abort(404);
    }
    return response()->download($filePath, $user_id.'.pdf');
}

        
}

