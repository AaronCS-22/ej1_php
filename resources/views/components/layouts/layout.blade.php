<!doctype html>
<html lang=es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Proyecto Laravel"}}</title>
    @vite(["resources/css/app.css","resources/js/app.js"])
</head>
<body>
<x-layouts.header />
<x-layouts.nav />
<main class="lg:h-74v h-84v bg-main">
    {{$slot}}
</main>
<x-layouts.footer />
</body>
</html>
