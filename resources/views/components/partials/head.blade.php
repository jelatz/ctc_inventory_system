<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- LINKS --}}
{{-- LINK FOR ICON --}}
{{-- <link rel="icon" type="image/png" href="{{ asset('images/home-hero.jpg') }}"> --}}
<link rel="stylesheet" href="{{ asset('styles.css') }}">
{{-- SCRIPTS --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.7/dist/cdn.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<title>@yield('title')</title>
