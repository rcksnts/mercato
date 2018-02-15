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

        input.taste-test {
            color: rgba(215, 222, 143, 1) !important;
            border-bottom: 1px solid rgba(215, 222, 143, 0.5) !important;
            box-shadow: 0 1px 0 0 rgba(215, 222, 143, 0.5) !important
        }

        /* label focus color */
        input.taste-test:focus + label {
            color: rgba(215, 222, 143, 1) !important;
        }

        /* label underline focus color */
        input.taste-test:focus {
            border-bottom: 1px solid rgba(215, 222, 143, 1) !important;
            box-shadow: 0 1px 0 0 rgba(215, 222, 143, 1) !important
        }

        .borderBottom15-white {
            position: relative;
        }

        .borderBottom15-white:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 15%;
            height: 100%;
            width: 70%;
            border-bottom: 1px solid white;
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
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px; z-index: 0"><b>Menu</b></p>

{{--    {{ md5('admin') }}--}}

    <form method="POST" action="/taste-test/submit">
        {{ csrf_field() }}

        <div id="modal_taste_test" class="modal">
            <div class="modal-content white-text oratorStd valign-wrapper" style="background: #b07e5b;">
                <div class="center-block">
                    <p class="flow-text">Schedule your taste test</p>
                    <div class="divider"></div>
                    <br>

                    <div class="input-field">
                        <input id="name" name="name" type="text" class="signup-email validate" minlength="4"
                               maxlength="64" required>
                        <label for="name" class="white-text">Full Name *</label>
                    </div>

                    <div class="input-field">
                            <textarea id="food_concept" name="food_concept" type="text"
                                      class="signup-email materialize-textarea validate"
                                      minlength="2" maxlength="1024" required></textarea>
                        <label for="food_concept" class="white-text">Food Concept Name *</label>
                    </div>

                    <div class="input-field">
                            <textarea id="products" name="products" type="text"
                                      class="signup-email materialize-textarea validate" minlength="2"
                                      maxlength="1024" required></textarea>
                        <label for="products" class="white-text">Products *</label>
                    </div>

                    <div class="input-field">
                        <input id="email" name="email" type="email" class="signup-email validate" minlength="2"
                               maxlength="176" required>
                        <label for="email" class="white-text">Email *</label>
                    </div>

                    <div class="input-field">
                        <textarea id="business_account" name="business_account" type="text"
                                  class="signup-email materialize-textarea validate" minlength="2"
                                  maxlength="256"></textarea>
                        <label for="business_account" class="white-text">Facebook/Instagram Account</label>
                    </div>

                    <div class="input-field">
                        <input id="mobile" name="mobile" type="number" class="signup-email validate" min="0"
                               max="9999999999999" minlength="11" maxlength="13" required>
                        <label for="mobile" class="white-text">Mobile Number *</label>
                    </div>

                    <p class="white-text">How did you find us? *</p>

                    <p>
                        <input name="found_via" type="radio" id="rbtnFacebook" class="with-gap" value="facebook"
                               checked>
                        <label for="rbtnFacebook" class="white-text">Facebook</label>
                    </p>

                    <p>
                        <input name="found_via" type="radio" id="rbtnInstagram" class="with-gap" value="instagram">
                        <label for="rbtnInstagram" class="white-text">Instagram</label>
                    </p>

                    <p>
                        <input name="found_via" type="radio" id="rbtnTwitter" class="with-gap" value="twitter">
                        <label for="rbtnTwitter" class="white-text">Twitter</label>
                    </p>

                    <p>
                        <input name="found_via" type="radio" id="rbtnBazaarGroup" class="with-gap"
                               value="bazaar_group">
                        <label for="rbtnBazaarGroup" class="white-text">Bazaar Groups</label>
                    </p>

                    <br>
                    <div class="divider"></div>
                    <br>

                    <button type="submit" class="center-block borderBottom15-white"
                            style="border: none; background: none; font-size: 18px; color: white; padding-bottom: 0px; margin-bottom: 0;">
                        <i>Submit</i>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- Desktop View-->
    <div class="hide-on-med-and-down">
        @include('public.about_desktop')
    </div>

    <!-- Tablet View -->
    <div class="hide-on-large-only show-on-med hide-on-small-and-down">
        @include('public.about_tablet')
    </div>

    <!-- Mobile View-->
    <div class="hide-on-med-and-up">
        @include('public.about_mobile')
    </div>
@stop

@section('script')
    <script type="text/javascript">
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }

        $(document).ready(function () {
            $('.modal').modal();
        });
    </script>
@stop