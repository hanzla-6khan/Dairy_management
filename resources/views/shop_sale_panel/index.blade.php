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
        <h2>Shop Sale</h2>
    </div>

    <div class="card-body">

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Material</th>
                <th>Total Cost </th>
                <th>Remarks</th>
                <th>Total Bill</th>
                <th>payment</th>
                <th>Labour Name</th>
                <th>Truck No</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->material }}</td>
                <td>{{ $customer->cost }}</td>
                <td>{{ $customer->remarks }}</td>
                <td>{{ $customer->total_bill }}</td>
                <td>{{ $customer->payment }}</td>
                <td>{{ $customer->labour_name }}</td>
                <td>{{ $customer->truck_no }}</td>

                <td>
                    <a href="{{ route('shopsale.edit', $customer->id) }}" class="btn btn-primary">   <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                    <form action="{{ route('shopsale.delete', $customer->id) }}" method="POST" style="display: inline-block;">
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



<a class="btn btn-primary" href="/home"> back to Home</a>



</div>
@endsection
