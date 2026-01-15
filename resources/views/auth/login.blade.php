{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

<!-- Theme Config Js -->
<script src="{{ asset('backend/assets/js/config.js') }}"></script>

<!-- Vendor css -->
<link href="{{ asset('backend/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

<!-- App css -->
<link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="h-100">

    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-start">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card overflow-hidden text-center p-xxl-4 p-3 mb-0">
                    <a href="" class="auth-brand mb-4">
                       

                    </a>

                    <h4 class="fw-semibold mb-2 fs-18">Admin Login</h4>

                   <form method="POST" action="{{ route('login') }}" class="text-start">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label" for="example-email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                              @error('email')
                                  <small class="text-danger d-block mt-1">{{ $message }}</small>
                              @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="example-password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">

                             @error('password')
                                  <small class="text-danger d-block mt-1">{{ $message }}</small>
                              @enderror
                        </div>

                        {{-- <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" name="remember" for="checkbox-signin">Remember me</label>
                            </div>

                            <a href="{{ route('password.request') }}" class="text-muted border-bottom border-dashed">Forget Password</a>
                        </div> --}}

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit">Log In</button>
                        </div>
                    </form>
                </div>

                <div class="text-center mt-3">
                    {{-- <p class="fs-14 mb-4">Don't have an account? <a href="{{ route('register') }}" class="fw-semibold text-danger ms-1">Register !</a></p> --}}

                    <p class="mt-auto mb-0">
                        <script>document.write(new Date().getFullYear())</script> © Blackbase <a href="" target="_blank" class="fw-bold text-decoration-underline text-uppercase text-reset fs-12"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
<!-- Vendor js -->
<script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>


</body>

</html>
