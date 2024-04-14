@extends('layouts.app')

@section('content')
    <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">

  <script src="{{ asset('assets/js/custom.js') }}"></script>

    <div class="container content">
        <div class="form-container">

            <p class="title">Welcome back  {{ __('Login') }}</p>
            <form method="POST" action="{{ route('login') }}" class="form">
                @csrf
                <input  id="email" type="email"  class="form-control input @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email','hanzalakhan101010@gmail.com') }}" placeholder="Business Email " required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" placeholder="Valid Password " id="password"
                    class="form-control input @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
                <div class="col-md-8 offset-md-4">


                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

                <div class="form-check">
                    <input class="form-check-input" class="input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button class="form-btn">Log in</button>
            </form>
            <p class="sign-up-label">
                Don't have an account?<span class="sign-up-link">
                    <a href="{{ route('register') }}">Sign up</a></span>
            </p>

        </div>

    </div>

       {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "timeOut": 10000,
                "showMethod": "slideDown",
                "hideMethod": "slideUp",
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "closeButton": true,
                "progressBar": true,
            };


            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
    <style>
        .toast {
            background-color: rgb(8, 226, 48) !important;
            color: rgb(16, 13, 13) !important;
        }
    </style>

@endsection
