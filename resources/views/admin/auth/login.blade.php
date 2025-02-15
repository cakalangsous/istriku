<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset("assets/css/main/app.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/pages/auth.css") }}">
    <link rel="shortcut icon" href="{{ asset("assets/images/logo/favicon.svg") }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("assets/images/logo/favicon.png") }}" type="image/png">
</head>

<body>
    <div id="auth">
        
        <div class="row h-100">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href=""><img src="{{ asset("assets/images/logo/logo.svg") }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in</h1>
                    <p class="auth-subtitle mb-4">Please login to access the admin portal.</p>

                    @error('login')
                        <div class="alert alert-light-danger color-danger">
                            <i class="bi bi-exclamation-circle"></i> {{ $message }}
                        </div>
                    @enderror

                    <form action="{{ route("admin.login") }}" method="post" data-parsley-validate>
                        @csrf
                        <div class="form-group mandatory position-relative has-icon-left mb-4 @error("email") is-invalid @enderror">
                            <label for="first-name-column" class="form-label d-none">Email</label>
                            <input type="email" name="email" class="form-control form-control-l" value="{{ old("email") }}" placeholder="Username" data-parsley-required="true" autofocus>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                                <span class="parsley-required">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mandatory position-relative has-icon-left mb-4">
                            <label for="first-name-column" class="form-label d-none">Password</label>
                            <input type="password" name="password" class="form-control form-control-l" placeholder="Password" data-parsley-required="true">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <span class="parsley-required">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset("assets/extensions/jquery/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/extensions/parsleyjs/parsley.min.js") }}"></script>
    <script src="{{ asset("assets/js/pages/parsley.js") }}"></script>
</body>
</html>
