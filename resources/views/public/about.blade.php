@extends('master_user')

@section('title')

@stop

@section('header')

@stop

@section('body')
    @include('public.nav_side')
    <h5 onclick="openNav()" style="cursor: pointer; position: fixed; bottom: 32px; left: 32px;">Menu</h5>

    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <h3><i>About Us</i></h3>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6">
                <img src="{{ asset('img/1.jpg') }}" class="img-responsive" style="width: 100%;"/>

                <p class="flow-text">
                    INSPIRED BY THE POPULAR ASIAN STREET FOOD SCENE, MERCATO ALSO A STARTUP DISCOVERY, INCUBATOR, AND
                    INNOVATION CENTER OFFERING START UPS ACCESS TO FOODIES THROUGH WEEKEND MARKETS IN METRO MANILA.
                </p>
            </div>

            <div class="col s12 m6">
                <p class="flow-text">ESTABLISHED IN LATE 2010. MERCATO CENTRALE IS NOW THE COUNTRY'S PREMIER NIGHT FOOD
                    MARKET
                    OPERATOR KNOWN FOR OUR WIDE ARRAY AND CONTINUOUS CURATED CHOICES FROM HOME-BASED FOOD VENDORS AT
                    AFFORDABLE
                    PRICES (VERSUS FAST FOOD AND RESTAURANTS). 'HANG OUT' PLACE FOR MILLENIALS, FOODS AND MUST VISIT
                    DESTINATIONS FOR TOURISTS/BALIKBAYANS.</p>

                <h5 class="center-align">
                    The biggest night food market in the Philippines which incubates new and unique food concepts.
                </h5>

                <img src="{{ asset('img/2.jpg') }}" class="img-responsive" style="width: 100%;"/>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h3 class="center-align"><i>Mercato has incubated many succesful food businesses</i></h3>

                <img src="{{ asset('img/3.jpg') }}" class="img-responsive left"
                     style="width: 60%; position: relative; left: 15%;">
                <div style="position: relative; left: 20%;">
                    <p>PAMORA FARM</p>
                    <p>BAWAI'S</p>
                    <p>TOKYO TEMPURA</p>
                </div>

                <div class="clearfix"></div>

                <img src="{{ asset('img/4.jpg') }}" class="img-responsive left"
                     style="width: 50%; position: relative; left: 5%; bottom: 64px;">
                <div style="position: relative; left: 10%;">
                    <p>MOCHIKO</p>
                    <p>GINO'S BRICK OVEN PIZZA</p>
                    <p>LOUIE-LUIS ICE CREAM SANDWICH</p>
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