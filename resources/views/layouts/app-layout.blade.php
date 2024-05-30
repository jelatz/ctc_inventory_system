<!DOCTYPE html>
<html lang={{str_replace('_','-', app()->getLocale())}}>
<head>
    <x-partials.head />
</head>
<body>
    @if(auth())
    <x-sidebar />
    @else
    <x-sidebar class="hidden"/>
    @endif
    {{$slot}}
</body>
</html>
