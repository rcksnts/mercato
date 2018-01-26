@extends('master_user')

@section('title')

@stop

@section('header')

@stop

@section('body')
    @include('public.nav_fixed')
    <div class="video-full-landing">
        <video id="video-full" autoplay="true" controls muted>
            <source src="{{ asset('vid/landing_bg.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="full-page valign-wrapper" style="background: rgba(0, 0, 0, 0.5)">
        <div class="row left-align">
            <span class="hide-on-med-and-up">
                <h5 class="white-text">#TARA<span class="yellow-text text-lighten-3">MERCATO</span>TAYO</h5>
            </span>

            <span class="hide-on-small-and-down">
                <h1 class="white-text">#TARA<span class="yellow-text text-lighten-3">MERCATO</span>TAYO</h1>
            </span>
        </div>
    </div>

    <a href="/about" class="white-text"
       style="position: fixed; bottom: 32px; right: 32px; border-bottom: 1px solid white;">
        <i>Skip Intro</i>
    </a>
@stop

@section('script')

@stop