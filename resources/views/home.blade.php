<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OptiRoute</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <!-- Navigation -->
    <x-navbar />

    <!-- Hero Section -->
    <x-hero />

    <!-- Trusted Partners & Statistics -->
    <x-partners-stats />

    <!-- How It Works Section -->
</body>

</html>
