<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel blog))</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content=""/>
    <meta name="keywords" content="bootstrap, bootstrap5"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    @vite(['public/assets/fonts/icomoon/style.css'])
    @vite(['public/assets/fonts/flaticon/font/flaticon.css'])

    @vite(['public/assets/css/tiny-slider.css'])
    @vite(['public/assets/css/aos.css'])
    @vite(['public/assets/css/glightbox.min.css'])
    @vite(['public/assets/css/style.css'])
    @vite(['public/assets/css/flatpickr.min.css'])
    @vite(['public/assets/css/custom.css'])

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Blogy &mdash; Free Bootstrap 5 Website Template by Untree.co</title>

    {{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
@includeIf('header')

@yield('content')

@includeIf('footer')

<!-- Preloader -->
{{--<div id="overlayer"></div>--}}
{{--<div class="loader">--}}
{{--    <div class="spinner-border text-primary" role="status">--}}
{{--        <span class="visually-hidden">Loading...</span>--}}
{{--    </div>--}}
{{--</div>--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@vite(['public/assets/js/tiny-slider.js'])
@vite(['public/assets/js/flatpickr.min.js'])
@vite(['public/assets/js/aos.js'])
@vite(['public/assets/js/glightbox.min.js'])
@vite(['public/assets/js/navbar.js'])
@vite(['public/assets/js/counter.js'])
@vite(['public/assets/js/custom.js'])

</html>
