<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ __(':: Login App ::') }}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description"
        content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description"
        content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="../../elephant.html">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title"
        content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description"
        content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="../../elephant.html">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets') }}/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="{{ asset('assets') }}/manifest.json">
    <link rel="mask-icon" href="{{ asset('assets') }}/safari-pinned-tab.svg" color="#1c90fb">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/elephant.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/login-3.min.css">
</head>

<body>
    <div class="login">
        <div class="login-body">
            <a class="login-brand" href="{{ asset('assets/') }}/index.html">
                <img class="img-responsive" src="{{ asset('assets') }}/img/logo.svg" alt="Elephant">
            </a>
            <h3 class="login-heading">{{ __('Login') }}</h3>
            <div class="login-form">
                <form method="POST" action="{{ route('login') }}" data-toggle="md-validator">
                    @csrf
                    <div class="md-form-group md-label-floating">
                        <input class="md-form-control" type="username" name="username" spellcheck="false"
                            autocomplete="off" data-msg-required="Please username required." required>
                        <label class="md-control-label">Username</label>
                        @if ($errors->has('username'))
                            <br />
                            <b>
                                <strong style="color: red">{{ $errors->first('username') }}</strong>
                            </b>
                        @endif
                    </div>
                    <div class="md-form-group md-label-floating">
                        <input class="md-form-control" type="password" name="password" minlength="3"
                            data-msg-minlength="Password must be 3 characters or more."
                            data-msg-required="Please enter your password." required>
                        @if ($errors->has('password'))
                            <b>
                                <strong>{{ $errors->first('password') }}</strong>
                            </b>
                        @endif
                        <label class="md-control-label">Password</label>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </div>
        <div class="login-footer">

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </div>
    <script src="{{ asset('assets') }}/js/vendor.min.js"></script>
    <script src="{{ asset('assets') }}/js/elephant.min.js"></script>

</body>


</html>
