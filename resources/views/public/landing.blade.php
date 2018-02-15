@extends('master_user')

@section('title')

@stop

@section('header')
@stop

@section('body')
    @include('public.nav_fixed_logo_only')
    <div class="video-full-landing" style="height: 100vh;">
        <video id="video-full" autoplay muted loop style="position: absolute; z-index: -1000;">
            <source src="{{ asset('vid/landing_bg.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="full-page valign-wrapper" style="background: rgba(0, 0, 0, 0.5); height: 100vh;">
        <div class="row left-align">
            <!-- Mobile View -->
            <div class="hide-on-med-and-up">
                <p class="white-text didot" style="font-size: 18px; -webkit-transform: scale(2, 2)">#Tara<span style="color: rgba(252,237,199,1)">Mercato</span>Tayo</p>
            </div>

            <!-- Tablet View -->
            <div class="hide-on-small-only hide-on-large-only show-on-medium">
                <p class="white-text didot" style="font-size: 28px; -webkit-transform: scale(2, 2)">#Tara<span style="color: rgba(252,237,199,1)">Mercato</span>Tayo</p>
            </div>

            <!-- Desktop View -->
            <div class="hide-on-med-and-down">
                <p class="white-text didot" style="font-size: 28px; -webkit-transform: scale(4, 4)">#Tara<span style="color: rgba(252,237,199,1)">Mercato</span>Tayo</p>
            </div>
        </div>
    </div>

    <a href="/about-us" class="white-text"
       style="position: fixed; bottom: 24px; right: 32px; border-bottom: 1px solid white;">
        <i>Skip Intro</i>
    </a>
@stop

@section('script')
    <script type="text/javascript">
        document.getElementById('icons_media').style.display = 'none';
        document.getElementById('navigation').style.display = 'none';

        $(document).ready(function () {
            $('#video-full')[0].play();
        });
    </script>
@stop