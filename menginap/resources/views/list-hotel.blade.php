<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <link rel="stylesheet" href="/css/list-style.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/css/footer-list.css">
</head>
<body>
@include('components.navbar')
    <div class="header">
        <div class="slider">
            @foreach ($posts as $post)
            <div class="slide active">
                @if($post->image_post)
                    <img src="{{ asset('images/' . $post->image_post) }}" alt="{{ $post->title }}" >
                @endif
                <div class="caption">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <section class="hotels">
        <h2 style="margin-top: 10px;">Check these hotels you might interested in!</h2>
        <div class="hotel-cards">
            @foreach ($posts as $post)
            <div class="hotel-card">
                @if($post->image_post)
                    <img src="{{ asset('images/' . $post->image_post) }}" alt="{{ $post->title }}">
                @endif
                <h3>{{ $post->title }} </a></h3>
                <p>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
    </section>
    @include('components.footer-list')
    <script src="js/list-script.js"></script>
</body>
</html>
