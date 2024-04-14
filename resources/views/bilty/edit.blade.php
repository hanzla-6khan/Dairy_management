<!-- resources/views/customers/create.blade.php -->
@extends('layouts.app')

@section('content')
    {{-- Include Toastr CSS for styling --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <style>
        .card-header {
            background-color: #007bff;
            /* Bootstrap primary color */
            color: #ffffff;
            /* White text color */
            font-size: 1.25rem;
            /* Larger font size */
            text-align: center !important;
            /* Center-align the text */
            border-bottom: none;
            /* Optional: removes the border */
            padding: 1rem 0.5rem;
            /* Adjusts the padding */
            border-radius: 0.375rem 0.375rem 0 0;
            /* Rounded corners at the top */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Adds a subtle shadow (optional) */
        }
    </style>



    <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">




    <div class="container">


        <div class="card">
            <div class="card-header d-flex justify-content-center">Create Assets</div>

            <div class="card-body">

            </div>
        </div> <a class="btn btn-primary ml-auto" href="/home"> back to Home</a>
    </div>
    </div>
    </div>
    </div>


    <script src="{{ asset('assets/js/form_validation.js') }}"></script>
@endsection
