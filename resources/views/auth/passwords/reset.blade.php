@extends('layouts.app')

@section('content')

 <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="container content">
        <div class="form-container">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row pt-4">


                            <div class="col">
                                <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Enter your valid Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pt-3">


                            <div class="col">
                                <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required placeholder="Enter your Password*" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pt-3">


                            <div class="col-">
                                <input id="password-confirm" type="password" class="form-control input" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="form-btn">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
