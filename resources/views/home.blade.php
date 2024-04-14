@extends('layouts.app')

@section('content')
<style>
  .digital-clock {
    font-size: 24px;
    font-family: Arial, sans-serif;
  }

  .card {

   margin-top: 100px
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
  <div class="row">
    <div class="col-md-3 ">
    <a href="{{ route('customers.index') }}" class="card-link">
  <div class="card">
    <img src="{{ asset('images/gallery.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
      {{-- <div class="icon">
        <i class="fas fa-user-plus fa-3x"></i>
      </div> --}}
      <div class="card-content text-center mt-3">
        <p style="color: rgb(20, 8, 8); font-weight: bold; font-size: 20px;">Add Customer</p>
      </div>
    </div>
  </div>
</a>
    </div>

    <div class="col-md-3 ">
     <a href="{{ route('assets.index') }}" class="card-link">
  <div class="card">
    <img src="{{ asset('images/add-to-cart.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
      {{-- <div class="icon">
        <i class="fas fa-user-plus fa-3x"></i>
      </div> --}}
      <div class="card-content text-center mt-3">
        <p style="color: rgb(4, 3, 3); font-weight: bold; font-size: 20px;">Add Assets</p>
      </div>
    </div>
  </div>
</a>
    </div>


        <div class="col-md-3 ">
    <a href="{{ route('suba_ssets_item.index') }}" class="card-link">

  <div class="card">
    <img src="{{ asset('images/add-user.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
      {{-- <div class="icon">
        <i class="fas fa-user-plus fa-3x"></i>
      </div> --}}
      <div class="card-content text-center mt-3">
        <p style="color: rgb(6, 4, 4); font-weight: bold; font-size: 20px;">Add Sub Assets</p>
      </div>
    </div>
  </div>
</a>

    </div>
    <div class="col-md-3 ">

         <a href="{{ route('customers.show') }}" class="card-link">
  <div class="card">
    <img src="{{ asset('images/shopping-bag.png') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">
      <div class="icon">
        <i class="fas fa-user-plus fa-3x"></i>
      </div>
      <div class="card-content text-center mt-3">
        <p style="color: rgb(16, 11, 11); font-weight: bold; font-size: 20px;">Show Customer</p>
      </div>
    </div>
  </div>
</a>
    </div>
  </div>
</div>












      <script src="{{ asset('assets/js/calander.js') }}"></script>
@endsection
