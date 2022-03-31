@extends('layouts.adminLayout')

@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <h2>Actions</h2>
    @if($lowStockCount || $newOrdersCount)
    <div class="d-flex">
        <div class="card " style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">New orders</h5>
                <p class="card-text">You have {{$newOrdersCount}} new orders.</p>
                <a href="#" class="card-link">Go to new orders</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Low stock</h5>
                <p class="card-text">You have {{$lowStockCount}} items with low stock.</p>
                <a href="#" class="card-link">Go to items</a>
            </div>
        </div>
    </div>
    @else
    <h4>You have no pending actions!</h4>
    @endif

    <h2 class="my-3">Statistics</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Revenue</th>
                <th scope="col">New customers</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">This week</th>
                <td> €{{ $ordersThisWeek }}</td>
                <td>{{ $customersThisWeek }}</td>
            </tr>
            <tr>
                <th scope="row">Previous week</th>
                <td>€{{ $ordersPreviousWeek }}</td>
                <td>{{ $customersPreviousWeek }}</td>
            </tr>

        </tbody>
    </table>


</main>


@endsection