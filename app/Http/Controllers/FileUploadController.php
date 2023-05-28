<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FileUploadController extends Controller
{
    public function index()
    {
        return view('client');
    }
    public function store(Request $request)
    {
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $file->move(storage_path('app/uploads'), $fileName);
            return response()->json(['message' => 'File uploaded successfully']);
        }
        return response()->json(['message' => 'No file uploaded'], 400);
    }
}