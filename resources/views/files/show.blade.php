@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="shadow-md p-6 rounded-lg">
        {!! $htmlContent !!}
    </div>
    <hr width="50%">
    <a href="{{ route('files.index') }}" class=" py-2 px-4 rounded"><i class="bi bi-arrow-left"></i> Back</a>
</div>
@endsection
