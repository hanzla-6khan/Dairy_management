@extends('layouts.app')

@section('content')


 <div class="card">
            <div class="card-header d-flex justify-content-center">Create Customer</div>

            <div class="card-body">
    <form class="needs-validation" novalidate method="POST" action="{{ route('cashinput.update',$cashInput->id) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="customer_id">Customer ID</label>
            <input type="text" name="customer_id" class="form-control @error('customer_id') is-invalid @enderror" value="{{ $cashInput->customer_id }}" required>
            <div class="invalid-feedback">
                @error('customer_id')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $cashInput->name }}" required>
            <div class="invalid-feedback">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="pre_balance">Previous Balance</label>
            <input type="number" name="pre_balance" class="form-control @error('pre_balance') is-invalid @enderror" value="{{ $cashInput->pre_balance }}" required>
            <div class="invalid-feedback">
                @error('pre_balance')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="payment">Payment</label>
            <input type="number" name="payment" class="form-control @error('payment') is-invalid @enderror" value="{{ $cashInput->payment }}" required>
            <div class="invalid-feedback">
                @error('payment')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="new_balance">New Balance</label>
            <input type="number" name="new_balance" class="form-control @error('new_balance') is-invalid @enderror" value="{{ $cashInput->new_balance }}" required>
            <div class="invalid-feedback">
                @error('new_balance')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" name="total" class="form-control @error('total') is-invalid @enderror" value="{{ $cashInput->total }}" required>
            <div class="invalid-feedback">
                @error('total')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="remarks">Remarks</label>
            <textarea name="remarks" class="form-control">{{ $cashInput->remarks }}</textarea>
        </div>
        <div class="form-group">
            <label for="sms">SMS</label>
            <input type="text" name="sms" class="form-control" value="{{ $cashInput->sms }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
      </div> <a class="btn btn-primary ml-auto" href="/home"> back to Home</a>
</div>
@endsection
