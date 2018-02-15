<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('title')
    @yield('header')

    <style type="text/css">
        header, main, footer {
            padding-left: 72px;
        }

        @media only screen and (max-width: 992px) {
            header, main, footer {
                padding-left: 0;
            }
        }

        ul#slide-out > li > a {
            height: 64px;
            padding-top: 8px;
        }

    </style>

    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}"/>
</head>

<body>
<main>
    @include('admin.nav_fixed_side')
    @yield('body')
</main>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.modal').modal();

        @if(session()->has('response'))
        @if(session()->get('response_success'))
        Materialize.toast('{{ session()->get('response') }}', 10000)
        @else
        Materialize.toast('{{ session()->get('response') }}', 10000, 'red darken-2')
        @endif
        @endif

        $('.button-collapse').sideNav({
            menuWidth: 72,
            edge: 'left',
            closeOnClick: true,
            draggable: true,
            onOpen: function (el) {

            },
            onClose: function (el) {

            },
        });
    });
</script>

@yield('script')
</body>
</html>