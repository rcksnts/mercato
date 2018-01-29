@extends('master_user')

@section('title')

@stop

@section('header')
    <style type="text/css">
        body {
            background: url('{{ asset('img/contact-us.jpg') }}');
            background-size: cover;
        }

        .fontspaced-2{
            letter-spacing: 1px;
        }
    </style>
@stop

@section('body')
    @include('public.nav_fixed')
    @include('public.nav_side')

    <p onclick="openNav()" class="oratorStd"
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px;"><b>Menu</b></p>

    <div class="row full-page" style="background: rgba(0, 0, 0, 0.3); height: 100vh; margin-bottom: 0;">
        <div class="center-block">

            <div class="row" style="position: absolute; bottom: 10%; width: 100%;">
                <div class="col s6 right-align">
                    <p class="avenir" style="font-size: 48px; color: rgba(186,214,217, 1); margin-top: 0; margin-right: 24px;">
                        <i>
                            Get In Touch
                        </i>
                    </p>
                </div>

                <div class="col s6 white-text fontspaced-2">
                    <p style="padding-top: 2px;"></p>
                    <p class="oratorStd" style="margin-bottom: 0;">
                        MERCATO@GMAIL.COM
                    </p>

                    <p class="oratorStd" style="margin-top: 0;">
                        0917 822 8928
                    </p>

                    <p class="oratorStd" style="margin-bottom: 0;">
                        A SPACE
                    </p>

                    <p class="oratorStd" style="margin-top: 0;">
                        MAKATI CITY, PHILIPPINES
                    </p>
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