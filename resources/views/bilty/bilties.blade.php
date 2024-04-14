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
            <div class="card-header d-flex justify-content-center">Create Bilty Pannel </div>

            <div class="card-body">


                <form class="needs-validation" novalidate action="{{ route('bilties.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Search Customer -->
                        <div class="col-md-4 mb-3">
                            <label for="searchCustomer">Search Customer</label>
                            <input type="text" class="form-control " name="customer" id="searchCustomer" placeholder="Customer" required>
                            <div class="invalid-feedback">
                                Please enter a customer.
                            </div>
                        </div>

                        <!-- Items Select -->
                        <div class="col-md-4 mb-3">
                            <label for="itemSelect">Items</label>
                            <select class="form-control" name="item" id="itemSelect" required>
                                <option selected disabled value="">Choose...</option>
                                <option>Item 1</option>
                                <option>Item 2</option>
                                <!-- Add more items as needed -->
                            </select>
                            <div class="invalid-feedback">
                                Please select an item.
                            </div>
                        </div>

                        <!-- Track No -->
                        <div class="col-md-4 mb-3">
                            <label for="trackNo">Track No</label>
                            <input type="text" class="form-control"  name="track_no" id="trackNo" placeholder="Track No" required>
                            <div class="invalid-feedback">
                                Please provide a track number.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Track Read -->
                        <div class="col-md-4 mb-3">
                            <label for="trackRead">Track Read</label>
                            <input type="text" class="form-control" name="track_read" id="trackRead" placeholder="Track Read" required>
                            <div class="invalid-feedback">
                                Please enter track read.
                            </div>
                        </div>

                        <!-- Factory -->
                        <div class="col-md-4 mb-3">
                            <label for="factory">Factory</label>
                            <input type="text" class="form-control" name="factory" id="factory" placeholder="Factory" required>
                            <div class="invalid-feedback">
                                Please provide a factory.
                            </div>
                        </div>

                        <!-- Quantity -->
                        <div class="col-md-4 mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" required>
                            <div class="invalid-feedback">
                                Please enter a quantity.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Cost per Package -->
                        <div class="col-md-4 mb-3">
                            <label for="costPackage">Cost/Package</label>
                            <input type="number" class="form-control" name="costPackage" id="costPackage" placeholder="Cost per Package"
                                required>
                            <div class="invalid-feedback">
                                Please enter cost per package.
                            </div>
                        </div>

                        <!-- Total Cost -->
                        <div class="col-md-4 mb-3">
                            <label for="totalCost">Total Cost</label>
                            <input type="number" class="form-control" name="totalCost" id="totalCost" placeholder="Total Cost" required>
                            <div class="invalid-feedback">
                                Please enter total cost.
                            </div>
                        </div>

                        <!-- Pre Balance -->
                        <div class="col-md-4 mb-3">
                            <label for="preBalance">Pre Balance</label>
                            <input type="number" class="form-control" name="preBalance" id="preBalance" placeholder="Previous Balance"
                                required>
                            <div class="invalid-feedback">
                                Please enter previous balance.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Payment -->
                        <div class="col-md-4 mb-3">
                            <label for="payment">Payment</label>
                            <input type="number" class="form-control" name="payment" id="payment" placeholder="Payment" required>
                            <div class="invalid-feedback">
                                Please enter payment amount.
                            </div>
                        </div>

                        <!-- Now Balance -->
                        <div class="col-md-4 mb-3">
                            <label for="nowBalance">Now Balance</label>
                            <input type="number" class="form-control" id="now_balance" name="now_balance" placeholder="Current Balance"
                                required>
                            <div class="invalid-feedback">
                                Please enter current balance.
                            </div>
                        </div>

                        <!-- Remarks -->
                        <div class="col-md-4 mb-3">
                            <label for="remarks">Remarks</label>
                            <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-control " placeholder="enter sms" name="sms_notification" type="text" id="sms_notification" required>

                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>
    </div> <a class="btn btn-primary ml-auto" href="/home"> back to Home</a>
    </div>
    </div>
    </div>
    </div>


    <script src="{{ asset('assets/js/form_validation.js') }}"></script>
@endsection
