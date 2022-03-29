@extends('layouts.adminLayout')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Order {{ $order->id }}</h2>
        <h2> {{ $order->status }} </h2>
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">amount</th>
                <th scope="col">price</th>
                <th scope="col">total price</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $order->orderProducts as $product )
            <tr>
                <td> {{ $product->product->name }} </td>
                <td> {{ $product->amount }} </td>
                <td> {{ $product->product->price }} </td>
                <td> {{ $product->product->price * $product->amount }} </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Shipping method</td>
                <td>Standard</td>
                <td><i>Free</i></td>
            </tr>
            <tr>
                <td colspan="2">Total</td>
                <td></td>
                <td><i>Total price</i></td>
            </tr>
            <tr>
                <td colspan="2">VAT</td>
                <td>21%</td>
                <td><i>VAT amount</i></td>
            </tr>
            <tr>
                <td colspan="2">Grand Total</td>
                <td></td>
                <td><i>Grand total price</i></td>
            </tr>
        </tfoot>
    </table>
    <div>

        <h3> Customer information </h3>
        <div>{{ $order->user->first_name }} {{ $order->user->last_name }}</div>
        <div> {{ $order->user->email }} </div>
        <div> {{ $order->user->address->street }} {{ $order->user->address->house_number }}</div>
        <div> {{ $order->user->address->zipcode }} {{ $order->user->address->city }}</div>
        <div> {{ $order->user->address->country }} </div>
        <div> {{ $order->user->phoneNumber->phone_number }} </div>
    </div>


    <div class="my-3">
        @if ( $order->status != 'complete')
        <button class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('change-status-form').submit();">
            @if ( $order->status == 'pending' )
            Accept order
            @else
            Complete order
            @endif
        </button>
        @endif
        <button class=" btn btn-danger">Delete order</button>
    </div>


    <form id="change-status-form" action="/admin/orders/{{ $order->id }}" method="POST" class="d-none">
        @method('PUT')
        @csrf
    </form>
</main>
@endsection