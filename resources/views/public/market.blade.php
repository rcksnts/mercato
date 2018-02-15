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
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px; z-index: 0;"><b>Menu</b></p>

    <div class="row full-page" style="margin-bottom: 0;">

        <div class="hide-on-med-and-down">
            <img src="{{ asset('img/market1.jpg') }}"
                 style="height: 275px; width: 430px; position: fixed; margin-top: 66px; margin-left: 110px;"/>
            <img src="{{ asset('img/market2.jpg') }}"
                 style="height: 235px; width: 360px; position: fixed; margin-top: 148px; left: 45%;"/>

            <img src="{{ asset('img/market3.jpg') }}"
                 style="height: 225px; width: 300px; position: fixed; bottom: 48px; left: 20%;"/>
            <img src="{{ asset('img/market4.jpg') }}"
                 style="height: 300px; width: 195px; position: fixed; bottom: 44px; left: 65%;"/>

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

            <div class=""
                 style="position: fixed; width: calc(25% - 3px); bottom: 48px; height: 30%; left: calc(40% + 3px);">
                <div class="valign-wrapper" style="height: 100%;">
                    <div class="center-align" style="width: 80%; margin-left: 10%;">
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="hide-on-large-only">
            <div class="container">

                <div class="col s12 m10 offset-m1">
                    <div style="padding-top: 100px;"></div>

                    <img src="{{ asset('img/market1.jpg') }}"
                         style="width: 100%; margin-top: 66px;  z-index: -1;"/>
                    <img src="{{ asset('img/market2.jpg') }}"
                         style="width: 70%; position: relative; bottom: 70px; left: 15%;"/>
                </div>

                <div class="col s12 m10 offset-m1" style="position: relative; bottom: 100px;">

                    <div class="center-align">
                        <p class="avenir center-align fontspaced-3"
                           style="font-size: 48px;  margin-left: -32px; margin-bottom: 0; line-height: 48px; color: rgba(246,193,103,1)">
                            <i>
                                Markets
                            </i>
                        </p>

                        <p class="avenir fontspaced-3"
                           style="font-size: 48px; margin-top: 0; margin-bottom: 0; line-height: 48px; color: rgba(242,167,88, 1)">
                            <i>
                                Markets
                            </i>
                        </p>

                        <p class="avenir fontspaced-3"
                           style="font-size: 48px; margin-top: 0; margin-left:32px; line-height: 48px; color: rgba(198,109,41,1)">
                            <i>
                                Markets
                            </i>
                        </p>
                    </div>

                    <div class="center-align" style="width: 70%; margin-left: 15%;">
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                        <p class="oratorStd" style="font-size: 12px;"><b>Lorem Ipsum Lorem Ipsum Lorem Ipsum</b></p>
                    </div>
                </div>

                {{--<div class="col s12 m10 offset-m1">--}}
                    {{--<img src="{{ asset('img/market4.jpg') }}"--}}
                         {{--style="width: 70%; position: relative; left: 15%; z-index: -1;"/>--}}
                    {{--<img src="{{ asset('img/market3.jpg') }}"--}}
                         {{--style="width: 100%;  position: relative; bottom: 200px; margin-top: 66px;"/>--}}
                {{--</div>--}}

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