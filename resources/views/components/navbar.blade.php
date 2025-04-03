<nav class="navbar">
    <div class="brand">_TerminalBlog$</div>
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>
    <ul class="nav-links">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        @auth
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                    @csrf
                </form>
            </li>
            <li><a href="{{ route('files.create') }}">Upload</a></li>
            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
        @else
            <li><a href="{{ url('/login') }}">Login</a></li>
        @endauth
    </ul>
</nav>