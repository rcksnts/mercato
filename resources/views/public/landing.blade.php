@extends('master_user')

@section('title')

@stop

@section('header')

@stop

@section('body')
    @include('public.nav_fixed')
    <div class="video-full-landing" style="height: 100vh;">
        <video id="video-full" autoplay muted loop>
            <source src="{{ asset('vid/landing_bg.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="full-page valign-wrapper" style="background: rgba(0, 0, 0, 0.5); height: 100vh;">
        <div class="row left-align">
            <duv class="hide-on-med-and-up">
                <h5 class="white-text didot">#Tara<span class="yellow-text text-lighten-3">Mercato</span>Tayo</h5>
            </duv>

            <div class="hide-on-small-and-down">
                <p class="white-text didot" style="font-size: 32px; -webkit-transform: scale(4, 4)">#Tara<span style="color: rgba(252,237,199,1)">Mercato</span>Tayo</p>
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

        $(document).ready(function () {
            $('#video-full')[0].play();
        });
    </script>
@stop