@extends('layouts.app')

@section('content')

<div class="header">
    <!-- <shopping-cart ref="cartComponent"></shopping-cart> -->
    <navbar-component></navbar-component>
    <img src="/images/logo.png" alt="logo">

</div>

<div class="container">
    <div class="row">

        <div class="col-8">
            <h2>Shipping info</h2>

        </div>

        <div class="col-4">
            <h2>Order Details</h2>

            <a class="btn btn-secondary" href="{{ route('postOrder') }}" onclick="event.preventDefault();
                                                     document.getElementById('order-form').submit();">
                {{ __('Order') }}
            </a>

            <form id="order-form" action="{{ route('postOrder') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>

</div>


@endsection