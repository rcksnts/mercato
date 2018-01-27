@extends('master_user')

@section('title')

@stop

@section('header')
    <style type="text/css">
        #nav_login {
            color: black;
        }

        #nav_signup {
            color: black;
        }
    </style>
@stop

@section('body')
    @include('public.nav_fixed')
    @include('public.nav_side')

    <p onclick="openNav()" class="oratorStd"
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px;"><b>Menu</b></p>

    <!-- Desktop View-->
    <div class="hide-on-small-and-down">
        <div class="row full-page" style="margin-bottom: 0; padding-left: 172.9px;">

            <div style="padding-top: 10%;"></div>

            <div class="row" style="margin-bottom: 0;">
                <div class="col m6">
                    <div class="center-align" style="max-height: 900px;">
                        <p class="avenir"
                           style="font-size: 44px; margin-bottom: 0; line-height: 44px; color: rgba(200,180,152,1)"><i>About
                                Us</i></p>
                        <p class="avenir"
                           style="font-size: 44px; margin: 0; line-height: 44px; color: rgba(250,230, 215, 1)"><i>About
                                Us</i></p>
                        <p class="avenir" style="font-size: 44px; margin-top: 0; line-height: 44px; color: white"><i>About
                                Us</i></p>

                        <img src="{{ asset('img/about1.jpg') }}"
                             style="width: 70%; position: relative; bottom: 94px; z-index: -1;"/>

                        <p class="oratorStd transformUpper left-align"
                           style="width: 60%; position: relative; left: 15%; bottom: 78px; font-size: 12px; line-height: 28px; padding-right: 48px; clear: none;">
                            <b>
                                Inspired by the popular asian street food scene, Mercato also a startup discovery,
                                incubator and innovation center offering start ups access to foodies through weekend
                                markets in metro manila.
                            </b>
                        </p>
                    </div>
                </div>

                <div class="col m6">
                    <div style="margin-top: 32px;"></div>

                    <p class="oratorStd transformUpper"
                       style="width: 60%; position: relative; right: 48px; font-size: 12px; line-height: 28px;">
                        <b>
                            Established in late 2010, Mercato Centrale is
                            now the country’s premier night food market
                            operator known for our wide array and continuous
                            curated choices from home-based food vendors at
                            affordable prices (versus fast food and restaurants).
                            ‘Hang out’ place for millenials, foodies and must
                            visit destinations for tourists/balikbayans.
                        </b>
                    </p>

                    <p class="avenir"
                       style="width: 70%; position: relative; color: rgba(188,161,191,1); font-size: 32px; line-height: 44px;">
                        <i>The biggest night food market in the Philippines which incubates new and unique food
                            concepts.
                        </i>
                    </p>

                    <div style="padding-top: 20px;"></div>

                    <img src="{{ asset('img/about2.jpg') }}"
                         style="width: 85%; position: relative; right: 180px; height: 380px; clear: none;"/>
                </div>
            </div>
        </div>

        <div class="row" style="padding-left: 172.9px;">
            <div class="col s12">
                <p class="avenir center-align"
                   style="font-size: 40px; line-height: 40px; color: rgba(140,27,55,1); padding-right: 86.45px;">
                    <i>Mercato has incubated<br>many successful food businesses.</i>
                </p>
            </div>

            <div class="col m6">
                <img src="{{ asset('img/about3.jpg') }}" style="width: 50%; position: relative; left: 65%;"/>
            </div>

            <div class="col m6 oratorStd">
                <div style="position: relative; left: 15%; width: 85%;">
                    <p style="margin: 0;">
                        PAMORA FARM
                    </p>
                    <p style="margin: 0;">
                        BAWAI'S
                    </p>
                    <p style="margin: 0;">
                        TOKYO TEMPURA
                    </p>
                    <p style="margin: 0;">
                        SUNRISE BUCKETS
                    </p>
                    <p style="margin: 0;">
                        SHAWARMA BROS
                    </p>
                    <p style="margin: 0;">
                        MERRY MOO
                    </p>
                    <p style="margin: 0;">
                        SPRING
                    </p>
                    <p style="margin: 0;">
                        ANGRY PUFFS
                    </p>
                    <p style="margin: 0;">
                        BAWAI'S
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile View-->
    <div class="hide-on-med-and-up">

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