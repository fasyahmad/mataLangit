<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('prepend-style')
    @include('includes.styleApp')
    @stack('addon-style')
</head>
<body>
    <!-- navbar -->
    @include('includes.navbarApp')
    <!-- end navbar -->
    @yield('content')
    <!-- footer -->
    @include('includes.footerApp')
    <!-- end footer -->
    @stack('prepend-script')
    @include('includes.scriptApp')
    @stack('addon-script')
</body>
</html>