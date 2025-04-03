@extends('layouts.app')

@section('content')
<div class="container terminal-list">
    <h1 class="terminal-text">_Uploaded Files$ <span class="cursor">_</span></h1>

    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif
    
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>File Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($files as $file)
                <tr>
                    <td>{{ $file->title }}</td>
                    <td>{{ $file->description }}</td>
                    <td>{{ $file->file_name }}</td>
                    <td>
                        <a href="{{ asset('uploads/' . $file->file_name) }}" download>Download</a>
                        <form action="{{ route('files.destroy', $file) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
