<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login - Customer e-Services</title>

    <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->

        <link rel="stylesheet" href="Login1.css">

        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Font Awesome JS -->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    </head>

    <body>
        <div class="row justify-content-center">
            <div class="col-md-5">

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                  @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif


                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <form action="/login" method="post">
                        @csrf
                      <div class="form-floating">
                        <input type="email" class="form-control @error('email')
                        is-invalid
                        @enderror" id="floatingInput" placeholder="name@example.com" name="email" id="email" autofocus required value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{-- invalid-feedback dari bootstrap --}}
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" id="password" required>
                        <label for="floatingPassword">Password</label>
                      </div>

                      <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                      </div>
                      <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-3">Not register? <a href="/register">Register Now</a></small>
                  </main>
            </div>
        </div>

    </body>
</html>
