<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kanakku - Bootstrap Admin HTML Template</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2" src="assets/img/logo.png" alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <!-- <input type="email" class="form-control"> -->
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <!-- <input type="password" class="form-control pass-input"> -->
                                        <input id="id_password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password"> @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <span class="fas fa-eye toggle-password" id="togglePassword"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            {{-- <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cb1">
                                                <label class="custom-control-label" for="cb1">Remember me</label>
                                            </div> --}}
                                        </div>
                                        {{-- <div class="col-6 text-end">
                                             @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 14px;">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </div> --}}
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
                                {{-- <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div> --}}
                                {{-- 
                                <div class="social-login mb-3">
                                    <span>Login with</span>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a
                                        href="#" class="google"><i class="fab fa-google"></i></a>
                                </div>--}}

                                <div class="text-center dont-have">Don't have an account yet? <a 
                                href="{{route('register')}}">Register</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="assets/js/feather.min.js"></script> --}}

    <script src="assets/js/script.js"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>


</html>
