<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Dashboard - PPDB</title>
</head>
<body>
    
    {{-- Navbar --}}

        @include('partials.user.navbar')

    {{-- End Navbar --}}

    {{-- Sidebar --}}

        {{-- Belum ada --}}

    {{-- Sidebar --}}

    {{-- Content --}}

        @yield('content')

    {{-- End Content --}}


<script src="/js/bootstrap.min.js"></script>
</body>
</html>