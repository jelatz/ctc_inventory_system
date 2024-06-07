<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head />
</head>

<body>
    <header>

    </header>

    <main>
        {{ $slot }}
    </main>
</body>
