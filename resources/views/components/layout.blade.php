<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/css/navbar.css', 'resources/js/app.js'])
    <title>Sweet Life</title>
</head>

<body>
    <x-navbar />
    {{ $slot }} {{-- serve per inserire qui le varie info delle altre pagine --}}
    <x-footer />
</body>

</html>
