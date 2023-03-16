<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguystech.com/preadmin/html/invoice/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 15:31:09 GMT -->

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
                            <h1>Register</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Email Address</label>
                                    <!-- <input class="form-control" type="text"> -->
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <!-- <input class="form-control" type="text"> -->
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Confirm Password</label>
                                    <!-- <input class="form-control" type="text"> -->
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="form-group mb-0 text-end">
                                    <!-- <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Register</button> -->
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
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
</body>

<!-- Mirrored from dreamguystech.com/preadmin/html/invoice/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 15:31:09 GMT -->

</html>