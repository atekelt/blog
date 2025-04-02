<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('components.head')
    </head>
    <body class="container">
        @include('components.navbar')
        <p>this is a nav bar</p>
        <a href="">Link 1</a>
        <div class="container">
            <h1>Terminal Blog</h1>
        
                <div class="post">
                    <h2>title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quisquam dignissimos exercitationem distinctio aliquam repudiandae, cumque libero, dolore dolores similique magni consequuntur accusantium tenetur harum. Saepe incidunt quisquam mollitia eveniet?</p>
                    <a href="#">{{ __('Read More') }}</a>
                </div>
        </div>
    </body>
</html>
