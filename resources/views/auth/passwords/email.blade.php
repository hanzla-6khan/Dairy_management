@extends('layouts.app')

@section('content')

 <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">

                 <div class="container content">
        <div class="form-container">
        <div class="col">

                <div class="card-header">{{ __('Reset Password') }}</div>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row pt-4">


                                <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 pt-5">
                            <div class="col-md offset-md-4">
                                <button type="submit" class="form-btn">
                                    {{ __('Send Password Reset Link') }}
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
