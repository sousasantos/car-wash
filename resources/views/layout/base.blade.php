<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('layout._navbar')
    @if (session('success'))
        <div class="container p-5">        
            <x-alert type=success :message="session('success')"></x-alert>
        </div>
    @endif

    @yield('content')

    <script src="{{ mix('assets/js/app.js') }}"></script>
</body>
</html>