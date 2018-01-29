@extends('master_user')

@section('title')

@stop

@section('header')
    <style type="text/css">
        .scheduleTasteTestSpacing {
            letter-spacing: 2px;
        }

        #nav_login {
            color: black;
        }

        #nav_signup {
            color: black;
        }

        input {
            color: rgba(215, 222, 143, 1) !important;
            border-bottom: 1px solid rgba(215, 222, 143, 0.5) !important;
            box-shadow: 0 1px 0 0 rgba(215, 222, 143, 0.5) !important
        }

        /* label focus color */
        input:focus + label {
            color: rgba(215, 222, 143, 1) !important;
        }

        /* label underline focus color */
        input:focus {
            border-bottom: 1px solid rgba(215, 222, 143, 1) !important;
            box-shadow: 0 1px 0 0 rgba(215, 222, 143, 1) !important
        }

        .borderBottom75 {
            position: relative;
        }

        .borderBottom75:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 25%;
            height: 100%;
            width: 50%;
            border-bottom: 1px solid rgba(215, 222, 143, 1);
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
                <img src="{{ asset('img/about3.jpg') }}"
                     style="width: 50%; position: relative; left: 65%; min-height: 224px;"/>
                <img src="{{ asset('img/about4.jpg') }}"
                     style="width: 55%; position: relative; left: 25%; bottom: 64px; max-height: 436px; z-index: -1"/>
            </div>

            <div class="col m6 oratorStd">
                <div style="position: relative; left: 20%; width: 75%;">
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
                        HUNGER BUSTER
                    </p>
                    <p style="margin: 0;">
                        MANANG'S CHICKEN
                    </p>
                    <p style="margin: 0;">
                        RISA
                    </p>
                </div>

                <div style="position: relative; left: -15%; top: 16px; width: 85%;">
                    <p style="margin: 0;">
                        MOCHIKO
                    </p>
                    <p style="margin: 0;">
                        GINO'S BRICK OVEN PIZZA
                    </p>
                    <p style="margin: 0;">
                        GOOD MEAL HUNTING
                    </p>
                    <p style="margin: 0;">
                        LOUIE-LUIS ICE CREAM SANDWHICH
                    </p>
                    <p style="margin: 0;">
                        BAYANI BREW
                    </p>
                    <p style="margin: 0;">
                        GAWAD KALINGA
                    </p>
                    <p style="margin: 0;">
                        KRISTINA'S PREMIUM INUTAK
                    </p>
                    <p style="margin: 0;">
                        MIO GELATI
                    </p>
                    <p style="margin: 0;">
                        THEO & PHILO ARTISAN CHOCOLATES
                    </p>
                    <p style="margin: 0;">
                        BRASAS LATIN AMERICAN STREET FOOD
                    </p>
                </div>
            </div>
        </div>

        <div id="taste-test" class="row"
             style="background-image: url('{{ asset('img/about_taste_test.jpg') }}');
                     background-size: 70%; background-repeat: no-repeat; margin-bottom: 0;">

            <p class="avenir right-align scheduleTasteTestSpacing"
               style="font-size: 48px;  margin-bottom: 0; line-height: 16px;
                   position: relative; right: calc(20% + 32px);
                   color: rgba(86,132,135,1); padding-top: 92px;">
                <i>Schedule Your Taste Test Now
                </i>
            </p>

            <p class="avenir right-align scheduleTasteTestSpacing"
               style="font-size: 48px;  margin-bottom: 0; line-height: 26px;
                   position: relative; right: calc(20% + 32px);
               color: rgba(129,166,172,1);">
                <i>Schedule Your Taste Test Now
                </i>
            </p>

            <p class="avenir right-align scheduleTasteTestSpacing"
               style="font-size: 48px;  margin-bottom: 0; line-height: 16px;
                   position: relative; right: calc(20% + 32px);
               color: rgba(169,187,199,1);">
                <i>Schedule Your Taste Test Now
                </i>
            </p>

            <p style="padding-top: 5%;"></p>

            <div style="width: 70%">
                <p class="avenir right-align" style="font-size: 26px; margin-top: 0; margin-bottom: 0; line-height: 26px;
               position: relative; right: 32px;
               color: rgba(215,222,143, 1);">
                    <i>Be part of the Mercato Ecosystem today!</i>
                </p><br>

                <div class="row right avenir" style="margin-right: 32px; margin-bottom: 0;">
                    <div class="valign-wrapper" style=" width: 100%; height: 32px;">
                        <p class="left" style="margin-right: 32px; font-size: 16px; margin-top: 0; margin-bottom: 0;
                        color: rgba(215,222,143, 1);"><i>Merchant Name</i></p>

                        <p class="right">
                            <input type="text"
                                   style="font-size: 16px; height: 1.5rem; width: 185px;
                                margin-bottom: 0; padding-bottom: 0;">
                        </p>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row right avenir" style="margin-right: 32px; margin-bottom: 0;">
                    <div class="valign-wrapper" style=" width: 100%; height: 32px;">
                        <p class="left" style="margin-right: 32px; font-size: 16px; padding-bottom: 0;
                        color: rgba(215,222,143, 1);"><i>Email Address<i>&nbsp;&nbsp;&nbsp;</p>
                        <p class="right">
                            <input type="text"
                                   style="font-size: 16px; height: 1.5rem; width: 185px;
                                   margin-bottom: 0; padding-bottom: 0;">
                        </p>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row right avenir" style="margin-right: 32px; margin-bottom: 0;">
                    <div class="valign-wrapper" style=" width: 100%; height: 32px;">
                        <p class="left" style="margin-right: 32px; font-size: 16px; padding-bottom: 0;
                        color: rgba(215,222,143, 1);"><i>Mobile Number</i></p>
                        <p class="right">
                            <input type="text"
                                   style="font-size: 16px; height: 1.5rem; width: 185px;
                                   margin-bottom: 0; padding-bottom: 0;">
                        </p>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row right" style="margin-right: 32px; margin-top: 16px; margin-bottom: 0;">
                    <button type="button" class="borderBottom75"
                            style="border: none; background: none; font-size: 18px; color: rgba(215,222,143, 1); padding-bottom: 2px;">
                        <i>Submit</i>
                    </button>
                </div>

                <div class="clearfix"></div>
                <br><br>
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