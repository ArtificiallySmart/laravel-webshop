@extends('layouts.adminLayout')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
    </div>
    @if($newOrders)
    <h2>New orders</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Order id</th>
                    <th scope="col">Order date</th>
                    <th scope="col">Total price</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Status</th>
                    <th scope="col">details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newOrders as $newOrder)
                <tr>
                    <td>{{ $newOrder->id }}</td>
                    <td>{{ $newOrder->created_at }}</td>
                    <td>{{ $newOrder->total_price }}</td>
                    <td>{{ $newOrder->user->first_name}} {{ $newOrder->user->last_name }} </td>
                    <td>{{ $newOrder->status }}</td>
                    <td><a href="#">Details</a>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <h2>No new orders</h2>
    @endif
</main>

@endsection