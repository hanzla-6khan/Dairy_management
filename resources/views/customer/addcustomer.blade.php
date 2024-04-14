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




    <div class="container">


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

        <div class="card">

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <div class="card-header d-flex justify-content-center">Create Customer</div>

            <div class="card-body">
                <form class="needs-validation" novalidate method="POST" action="{{ route('customers.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_en">Name (English)</label>
                                <input type="text" name="name_en"
                                    class="form-control @error('name_en') is-invalid

                                @enderror"
                                    value="{{ old('name_en') }}" required>


                                <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'name en'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name_ur">نام (اردو)</label>
                                <input type="text" name="name_ur"
                                    class="form-control @error('name_ur') is-invalid

                                @enderror"
                                    value="{{ old('name_ur') }}" required>



                                <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'name ur'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="balance_limit">Balance Limit</label>
                                <input type="number" name="balance_limit" class="form-control @error('balance_limit') is-invalid

                                @enderror"
                                    value="{{ old('balance_limit') }}" required>
        <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'balance_limit'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cnic">CNIC</label>
                                <input type="text" name="cnic" class="form-control @error('cnic') is-invalid

                                @enderror" value="{{ old('cnic') }}"
                                    required>
                                           <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'cnic'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sms_name">SMS Name</label>
                                <input type="text" name="sms_name" class="form-control" value="{{ old('sms_name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile1">Mobile 1</label>
                                <input type="text" name="mobile1" class="form-control @error('mobile1')is-invalid

                                @enderror" value="{{ old('mobile1') }}"
                                    required>
                                      <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'mobile1'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile2">Mobile 2</label>
                                <input type="text" name="mobile2" value="{{ old('mobile2') }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category" class="form-control" value="{{ old('category') }}" required>
                                    <option value="customer">Customer</option>
                                    <option value="bank">Bank</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">




                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="assetDropdown">Choose an Asset</label>
                                <select class="form-control @error('asset_id') is-invalid @enderror" id="asset_id" name="asset_id" value="{{ old('asset_id') }}"
                                    onchange="getSubAssets(this.value)">
                                    <option value="">Select An Asset</option>
                                    @foreach ($assets as $asset)
                                        <option value="{{ $asset->id }}">{{ $asset->Assets_name_en }} -
                                            {{ $asset->Assets_name_ur }}</option>
                                    @endforeach
                                </select>
                                      <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'asset_id'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="assetDropdown">Choose Sub Asset</label>
                                <select class="form-control @error('sub_asset_id') is-invalid

                                @enderror" id="sub_asset_id" name="sub_asset_id"
                                    value="{{ old('sub_asset_id') }}">
                                    <option value="">Choose An Asset From Above List</option>
                                </select>
                                       <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'sub_asset_id'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid

                                @enderror" value="{{ old('address') }}"
                                    required>
                                          <div class="invalid-feedback">

                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if (Str::contains($error, 'address'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                </form>
            </div>
                    </div> <a class="btn btn-primary ml-auto" href="/home"> back to Home</a>
        </div>
    </div>
    </div>
    </div>



    <script src="{{ asset('assets/js/form_validation.js') }}"></script>
@endsection
{{-- Existing Toastr JS and custom scripting --}}


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
