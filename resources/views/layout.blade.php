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
                <productcard-component v-for="product in NewProducts" :product="product">
                </productcard-component>
                <productcard-component v-for="product in PopularProducts" :product="product">
                </productcard-component>
                <productcard-component v-for="product in RandomProducts" :product="product">
                </productcard-component>
            </div>
        </div>



    </section>



    <footer-component></footer-component>


</body>
@endsection