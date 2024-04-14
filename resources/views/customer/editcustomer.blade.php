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
<div class="container">


    <div class="card">
                <div class="card-header d-flex justify-content-center">Edit Customer</div>

                <div class="card-body">



    <form method="POST" action="{{ route('customers.update', $customer->id) }}">
        @csrf
        @method('PUT') <!-- Laravel recognizes this as an update rather than a create -->



        <div class="row">
            <div class="col-sm-6">     <!-- Name in English -->
        <div class="form-group">
            <label for="name_en">Name (English)</label>
            <input type="text" name="name_en" class="form-control" value="{{ $customer->name_en }}" required>
        </div></div>
            <div class="col-sm-6">    <!-- Name in Urdu -->
        <div class="form-group">
            <label for="name_ur">Name (Urdu)</label>
            <input type="text" name="name_ur" class="form-control" value="{{ $customer->name_ur }}" required>
        </div></div>

        </div>



        <div class="row">
            <div class="col-sm-6">
        <!-- Address -->
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ $customer->address }}" required>
        </div></div>
            <div class="col-sm-6">        <!-- Balance Limit -->
        <div class="form-group">
            <label for="balance_limit">Balance Limit</label>
            <input type="number" name="balance_limit" class="form-control" value="{{ $customer->balance_limit }}" required>
        </div>
</div>

        </div>
           <div class="row">
            <div class="col-sm-6">
        <!-- CNIC -->
        <div class="form-group">
            <label for="cnic">CNIC</label>
            <input type="text" name="cnic" class="form-control" value="{{ $customer->cnic }}" required>
        </div>
</div>
            <div class="col-sm-6">      <!-- SMS Name (optional) -->
        <div class="form-group">
            <label for="sms_name">SMS Name</label>
            <input type="text" name="sms_name" class="form-control" value="{{ $customer->sms_name }}">
        </div>
</div>

        </div>

           <div class="row">
            <div class="col-sm-6">      <!-- Mobile 1 -->
        <div class="form-group">
            <label for="mobile1">Mobile 1</label>
            <input type="text" name="mobile1" class="form-control" value="{{ $customer->mobile1 }}" required>
        </div>
</div>
            <div class="col-sm-6">
        <!-- Mobile 2 (optional) -->
        <div class="form-group">
            <label for="mobile2">Mobile 2</label>
            <input type="text" name="mobile2" class="form-control" value="{{ $customer->mobile2 }}">
        </div>
</div>

        </div>


                    <div class="row">
            <div class="col-sm-6">   <!-- Category -->
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" class="form-control" required>
                <option value="customer" @if($customer->category == 'customer') selected @endif>Customer</option>
                <option value="bank" @if($customer->category == 'bank') selected @endif>Bank</option>
                <!-- Add more options as needed -->
            </select>
        </div></div>
            <div class="col-sm-6">   <!-- Asset Dropdown -->
        <div class="form-group">
            <label for="asset_id">Choose an Asset</label>
            <select class="form-control" id="asset_id" name="asset_id" onchange="getSubAssets(this.value)" required>
                <option value="">Select An Asset</option>
                @foreach ($assets as $asset)
                <option value="{{ $asset->id }}" @if($customer->asset_id == $asset->id) selected @endif>
                    {{ $asset->Assets_name_en }} - {{ $asset->Assets_name_ur }}
                </option>
                @endforeach
            </select>
        </div></div>

        </div>
                      <div class="row">
            <div class="col-sm-6">    <!-- Sub Asset Dropdown -->
        <div class="form-group">
            <label for="sub_asset_id">Choose Sub Asset</label>
            <select class="form-control" id="sub_asset_id" name="sub_asset_id" >
                <option value="">Choose An Asset From Above List</option>
                <!-- Dynamically populated based on asset selection -->
            </select>
        </div></div>
            <div class="col-sm-6"></div>

        </div>









<div class="row">

    <div class="col-sm-6">
   <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update</button>

    </div>
    <div class="col-sm-6">

        <a class="btn btn-primary ml-auto" href="/home"> back to Home</a>
    </div>
</div>





    </form>

                </div>
    </div></div>




@endsection


<script>
    const baseUrl = "{{ url('/') }}";
    async function getSubAssets(assetId) {
        try {
            let result = await fetch(`${baseUrl}/getSubAssets/${assetId}`);
            let options = await result.text();
            document.getElementById("sub_asset_id").innerHTML = options;

        } catch (error) {
            console.log(error)
        }
    }
</script>
