@extends('layouts.app')

@section('content')
<div class="container terminal-upload">
    {{-- <h1 class="terminal-text">_Uploaded Files$ <span class="cursor">_</span></h1> --}}

    <!-- Files display as cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($files as $file)
        <div class="container my-5">
            <h3 class="text-xl font-semibold">{{ $file->title }}</h3>
            <p class="text-sm text-gray-400">{{ $file->description }}</p>
            <p class="text-xs text-gray-500 mt-2">Filename: {{ $file->file_name }}</p>

            <div class="mt-4 row">
               <div class="col-md m-2"> 
                    <a href="{{ asset('uploads/' . $file->file_name) }}" class=" py-2 px-4 rounded" download>
                        Read More
                    </a>
                </div>
                <div class="col-md m-2"> 
                    <a href="{{ asset('uploads/' . $file->file_name) }}" class=" py-2 px-4 rounded" download>
                        Download
                    </a>
                </div>
               <div class="col-md m-2"> 
                    @auth
                    <form action="{{ route('files.destroy', $file->id) }}" method="POST" class="inline-block ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
            <hr>
        </div>
        @endforeach
    </div>

    <div>
        {{ $files->links() }}
    </div>
</div>
@endsection
