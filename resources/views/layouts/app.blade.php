<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link rel="stylesheet" href="css/app.css">

    <script src="/js/app.js" defer></script>
   
</head>


<body>
    <div id="app">
        <main class="py-4">


            @yield('content')
        </main>
    </div>

</body>

</html>