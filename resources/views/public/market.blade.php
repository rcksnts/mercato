@extends('master_user')

@section('title')

@stop

@section('header')
    <style type="text/css">
        .fontspaced-3 {
            letter-spacing: 3px;
        }
    </style>
@stop

@section('body')
    @include('public.nav_fixed_dark')
    @include('public.nav_side')

    <p onclick="openNav()" class="oratorStd"
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px; z-index: 1;"><b>Menu</b></p>

    <div class="row full-page" style="margin-bottom: 0;">
        <img src="{{ asset('img/market1.jpg') }}"
             style="height: 35%; width: 30%; position: fixed; margin-top: 66px; margin-left: 110px;"/>
        <img src="{{ asset('img/market2.jpg') }}"
             style="height: 30%; width: 25%; position: fixed; margin-top: 148px; left: 45%;"/>

        <img src="{{ asset('img/market3.jpg') }}"
             style="height: 30%; width: 20%; position: fixed; bottom: 48px; left: 20%;"/>
        <img src="{{ asset('img/market4.jpg') }}"
             style="height: 40%; width: 15%; position: fixed; bottom: 44px; left: 65%;"/>

        <div style="position: fixed; bottom: 24%; left: 20%;">
            <div class="center-align">
                <p class="avenir fontspaced-3"
                   style="font-size: 48px; width: 256px; margin-left:32px; margin-bottom: 0; line-height: 48px; color: rgba(246,193,103,1)">
                    <i>
                        Markets
                    </i>
                </p>

                <p class="avenir fontspaced-3"
                   style="font-size: 48px; width: 256px; margin-left:32px; margin-top: 0; margin-bottom: 0; line-height: 48px; color: rgba(242,167,88, 1)">
                    <i>
                        Markets
                    </i>
                </p>

                <p class="avenir fontspaced-3"
                   style="font-size: 48px; margin-top: 0; width: 256px; margin-left:32px; line-height: 48px; color: rgba(198,109,41,1)">
                    <i>
                        Markets
                    </i>
                </p>
            </div>
        </div>

        <div style="position: fixed; width: calc(25% - 3px); bottom: 48px; height: 30%; left: calc(40% + 3px);">
            <div class="center-align" style="margin-top: 64px; width: 80%; margin-left: 10%;">
                <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
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