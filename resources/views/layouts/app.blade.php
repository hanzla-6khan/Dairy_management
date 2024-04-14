<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



    <link href="{{ asset('assets/css/registration.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>




</head>


<style>





</style>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
            <div class="header-left">
                <div class="dashboard_bar">
                    Logo
                </div>
            </div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <ul class="navbar-nav header-right">
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" role="button" data-bs-toggle="dropdown">
                                        <img src="{{ asset('assets/img/' . Auth::user()->image) }}" width="20"
                                            alt="" />
                                        <div class="header-info">
                                            {{ Auth::user()->name }}
                                        </div>
                                    </a>


                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>


                                    </div>
                                </li>
                            </ul>

                        </li>
                    @endguest
                </ul>


                <ul class="navbar-nav ml-auto">


                    <li class="nav-item">
                        <div class="clock">
                            <div class="number" style="--n: 1"><b>1</b></div>
                            <div class="number" style="--n: 2"><b>2</b></div>
                            <div class="number" style="--n: 3"><b>3</b></div>
                            <div class="number" style="--n: 4"><b>4</b></div>
                            <div class="number" style="--n: 5"><b>5</b></div>
                            <div class="number" style="--n: 6"><b>6</b></div>
                            <div class="number" style="--n: 7"><b>7</b></div>
                            <div class="number" style="--n: 8"><b>8</b></div>
                            <div class="number" style="--n: 9"><b>9</b></div>
                            <div class="number" style="--n: 10"><b>10</b></div>
                            <div class="number" style="--n: 11"><b>11</b></div>
                            <div class="number" style="--n: 12"><b>12</b></div>
                            <div class="hour-hand" id="hour-hand"></div>
                            <div class="minute-hand" id="minute-hand"></div>
                            <div class="second-hand" id="second-hand"></div>
                            <div class="center-dot"></div>
                        </div>
                    </li>


                </ul>
            </div>
    </div>




    </nav>











    </div>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <main class="py-4">
        @yield('content')
    </main>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "timeOut": 10000,
                "showMethod": "slideDown",
                "hideMethod": "slideUp",
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "showDuration": "300",
                "hideDuration": "1000",
                "closeButton": true,
                "progressBar": true,
            };


            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>
    <style>
        .toast {
            background-color: rgb(8, 226, 48) !important;
            color: rgb(16, 13, 13) !important;
        }
    </style>

    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.table').DataTable()
        })
    </script>



    <script>
        let logoutTimer;
        const appUrl = "{{ url('/timeout/logout') }}"

        function resetTimer() {
            clearTimeout(logoutTimer);
            logoutTimer = setTimeout(logoutUser, 100000); // 300000 milliseconds = 5 minutes
        }

        async function logoutUser() {
            fetch(appUrl, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json'
                    },
                    credentials: 'same-origin' // Needed for cookies (session) to be included
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data.message);
                    window.location.href = '/login'; // Redirect to login page or wherever you want
                })
                .catch(error => console.error('Error:', error));
        }

        // Events that reset the timer
        window.onload = resetTimer;
        window.onmousemove = resetTimer;
        window.onmousedown = resetTimer; // catches touchscreen presses
        window.onclick = resetTimer; // catches touchpad clicks
        window.onscroll = resetTimer; // catches scrolling with arrow keys
        window.onkeypress = resetTimer;
    </script>
     <script src="{{ asset('assets/js/calander.js') }}"></script>
</body>

</html>
