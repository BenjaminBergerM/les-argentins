<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @yield('css')

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand fixed-top bg-transparent container mt-4" style="position: absolute;">
            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="" height="64px"></a>
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item active">
                    <a class="nav-link" href="#">ES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EN</a>
                </li> --}}
                <li>
                    <a class="nav-link" onclick="openNav()" href="#">☰</a>
                </li>
            </ul>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/#hero"><strong>Home</strong></a>
            <a href="/#creativity">Creativity for all</a>
            <a href="/#founders">Founders</a>
            <a href="/#contact">Contacts</a>
        </div>
    </header>
    <main class="">
        @yield('content')
    </main>
    
    @yield('footer')
    
    @yield('js')

    {{-- Sidenav --}}
    <script src="{{ asset('js/sidenav.js') }}"></script>

    {{-- Optional JavaScript --}}
    {{-- jQuery first, then Popper.js, then Bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>