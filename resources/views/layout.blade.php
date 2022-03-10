@extends('layouts.app')
@section('content')

<body>

    <navbar-component></navbar-component>

    <div class="header">
        <!-- <shopping-cart ref="cartComponent"></shopping-cart> -->
        <img src="/images/logo.png" alt="logo">
    </div>
    <!--------------------------------------------------ROW OF PRODUCTS & PRICES ------------------------------------------------------------------------>

    <section class="content">

        <div class="container">
            <div class="row text text-center">
                <productcard-component v-for="product in products" :product="product">
                </productcard-component>




    </section>



    <footer-component></footer-component>


</body>
@endsection