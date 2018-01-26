@extends('master_user')

@section('title')

@stop

@section('header')
    <style>
        * {
            font-family: 'OratorStd';
            src: url({{ asset('fonts/OratorStd.otf') }})
        }
    </style>
@stop

@section('body')
    @include('public.nav_side')
    <h5 onclick="openNav()" style="cursor: pointer; position: fixed; bottom: 32px; left: 32px;">Menu</h5>

    <div style="margin-top: 10%;"></div>
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <h3 class="center-align" style="position: relative; top: 10%;"><i>About Us</i></h3>

                <img src="{{ asset('img/about1.jpg') }}" class="img-responsive"
                     style="width: 100%; max-height: 640px;"/>

                <p style="padding-right: 5%; padding-top: 1%; font-size: 18px;">
                    INSPIRED BY THE POPULAR ASIAN STREET FOOD SCENE, MERCATO ALSO A STARTUP DISCOVERY, INCUBATOR, AND
                    INNOVATION CENTER OFFERING START UPS ACCESS TO FOODIES THROUGH WEEKEND MARKETS IN METRO MANILA.
                </p>
            </div>

            <div class="col s12 m6">
                <p>ESTABLISHED IN LATE 2010. MERCATO CENTRALE IS NOW THE COUNTRY'S PREMIER NIGHT FOOD
                    MARKET
                    OPERATOR KNOWN FOR OUR WIDE ARRAY AND CONTINUOUS CURATED CHOICES FROM HOME-BASED FOOD VENDORS AT
                    AFFORDABLE
                    PRICES (VERSUS FAST FOOD AND RESTAURANTS). 'HANG OUT' PLACE FOR MILLENIALS, FOODS AND MUST VISIT
                    DESTINATIONS FOR TOURISTS/BALIKBAYANS.</p>

                <h4 class="left-align purple-text text-lighten-3"
                    style="margin-left: 15%; margin-top: 15%; margin-bottom: 15%;">
                    The biggest night food market in the Philippines which incubates new and unique food concepts.
                </h4>

                <img src="{{ asset('img/about2.jpg') }}" class="img-responsive"
                     style="width: 100%; right: 15%; position: relative;"/>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h3 class="center-block center-align">
                    <i class="red-text text-darken-2">
                        Mercato has incubated<br>
                        many succesful food businesses
                    </i>
                </h3>

                <img src="{{ asset('img/about3.jpg') }}" class="img-responsive left"
                     style="width: 60%; position: relative; left: 15%;">
                <div style="position: relative; left: 20%;">
                    <p>PAMORA FARM</p>
                    <p>BAWAI'S</p>
                    <p>TOKYO TEMPURA</p>
                    <p>SUNRISE BUCKETS</p>
                    <p>SHAWARMA BROS</p>
                    <p>MERRY MOO</p>
                    <p>SPRING</p>
                    <p>ANGRY PUFFS</p>
                    <p>HUNGER BUSTER</p>
                    <p>MANANG'S CHICKEN</p>
                    <p>RISA</p>
                </div>

                <div class="clearfix"></div>

                <img src="{{ asset('img/about4.jpg') }}" class="img-responsive left"
                     style="width: 50%; position: relative; left: 5%; bottom: 128px;">
                <div style="position: relative; left: 10%; padding-top: 16px;">
                    <p>MOCHIKO</p>
                    <p>GINO'S BRICK OVEN PIZZA</p>
                    <p>GOOD MEAL HUNTING</p>
                    <p>LOUIE-LUIS ICE CREAM SANDWICH</p>
                    <p>BAYANI BREW</p>
                    <p>GAWAD KALINGA</p>
                    <p>KRISTINA'S PREMIUM INUTAK</p>
                    <p>MIO GELATI</p>
                    <p>THEO & PHILO ARTISAN CHOCOLATES</p>
                    <p>BRASAS LATIN AMERICAN STREET FOOD</p>
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