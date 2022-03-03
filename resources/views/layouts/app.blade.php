<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>
    <div id="app">


        <div id="app">
            <main class="py-4">

                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>