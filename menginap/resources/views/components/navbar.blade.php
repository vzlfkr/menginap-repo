<header>
    <h1>menginap</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            @auth
            {{-- fungsi logout harus pake form action dan method post --}}
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
                {{-- <li><a href="/logout">Logout</a></li> --}}
                <li><a>welcome back, {{ auth()->user()->name }}</a></li>
            @else
                <li><a href="/register">register</a></li>
                <li><a href="/login">Login</a></li>
            @endauth
        </ul>
    </nav>
</header>
