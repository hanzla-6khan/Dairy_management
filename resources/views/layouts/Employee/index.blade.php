@extends('layouts.app')
@section('content')


<div class="container">
    <form class="needs-validation" novalidate action="{{ route('Employee.store') }}" method="POST">
        @csrf

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">father name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="f name" name="fname" value="" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

  </div>
  <div class="form-row">

    <div class="col-md-3 mb-3">
      <label for="validationCustom04">phone</label>
      <input type="number" class="form-control" id="validationCustom04" name="phone" placeholder="phone" required>
      <div class="invalid-feedback">
        Please provide a valid contact
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">gender</label>
      <input type="text" class="form-control" id="validationCustom05" name="gender" placeholder="gender" required>
      <div class="invalid-feedback">
        Please provide a gender
      </div>
    </div>
      <div class="col-md-3 mb-3">
      <label for="validationCustom05">Exployee</label>
      <input type="text" class="form-control" name="Exployee" id="validationCustom05" placeholder="Exployee" required>
      <div class="invalid-feedback">
        Please provide a Exployee
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>


(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>


@endsection

