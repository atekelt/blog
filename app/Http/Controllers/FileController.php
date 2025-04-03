<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function index()
    {
        $files = File::paginate(10);
        return view('files.index', compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'file' => 'required|file|max:2048|mimes:txt,md', 
    ]);

    $file = $request->file('file');
    
    $fileName = time() . '_' . $file->getClientOriginalName();

    $filePath = public_path('uploads/' . $fileName);

    $file->move(public_path('uploads'), $fileName);

    File::create([
        'title' => $request->title,
        'description' => $request->description,
        'file_name' => $fileName,
        'file_path' => 'uploads/' . $fileName, 
    ]);

    return redirect('/')->with('success', 'File uploaded successfully.');
}



    public function edit(File $file)
    {
        return view('files.edit', compact('file'));
    }

    public function update(Request $request, File $file)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|mimes:md|max:2048'
        ]);

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
            $file->file_path = $filePath;
            $file->file_name = $request->file('file')->getClientOriginalName();
        }

        $file->title = $request->title;
        $file->description = $request->description;
        $file->save();

        return redirect()->route('files.index')->with('success', 'File updated successfully.');
    }

    public function destroy(File $file)
    {
        $file->delete();
        return redirect()->route('files.index')->with('success', 'File deleted successfully.');
    }
}
