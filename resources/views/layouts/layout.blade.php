<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-meta />

    <style type="text/css">
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: none;
            }

            .navbar .nav-item:hover .nav-link {}

            .navbar .nav-item:hover .dropdown-menu {
                display: block;
            }

            .navbar .nav-item .dropdown-menu {
                margin-top: 0;
            }
        }

        /* ============ desktop view .end// ============ */

    </style>
</head>

<body class=" bg-light text-secondary">

    <head>


        <div class="container-fluid text-right align-items-end bg-warning" style=" height:4%">
            <a href="#" class=""> <img src=" {{ asset('img/icones/united_states_icon_127943.png') }}"
                class="h-50" alt="drapeau pays">
                <abbr title="english">{{ str_replace('_', '-', app()->getLocale()) }}</abbr> </a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>
                <div class="col-lg-10 bg-white">
                    <x-menu></x-menu>
    </head>
    <!-- ============= COMPONENT ============== -->
    <main>


        <div class="row">
            @yield("content")
        </div>
    </main>
    <!-- Footer -->
    <x-Footer/>
    </div>
    <div class="col"></div>
    </div>
    </div>
    @livewireScripts()
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@include('sweetalert::alert')
</html>
