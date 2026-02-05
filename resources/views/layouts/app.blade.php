<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'YekBûn') - Lumen</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" class="w-4 h-4" />
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
</head>
<body @yield('body_attrs', 'style="background-color: #f1f2ff"')>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @stack('scripts')
</body>
</html>
