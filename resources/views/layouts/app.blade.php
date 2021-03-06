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
    <div class="overlay">
    </div>
    <header>
        <nav class="navbar navbar-expand fixed-top p-0" style="position: fixed;">
            <div class="container my-4 px-2 px-sm-0">

                <a href="/"><img id="logo" src="{{ asset('images/logo.png') }}" alt="" height="64px"></a>
                <ul class="navbar-nav ml-auto">
                    @if (\App\Setting::where('key', 'home_es_button')->first()->value)
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('locale/es') }}">ES</a>
                    </li>
                    @endif
                    @if (\App\Setting::where('key', 'home_fr_button')->first()->value)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('locale/fr') }}">FR</a>
                    </li>
                    @endif
                    @if (\App\Setting::where('key', 'home_en_button')->first()->value)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('locale/en') }}">EN</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" onclick="openNav(event)" href="#">☰</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/#hero" onclick="closeNav()"><strong>Home</strong></a>
            <a href="/#creativity" onclick="closeNav()">Creativity for all</a>
            <a href="/#founders" onclick="closeNav()">Founders</a>
            <a href="/#contact" onclick="closeNav()">Contacts</a>
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