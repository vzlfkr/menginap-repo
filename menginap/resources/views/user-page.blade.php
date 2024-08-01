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
    <title>Profile || Menginap</title>
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
                <div class="div-img">
                    @if(auth()->user()->image)
                    <img src="{{ asset('images/' . auth()->user()->image) }}" alt="Profile Image" class="img-thumbnail">
                @else
                    <img src="/image/img-placeholder-square.jpg" alt="Profile Placeholder">
                @endif
                <div class="div-8">
                    <form action="{{ route('user.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Image Upload Field -->
                        <div class="form-group">
                            {{-- <label for="image">Profile Image</label> --}}
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
    <label for="image"></label>
    @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Apply Change</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.footer')
</body>

</html>
