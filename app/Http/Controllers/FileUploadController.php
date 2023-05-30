<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class FileUploadController extends Controller
{
    public function index()
    {
        return view('client');
    }
    public function upload(Request $request)
    {
    
      // Validate the uploaded file
    $request->validate([
        'file' => 'required|file',
    ]);

    // Retrieve the uploaded file
    $file = $request->file('file');

    // Generate a unique filename
    $filename = uniqid().'.'.$file->extension();

    // Store the file in the specified directory
    $path = $file->storeAs('uploads', $filename);

    // Alternatively, if you want to store the file in the storage/app/uploads directory
    // without preserving the original filename, you can use the store() method:
    // $path = $file->store('uploads');

    // You can now perform additional actions with the uploaded file path,
    // such as storing it in the database or displaying a success message to the user

    return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}
