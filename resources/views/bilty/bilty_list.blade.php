@extends('layouts.app')

@section('content')

<style>.card-header {
    background-color: #007bff;
    color: #ffffff;
    font-size: 1.25rem;
    text-align: center;
    border-bottom: none;
    padding: 1rem 0.5rem;
    border-radius: 0.375rem 0.375rem 0 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);

}
</style>


<div class="container-fluid">



    <div class="card my-4" style="border-radius: 0.375rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
    <div class="card-header d-flex d-flex justify-content-center">
        <h2>Bilty  List</h2>
    </div>

    <div class="card-body">

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Item</th>
                <th>Track No</th>
                <th>Track Read</th>
                <th>Factory</th>
                <th>Quantity</th>
                <th>Cost Package</th>
                <th>Total Cost</th>
                <th>Pre Balance</th>
                <th>Payment</th>
                <th>Now Balance</th>
                <th>Remarks</th>
                <th>SMS Notification</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bilty as $bilty)
            <tr>
                <td>{{ $bilty->customer }}</td>
                <td>{{ $bilty->item }}</td>
                <td>{{ $bilty->track_no }}</td>
                <td>{{ $bilty->track_read }}</td>
                <td>{{ $bilty->factory }}</td>
                <td>{{ $bilty->quantity }}</td>
                <td>{{ $bilty->costPackage }}</td>
                <td>{{ $bilty->totalCost }}</td>
                <td>{{ $bilty->preBalance }}</td>
                <td>{{ $bilty->payment }}</td>
                <td>{{ $bilty->now_balance }}</td>
                <td>{{ $bilty->remarks }}</td>
                <td>{{ $bilty->sms_notification }}</td>
                <td>
                    <a href="{{ route('bilties.edit', $bilty->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    <form action="{{ route('bilties.destroy', $bilty->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    </div>
</div>



<a class="btn btn-primary" href="/home"> back to Home</a>



</div>
@endsection
