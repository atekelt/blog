@extends('layouts.app')

@section('content')
<div class="container terminal-upload">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <h1 class="terminal-text">_Edit File$ <span class="cursor">_</span></h1>
    <div class="container">
        <form action="{{ route('files.update', $file->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <label>Title:</label>
            <input class="input" type="text" name="title" value="{{ $file->title }}" required>
            
            <label>Description:</label>
            <textarea class="textarea" name="description" required>{{ $file->description }}</textarea>
            
            <label>Current File:</label>
            <a href="{{ asset($file->file_path) }}" class="terminal-link" download>{{ $file->file_name }}</a>
            
            <label>Upload New File (optional):</label>
            <input class="input" type="file" name="file" accept=".md">
            
            <div class="button-group">
                <a href="/" class="button cancel">Cancel</a>
                <button type="submit" class="py-2 px-4 rounded">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
