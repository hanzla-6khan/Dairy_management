@extends('layouts.app')

@section('content')
    <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">


  <script src="{{ asset('assets/js/custom.js') }}"></script>




    <div class="container content">
        <div class="form-container">

            <div class="card-header">{{ __('Register') }}</div>


            <form class="form" method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
                @csrf



                      <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' name="image" id="imageUpload" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
            </div>
        </div>
             </div>


                <input id="name" type="text" class="form-control input @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" placeholder="Business Name*" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Enter your password ">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password-confirm" type="password" class="form-control input" name="password_confirmation"
                    placeholder="Confirm  password " required autocomplete="new-password">


                <button class="form-btn" type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>

            </form>

                <p class="sign-up-label ">
                Already have an account?<span class="sign-up-link">
                    <a href="{{ route('login') }}">Sign In</a></span>
            </p>
        </div>
    </div>



    <script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.style.backgroundImage = 'url(' + e.target.result + ')';
            imagePreview.style.display = 'none';
            imagePreview.style.display = 'block';
        }
        reader.readAsDataURL(input.files[0]);
    }
}

document.getElementById('imageUpload').addEventListener('change', function() {
    readURL(this);
});

</script>
@endsection
