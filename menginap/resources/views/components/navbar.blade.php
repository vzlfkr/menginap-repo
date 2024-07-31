<header>
    <h1>menginap</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            @auth
                <li><a href="{{ route('logout') }}" class="nav-link px-3">Sign out</a></li>
                <li><a>welcome back, {{ auth()->user()->name }}</a></li>
            @else
                <li><a href="/register">register</a></li>
                <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </nav>
</header>
