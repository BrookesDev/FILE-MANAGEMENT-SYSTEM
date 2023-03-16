<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Documents Management System</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables/datatables.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">
    

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <div class="main-wrapper">

        @include('layouts.header')
        @include('layouts.sidebar')     


        <div class="page-wrapper">
            @yield('content')
            
        </div>

    </div>


    @yield('scripts')
    @include('layouts.scripts')

</body>

</html>
