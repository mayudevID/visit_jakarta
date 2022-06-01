<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" type="text/css">
        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css" type="text/css">
        <!-- Unicons (Icons) -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <title>Visit Jakarta | Login</title>
    </head>
    <body>
        @include('partials.navbar')
        <!-- Scroll top button -->
        <button onclick="topFunction()" class="btn btn-purple" id="myBtn" title="Go to top">
            <i class="uil uil-arrow-up"></i>
        </button>
        <!-- Akhir scroll top button -->

        <main>
            <section id="login">
            <div class="container login-wrapper d-flex flex-column justify-content-center align-items-center">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>            
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>            
            @endif    
            <h3 class="fw-bolder">Login</h3>
                <form action="/login" class="form-wrapper" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus require value="{{ old('email') }}">
                        @error('email')
                           <div class="invalid-feedback">
                               {{ $message }}
                            </div>     
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata sandi</label>
                        <input type="password" name="password" class="form-control" id="password" require>
                    </div>
                    <div class="btn-wrapper d-flex flex-column justify-content-center align-items-center">
                        <button type="submit" class="btn btn-purple" style="width: 120px;">Login</button>
                    </div>
                </form>
            </div>
            </section>
        </main>
        <script src="./js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>