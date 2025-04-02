<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Terminal Blog</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
<!-- Styles / Scripts -->
{{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    <style>
    </style>
@endif --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])