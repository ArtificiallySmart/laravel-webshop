 @extends('layouts.app')
 @section('content')
 <div id="app">

     <body>
         <div class="header">


             <navbar-component></navbar-component>
             <img src="/images/logo.png" alt="logo">
         </div>



         <div class="container" id="product-section">
             <div class="row">

                 <div class="col-md-6">


                     <div class="pr-img-hover-zoom">
                         <img src="/images/skeletonTshirt.jpg" class="image-responsive" alt="Skeleton">
                     </div>




                 </div>






                 <div class="col-md-6">
                     <div class="row">
                         <div class="col-md-12">
                             <h1 span class="label label-primary">Skeleton</h1>
                             <h2 span class="p-price">€19,99</h2></span></h2>



                             <p class="description">

                                 Men's T-shirt. We will print the product for you after you place the order.
                                 A t-shirt with an awesome design for a night out or just hanging out with friends!
                             </p>



                             <span>Available colors</span>
                             <div class="colors"> <span></span> <span></span> <span></span> <span></span> </div>




                         </div>
                     </div>
                     <div class="text-right"><button type="button" class="btn btn-primary "> Add To Cart</button></div>
                 </div>


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






                     <div class="col-md-6">
                         <div class="row"></div>
                         <p><span class="monospaced">Write a Review</span></p>
                     </div>
                 </div>

             </div>
         </div>

     </body>

     <footer-component></footer-component>

     @endsection