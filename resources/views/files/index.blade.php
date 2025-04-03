@extends('layouts.app')

@section('content')
<div class="container terminal-upload">
    <h1 class="terminal-text">_Uploaded Files$ <span class="cursor">_</span></h1>

    <!-- Files display as cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($files as $file)
        <div class="">
            <h3 class="text-xl font-semibold">{{ $file->title }}</h3>
            <p class="text-sm text-gray-400">{{ $file->description }}</p>
            <p class="text-xs text-gray-500 mt-2">Filename: {{ $file->file_name }}</p>

            <div class="mt-4">
                <!-- Download Link -->
                <a href="{{ asset('uploads/' . $file->file_name) }}" class="bg-green-500 hover:bg-green-700 text-white py-2 px-4 rounded" download>
                    Download
                </a>

                <!-- Show delete button only if user is logged in -->
                @auth
                <form action="{{ route('files.destroy', $file->id) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded">
                        Delete
                    </button>
                </form>
                @endauth
            </div>
        </div>
        @endforeach
    </div>

    <div>
        {{ $files->links() }}
    </div>
</div>
@endsection
