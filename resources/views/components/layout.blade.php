<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{$title}}</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <x-layouts.header />
    </div>
    <div class="row" style="min-height: 87vh">
        <div class="col-2 fixed-top ps-0">
            <x-layouts.sidebar />
        </div>
        <div class="col-9 offset-2">
            {{$slot}}
        </div>
    </div>
    <div class="row">
        <x-layouts.footer />
    </div>
</div>
</body>
</html>
