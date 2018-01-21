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

    <div class="full-page valign-wrapper">
        <div class="row center-align">
            <h1>Tara</h1><br>
            <h1>Sa</h1><br>
            <h1>Mercato</h1><br>
        </div>
    </div>
@stop

@section('script')

@stop