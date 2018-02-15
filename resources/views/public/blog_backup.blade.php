@extends('master_user')

@section('title')
    <title>Blog</title>
@stop

@section('header')
@stop

@section('body')
    @include('public.nav_fixed_dark')
    @include('public.nav_side')

    <p onclick="openNav()" class="oratorStd"
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px;"><b>Menu</b></p>


    <!-- Desktop View -->
    {{--<div class="hide-on-med-and-down">--}}
        {{--<div class="row full-page" style="margin-bottom: 0; margin-left: calc(220px + 43.2px);">--}}
            {{--<div class="full-page"--}}
                 {{--style="background-image: url({{ asset('img/blog_bg.jpg') }}); background-size: cover; min-height: 100vh; max-width: 1280px;">--}}

                {{--<div class="full-page" style="width: 100%; min-height: 100vh;">--}}
                    {{--<div class="col m12" style="position: fixed; bottom: 15%; margin-left: 5%;">--}}
                        {{--<h2 class=""><i>Blog</i></h2>--}}
                        {{--<br>--}}

                        {{--<div style="margin-left: 48px;">--}}
                            {{--<a href=""><h5 class="hover-light" style="color: black;">Stories</h5></a>--}}
                            {{--<a href=""><h5 class="hover-light" style="color: black;">Merchant Feature</h5></a>--}}
                            {{--<a href=""><h5 class="hover-light" style="color: black;">Videos</h5></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Mobile View -->
    {{--<div class="hide-on-large-only">--}}
        {{--<div class="row full-page" style="margin-bottom: 0;">--}}
            {{--<div class="full-page"--}}
                 {{--style="background-image: url({{ asset('img/blog_bg.jpg') }}); background-size: cover; min-height: 100vh;">--}}

                {{--<div class="full-page"--}}
                     {{--background: rgba(0, 0, 0, 0.3);--}}
                     {{--style="width: 100%; min-height: 100vh; padding-left: 15%;">--}}
                    {{--<div class="col s12 center-block" style="position: fixed; bottom: 32px; margin-bottom: 20%;">--}}
                        {{--<h2 class="grey-text text-lighten-3"><i>Blog</i></h2>--}}
                        {{--<h2 class="black-text"><i>Blog</i></h2>--}}

                        {{--<br>--}}
                        {{--<div style="padding-left: 32px;">--}}
                            {{--<a href=""><h5 class="grey-text text-lighten-3">Stories</h5></a>--}}
                            {{--<a href=""><h5 class="grey-text text-lighten-3">Merchant Feature</h5></a>--}}
                            {{--<a href=""><h5 class="grey-text text-lighten-3">Videos</h5></a>--}}

                            {{--<a href=""><h5 class="hover-light" style="color: black;">Stories</h5></a>--}}
                            {{--<a href=""><h5 class="hover-light" style="color: black;">Merchant Feature</h5></a>--}}
                            {{--<a href=""><h5 class="hover-light" style="color: black;">Videos</h5></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@stop

@section('script')
    <script type="text/javascript">
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
            document.getElementById("myNav").style.visibility = 'visible';
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
@stop