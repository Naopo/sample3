<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample3') - Laravel 三周目</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>

</body>
</html>