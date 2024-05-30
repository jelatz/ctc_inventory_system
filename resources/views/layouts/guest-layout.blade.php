<!DOCTYPE html>
<html lang={{str_replace('_','-', app()->getLocale())}}>
<head>
    <x-partials.head />
</head>
<body class="min-h-screen">
    <main class="flex justify-between items-center">
        <div class="relative min-h-screen bg-[url('/public/images/login-bg/bg-1.jpg')] bg-no-repeat bg-cover bg-center w-[70%] images">
            <div class="absolute w-full h-full top-0 left-0 opacity-60 bg-black">hey</div>
        </div>
        {{$slot}}
    </main>
</body>
</html>
