<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @yield('title')
    @yield('header')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}"/>
</head>

<body>
<main>
    @yield('body')
</main>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.modal').modal();
    })
</script>
@yield('script')
</body>
</html>