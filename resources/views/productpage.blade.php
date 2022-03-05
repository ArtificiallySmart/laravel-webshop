@extends('layouts.app')
@section('content')



<body>

    <img src="assets/images/logo.png" alt="logo">
    <navbar-component></navbar-component>
    <div class="header">

        <shopping-cart ref="cartComponent"></shopping-cart>

    </div>



    <div class="container" id="product-section">
        <div class="row">

            <div class="col-md-6">


                <div class="img-hover-zoom">



                    <img src="assets/images/Tshirts.png" class="card-img-top" alt="Skeleton">
                </div>



            </div>






            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h1 span class="label label-primary">Skeleton</h1>






                        <h2 span class="price">€19,99</h2></span></h2>

                        <p class="card-text" v-if="inventory > 10">In Stock</p>
                        <p class="card-text" v-else-if="inventory<=10 && inventory > 0"> Almost sold out </p>
                        <p class="card-text" v-else>Out of Stock</p>

                        <!--<button a href="#" v-on:click="addToCart">Add to cart</button>-->


                        <p class="description">
                            Men's T-shirt. We will print the product for you after you place the order.
                            A t-shirt with an awesome design for a night out or just hanging out with friends!
                        </p>

                        <ul>
                            <li v-for="detail in details">{{ detail }}</li>
                        </ul>

                        <p>
                            <a href="#" class="btn btn-primary" v-on:click="addToCart">Add to Cart</a>
                        <div class="cart">
                            <p>Cart({{cart}})</p>
                        </div>

                        </p>

                        <span>Available colors</span>
                        <div class="colors"> <span></span> <span></span> <span></span> <span></span>
                        </div>

                    </div>





                    <!--<shopping-cart></shopping-cart> -->


                    <product-review></product-review>




                    <div class="row">
                        <div class="col-md-3">
                            <span class="sr-only">Four out of Five Stars</span>
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                            <span class="label label-success">61</span>
                        </div>
                        <div class="col-md-3">
                            <span class="monospaced">Write a Review</span>
                        </div>
                    </div>







                </div>

            </div>









        </div>



    </div>

    <footer-component></footer-component>

</body>




@endsection











<script src="assets/js/app.js"></script>
<script src="assets/js/proof.js"></script>




</html>