@extends('master_user')

@section('title')
    <title>Blog</title>
@stop

@section('header')
@stop

@section('body')
    @include('public.nav_side')

    <h5 onclick="openNav()" style="cursor: pointer; position: fixed; bottom: 32px; left: 32px;">Menu</h5>
    <div class="hide-on-small-and-down">
        <div class="row full-page" style="margin-bottom: 0; padding-left: 128px;">
            <div class="full-page"
                 style="background-image: url({{ asset('img/blog_bg.jpg') }}); background-size: cover; min-height: 100vh;">

                <div class="full-page" style="width: 100%; background: rgba(0, 0, 0, 0.3); min-height: 100vh;">
                    <div class="col s12 m10 offset-m1" style="position: fixed; bottom: 15%;">
                        <h2 class="grey-text text-lighten-3"><i>Blog</i></h2>

                        <br>
                        <h5 class="grey-text text-lighten-3">Stories</h5>
                        <h5 class="grey-text text-lighten-3">Merchant Feature</h5>
                        <h5 class="grey-text text-lighten-3">Videos</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="hide-on-med-and-up">
        <div class="row full-page" style="margin-bottom: 0;">
            <div class="full-page"
                 style="background-image: url({{ asset('img/blog_bg.jpg') }}); background-size: cover; min-height: 100vh;">

                <div class="full-page" style="width: 100%; background: rgba(0, 0, 0, 0.3); min-height: 100vh;">
                <div class="col s12 center-block center-align" style="position: fixed; bottom: 15%;">
                    <h2 class="grey-text text-lighten-3"><i>Blog</i></h2>

                    <br>
                    <h5 class="grey-text text-lighten-3">Stories</h5>
                    <h5 class="grey-text text-lighten-3">Merchant Feature</h5>
                    <h5 class="grey-text text-lighten-3">Videos</h5>
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