<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treemium </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->


    <link rel="stylesheet" href="{{ asset('/css/style-en.css') }}">
</head>

<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <div class="authincation">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center">
                    <div class="col-xl-5 col-md-6">
                        <div class="mini-logo text-center">
                            <a href="landing.html"><img src="./images/logo.png" alt=""></a>
                        </div>
                        <div class="auth-form card">
                            <div class="card-header justify-content-center">
                                <h4 class="card-title">Sign up your account</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" name="myform" class="signup_validate"
                                    action="{{ route('register') }}">
                                    @csrf
                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                            placeholder="hello@example.com" name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            placeholder="Password" name="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>confirm password</label>
                                        <input type="password"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            placeholder="password confirmation" name="password_confirmation">

                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-success w-100">Sign up</button>
                                    </div>
                                </form>
                                <div class="text-center mt-3">
                                    <a href="{{ route('login.google') }}" class="text-center btn btn-google w-100">
                                        Continue with google
                                    </a>
                                </div>

                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary"
                                            href="{{ route('login') }}">Sign in</a>
                                    </p>
                                </div>
                                <hr>
                                <p class="quiet tos"> By signing up, you confirm that you've read and accepted our
                                    <a class="text-primary" href="/legal" target="_blank"
                                        data-analytics-event="clickedSignUpTOSLink">Terms
                                        of Service</a> and <a class="text-primary" href="/privacy" target="_blank"
                                        data-analytics-event="clickedSignUpPrivacyLink">Privacy Policy</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="./vendor/validator/jquery.validate.js"></script>
    <script src="./vendor/validator/validator-init.js"></script>
    <script src="./js/scripts.js"></script>



</body>

</html>
