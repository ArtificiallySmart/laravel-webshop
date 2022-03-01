<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zulfugart Webshop</title>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cart.css">
    <script src="/assets/js/components/cart.js"></script>
    <script src="/assets/js/components/navbar.js"></script>
    <script src="/assets/js/components/footer.js"></script>
    <script src="/assets/js/components/productpage.js"></script>
    <!--< a href="productpage.html"> Productpage</a>-->
</head>

<!----------------------------------------------------------------- NAVBAR & FILTERS
BUTTONS---------------------------------------------------------------------------------------->

<body>
    <div id="app">

        <nav-comp></nav-comp>
        <shopping-cart ref="cartComponent"></shopping-cart>

        <div class="header">

            <img src="/images/logo.png" alt="logo">
        </div>

        <!--------------------------------------------------ROW OF PRODUCTS & PRICES ------------------------------------------------------------------------>
        <section class="content">

            <div class="container">
                <div class="row text text-center">
                    <div class="col gallery_product" category="Male">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <a href="productpage.html"> <img src="/images/Tshirts.png" class="card-img-top" alt="Skeleton"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Skeleton</h5>
                                <p class=" card-text ">€19,99</p>

                            </div>
                        </div>

                    </div>
                    <div class="col gallery_product" category="Female">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <a href="/productpage.html"> <img src="/images/martialarts.jpg" class="card-img-top" alt="Martialarts"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">MartialArts</h5>
                                <p class="card-text">€24.99</p>

                            </div>
                        </div>

                    </div>
                    <div class="col gallery_product" category="Female">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <a href="productpage.html"> <img src="/images/lotus.jpg" class="card-img-top" alt="Lotus"></a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Lotus</h5>
                                <p class="card-text">€25,55</p>

                            </div>
                        </div>

                    </div>

                    <div class="col gallery_product" category="Kids">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <a href="productpage.html"><img src="/images/kidsLangeMouwen.jpg" class="card-img-top" alt="Kids"> </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">KidsSweater</h5>
                                <p class="card-text">€30,65</p>

                            </div>
                        </div>

                    </div>


                    <div class="col gallery_product" category="Accessoires">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="/images/modnkapjeSmaller.jpg" class="card-img-top" alt="mondkapjeSmaller">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Facemask v1</h5>
                                <p class="card-text">€10.00</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>
                    </div>


                    <div class="col gallery_product" category="Accessoires">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="assets/images/syntheticMondkapje.jpg" class="card-img-top" alt="syntheticMondkapje">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Facemask v2</h5>
                                <p class="card-text ">€10.00</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                    </div>



                    <div class="col gallery_product" category="Accessoires">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="/images/kopje.jpg" class="card-img-top" alt="koffieMok">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Coffemug</h5>
                                <p class="card-text ">€14,99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                    </div>
                    <div class="col gallery_product" category="Accessoires">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="/images/sporttas.jpg" class="card-img-top" alt="sportTas">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Gymbag</h5>
                                <p class="card-text a">€18,99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                    </div>

                    <div class="col gallery_product" category="Kids">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="/images/knuffelbeer.jpg" class="card-img-top" alt="knuffel">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Teddybeer</h5>
                                <p class="card-text-centre align-items-center d-flex justify-content-center"> €18,99
                                </p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                    </div>

                    <div class="col gallery_product" category="Male">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="/images/warrior flower.jpg" class="card-img-top" alt="lotus">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Lotus</h5>
                                <p class="card-text"> €18,99
                                </p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                    </div>


                    <div class="col gallery_product text-center" category="Accessoires">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="/images/thermos.jpg" class="card-img-top" alt="thermos">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Thermos</h5>
                                <p class="card-text">€14,99</p>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                    </div>



                    <div class="col gallery_product text-center" category="Male">

                        <div class="card" style="width: 18rem;">
                            <div class="img-hover-zoom">
                                <img src="/images/dragons.jpg" class="card-img-top" alt="dragons">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Dragon</h5>
                                <p class="card-text">€14,99</p>
                                <a href=" #" class="btn btn-primary">Add to Cart</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!--------------------------------------------------CART ------------------------------------------------------------------>
        <div class="cart">
            <!--<!-- Title -->
            <div class="Cart">
                <p>Cart</p>
            </div>

            <!-- Product #1 -->
            <div class="container">
                <div class="row text-center">
                    <div class="item">
                        <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                        </div>

                        <div class="imageSmaller">
                            <img class="img-fluid" src="/images/tshirtssmallerCopy.png" alt="Skeleton Shirt SMaller">
                        </div>

                        <div class="description">
                            <span>Skeleton Shirt</span>

                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                            </button>
                        </div>



                        <div class="total-price">19.99</div>
                    </div>

                    <!-- Product #2 -->
                    <div class="item">
                        <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                        </div>

                        <div class="imageSmaller">
                            <img class="img-fluid" src="/images/martialartsSmaller.png" alt="" />
                        </div>

                        <div class="description">
                            <span>martialarts</span>

                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                            </button>
                        </div>

                        <div class="total-price"></div>
                    </div>

                    <!-- Product #3 -->
                    <div class="item">
                        <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                        </div>

                        <div class="imageSmaller">
                            <img class="img-fluid" src="/images/kidssmaller.png" alt="" />
                        </div>

                        <div class="description">
                            <span>hoodie</span>

                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                            </button>
                        </div>

                        <div class="total-price">35,99</div>
                    </div>


                    <!--Product #4-->

                    <div class="item">
                        <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                        </div>

                        <div class="imageSmaller">
                            <img class="img-fluid" src="/images/modnkapjeSmaller.jpg" alt="Modkapje" />
                        </div>

                        <div class="description">
                            <span>mondkapje</span>

                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt="" />
                            </button>
                        </div>

                        <div class="total-price">10,00</div>
                    </div>
                </div>
            </div>
        </div>

        <footer-comp></footer-comp>

    </div>
</body>




<script src="assets/js/app.js"></script>
<script src="assets/js/proof.js"></script>




</html>