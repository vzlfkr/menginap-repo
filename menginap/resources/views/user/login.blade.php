<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign In || Menginap</title>
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/register.css">
  <link rel="stylesheet" href="/css/footer.css">
  <script src="https://kit.fontawesome.com/bf51598d13.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

@include('components.navbar')
<section class="vh-100 bg-image"
style="background-image: url('/image/login-img.png'); object-fit: contain;">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">LOGIN</h2>

            <form action="/login" method="POST">
              @csrf
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" autofocus required value="{{ old('email') }}"/>
                <label class="form-label" for="email">Your Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control form-control-lg" required/>
                <label class="form-label" for="password">Password</label>
              </div>

              <div class="d-flex justify-content-center">
                <button  type="submit" data-mdb-button-init
                  data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
              </div>

              <p class="text-center text-muted mt-5 mb-0">Dont have an account? <a href="/register"
                  class="fw-bold text-body"><u>Register here</u></a></p>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>>
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
