@extends('layouts.app')

@section('content')


<div class="card-header d-flex justify-content-center">Shop sale</div>

<div class="card-body">
    <form class="needs-validation" novalidate method="POST" action="{{ route('shopsale.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" name="material" class="form-control @error('material') is-invalid @enderror" value="{{ old('material') }}" required>
                    <div class="invalid-feedback">
                        @error('material')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cost">Cost</label>
                    <input type="number" name="cost" class="form-control @error('cost') is-invalid @enderror" value="{{ old('cost') }}" required>
                    <div class="invalid-feedback">
                        @error('cost')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="remarks">Remarks</label>
                    <textarea name="remarks" class="form-control">{{ old('remarks') }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_bill">Total Bill</label>
                    <input type="number" name="total_bill" class="form-control @error('total_bill') is-invalid @enderror" value="{{ old('total_bill') }}" required>
                    <div class="invalid-feedback">
                        @error('total_bill')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="payment">Payment</label>
                    <input type="number" name="payment" class="form-control @error('payment') is-invalid @enderror" value="{{ old('payment') }}" required>
                    <div class="invalid-feedback">
                        @error('payment')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="labour_name">Labour Name</label>
                    <input type="text" name="labour_name" class="form-control" value="{{ old('labour_name') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="truck_no">Truck No</label>
                    <input type="text" name="truck_no" class="form-control" value="{{ old('truck_no') }}">
                </div>
            </div>
            <div class="col-md-6">
                <!-- Add your Category field here if needed -->
            </div>
        </div>
        <!-- Add more fields as needed -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection