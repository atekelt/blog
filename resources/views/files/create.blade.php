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
    <h1 class="terminal-text">_Upload File$ <span class="cursor">_</span></h1>
    <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data">
        @csrf
        <label>Title:</label>
        <input class="input" type="text" name="title" required>

        <label>Description:</label>
        <textarea class="textarea" name="description" required></textarea>

        <label>Markdown File (.md only):</label>
        <input class="input" type="file" name="file" accept=".md" required>

        <button type="submit">Upload</button>
    </form>
</div>
@endsection
