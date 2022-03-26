@extends('layouts.app')

@section('content')

<div class="header">
    <!-- <shopping-cart ref="cartComponent"></shopping-cart> -->
    <navbar-component></navbar-component>
    <img src="/images/logo.png" alt="logo">

</div>

<div class="container">
    <div class="row">

        <div class="col-6">
            <h2>Shipping info</h2>
            @guest
            <div>
                <h4>Please login to continue </h4>
            </div>
            <a href=" {{ route('login') }} " class="btn btn-secondary">{{ __('Login') }}</a>
            @endguest
            @auth
            <div>
                <h4>This will show the checkout component </h4>
            </div>
            @endauth
        </div>

        <div class="col-6">
            <h2>Order Details</h2>
            <orderdetails-component></orderdetails-component>
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