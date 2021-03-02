<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light bg-gradient">
    @include('layout._navbar')
    @if (session('info'))
        <div class="col-6 offset-3">        
            <x-alert type=info :message="session('info')"></x-alert>
        </div>
    @endif

    @yield('content')

    <script src="{{ mix('assets/js/app.js') }}"></script>
</body>
</html>