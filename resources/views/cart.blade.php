@extends('layouts.app')
@section('content')



<div class="cart">
    <!-- Title -->
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
                    <img class="img-fluid" src="/images/mondkapjeSmaller.jpg" alt="Modkapje" />
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
    @endsection