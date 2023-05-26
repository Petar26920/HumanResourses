<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
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
            
            foreach ($files as $file) {
                $path = $file->store('uploads');
                

            }

           return redirect('client');
        }
        return redirect('client');
       
    }
}
?>
