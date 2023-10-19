<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('admin/css/material-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">


    <!-- Scripts -->

</head>

<body>
    @include('layouts.includes.sidebar')
    <main class="main-content
    position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('layouts.includes.adminnavbar')
        <div class="container-fluid py-4">
            <div class="content">
                @yield('content')

            </div>

            @include('layouts.includes.adminfooter')

        </div>



    </main>



    <script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}"></script>

    @yield('scripts')


</body>

</html>
