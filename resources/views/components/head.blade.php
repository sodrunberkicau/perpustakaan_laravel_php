<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{ config('app.name') }} </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Gunakan Quattrocento untuk seluruh varian teks utilitas lama */
        .urbanist-regular,
        .urbanist-medium,
        .urbanist-semibold,
        .amaranth-regular,
        .amaranth-bold {
            font-family: "Quattrocento", serif;
            font-weight: 400;
            font-style: normal;
        }

        .inspect {
            border: 1px solid red;
        }
    </style>

    <!-- Custom global theme -->
    <link rel="stylesheet" href="{{ asset('css/custom-theme.css') }}">

    @yield('style')
</head>

<body>
    @yield('content')
</body>

</html>
