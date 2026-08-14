<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'AURA & HORLOGE')</title>

    <meta name="description"
          content="@yield('description', 'AURA & HORLOGE &mdash; Timeless Elegance, Uncompromising Craftsmanship.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>