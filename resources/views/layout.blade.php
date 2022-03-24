@extends('layouts.app')
@section('content')

<body>



    <div class="header">
        <!-- <shopping-cart ref="cartComponent"></shopping-cart> -->
        <navbar-component></navbar-component>
        <img src="/images/logo.png" alt="logo">

    </div>
    <!--------------------------------------------------ROW OF PRODUCTS & PRICES ------------------------------------------------------------------------>

    <section class="content">

        <div class="container">
            <div class="row text text-center w-100">
                <productcard-component v-for="product in products" :key="product.id" :product="product">
                </productcard-component>

            </div>
        </div>



    </section>



    <footer-component></footer-component>


</body>
@endsection