<!-- resources/views/customers/create.blade.php -->
@extends('layouts.app')

@section('content')

     {{-- Include Toastr CSS for styling --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

<style>.card-header {
    background-color: #007bff; /* Bootstrap primary color */
    color: #ffffff; /* White text color */
    font-size: 1.25rem; /* Larger font size */
    text-align: center!important; /* Center-align the text */
    border-bottom: none; /* Optional: removes the border */
    padding: 1rem 0.5rem; /* Adjusts the padding */
    border-radius: 0.375rem 0.375rem 0 0; /* Rounded corners at the top */
    box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Adds a subtle shadow (optional) */
}
</style>



  <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">


  <div class="row justify-content-end">

    <div class="col-3">


      <div class="calander">

        <div class="left">
          <p id="date"></p>
          <p id="day"></p>
               <p class="digital-clock"></p>
        </div>
        <div class="right">

          <p id="month"></p>
          <p id="year"></p>
        </div>


      </div>

    </div>
  </div>

<div class="container">


            <div class="card">
                <div class="card-header d-flex justify-content-center">Create Assets</div>

                <div class="card-body">
                    <form class="needs-validation" novalidate action="{{ route('assets_item.store') }}" method="POST">


        @csrf

        <div class="row">
            <div class="col-md-6">  <div class="form-group">
            <label for="Assets_name_en">Asset Name (English)</label>
            <input type="text" class="form-control" id="Assets_name_en" name="Assets_name_en" required>


                <div class="invalid-feedback">
        Please provide a valid Asset Name.
      </div>
        </div></div>
            <div class="col-md-6">
                    <div class="form-group">
            <label for="Assets_name_ur"> نام (اردو)</label>
            <input type="text" class="form-control" id="Assets_name_ur" name="Assets_name_ur" required>
                          <div class="invalid-feedback">
        Please provide a valid Asset Name in urdu .
      </div>
        </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
   <div class="form-group">
            <label for="Business_id">Business ID</label>
            <input type="number" class="form-control" id="Business_id" name="Business_id" required>
        </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Create Asset</button>
    </form>
                </div>
                  </div> <a class="btn btn-primary ml-auto" href="/home"> back to Home</a>
            </div>
        </div>
    </div>
</div>


      <script src="{{ asset('assets/js/form_validation.js') }}"></script>
@endsection
