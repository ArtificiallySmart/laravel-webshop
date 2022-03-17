 @extends('layouts.app')
 @section('content')
 <div id="app">

     <body>
         <div class="header">


             <navbar-component></navbar-component>
             <img src="/images/logo.png" alt="logo">
         </div>

         <productpage-component></productpage-component>


     </body>

     <footer-component></footer-component>
 </div>


 @endsection