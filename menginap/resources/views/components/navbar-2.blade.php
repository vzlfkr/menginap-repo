<header>
    <nav>
        <div class="left-nav" onclick="window.location.href='/#'  ">
            <img src="/image/menginap-logo.png" alt="Menginap Logo Home">
            <h1>MENGINAP</h1>
        </div>
        <div class="center-nav">
            <a href="/" id="home">Home</a>
            <a href="#" id="hotel-list">Hotel List</a>
            <a href="#" id="about-us">About Us</a>
        </div>
        <div class="right-nav-case">
            @auth
            <div class="right-nav">
                <i class="fa-solid fa-user fa-2x"></i>
                <h1>Profile</h1>
            </div>
            <div class="dropdown">
                <button class="my-profile" onclick="window.location.href=''">My Profile</button>
                <button class="logout" onclick="window.location.href=''">Logout</button>
            </div>
            @else
            <div class="right-nav">
                <button>Sign In</button>
                <button>Register</button>
            </div>
            @endauth
        </div>
    </nav>
</header>
