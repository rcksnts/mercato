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
    <div class="hide-on-small-and-down">
        <div class="row full-page" style="margin-bottom: 0; margin-left: calc(220px + 43.2px);">
            <div class="full-page"
                 style="background-image: url({{ asset('img/blog_bg.jpg') }}); background-size: cover; min-height: 100vh;">

                <div class="full-page" style="width: 100%; min-height: 100vh;">
                    <div class="col m12" style="position: fixed; bottom: 20%; margin-left: 5%;">
                        <h2 class=""><i>Blog</i></h2>
                        <br>

                        <div style="margin-left: 48px;">
                            <a href="" class="black-text"><h5 class="" style="max-width: 200px;">Stories</h5></a>
                            <a href="" class="black-text"><h5 class="" style="max-width: 200px;">Merchant Feature</h5></a>
                            <a href="" class="black-text"><h5 class="" style="max-width: 200px;">Videos</h5></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Mobile View -->
    <div class="hide-on-med-and-up">
        <div class="row full-page" style="margin-bottom: 0;">
            <div class="full-page"
                 style="background-image: url({{ asset('img/blog_bg.jpg') }}); background-size: cover; min-height: 100vh;">

                <div class="full-page" style="width: 100%; background: rgba(0, 0, 0, 0.3); min-height: 100vh;">
                    <div class="col s12 center-block center-align" style="position: fixed; bottom: 15%;">
                        <h2 class="grey-text text-lighten-3"><i>Blog</i></h2>

                        <br>
                        <a href=""><h5 class="grey-text text-lighten-3">Stories</h5></a>
                        <a href=""><h5 class="grey-text text-lighten-3">Merchant Feature</h5></a>
                        <a href=""><h5 class="grey-text text-lighten-3">Videos</h5></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
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