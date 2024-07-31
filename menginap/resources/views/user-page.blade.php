<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/user-page.css">
    <link rel="stylesheet" href="/css/footer.css">
    <script src="https://kit.fontawesome.com/bf51598d13.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    @include('components.navbar')
    <section>
        <div class="div-1">
            <div class="div-2">
                @auth
                <div class="div-4">
                    <p><span>Hi, </span>{{ auth()->user()->name }}</p>
                </div>
                <div class="div-5">
                    <h3>Full Name</h3>
                    <p>{{ auth()->user()->name }}</p>
                </div>
                <div class="div-6">
                    <h3>E-mail</h3>
                    <p>{{ auth()->user()->email }}</p>
                </div>
                <div class="div-7">
                    <h3>Contact Number</h3>
                    <p>{{ auth()->user()->noHp }}</p>
                </div>
                @endauth
            </div>
            <div class="div-3">
                <img src="/image/img-placeholder-square.jpg" alt="Profile Placeholder">
            </div>
        </div>
    </section>
    @include('components.footer')
</body>

</html>
