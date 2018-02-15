@extends('master_user')

@section('title')

@stop

@section('header')
    {{--<style type="text/css">--}}
        {{--.fontspaced-3 {--}}
            {{--letter-spacing: 3px;--}}
        {{--}--}}
    {{--</style>--}}
@stop

@section('body')
    @include('public.nav_fixed_dark')
    @include('public.nav_side')

    <p onclick="openNav()" class="oratorStd"
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px; z-index: 0;"><b>Menu</b></p>

    <div class="row">
        <div style="margin-top: 128px;"></div>


        <div class="container">
            <br>

            <!-- Desktop View -->
            <div class="card hide-on-med-and-down z-depth-0">
                <div class="card-image" style="min-width: 400px;">
                    <img src="/img_blog/{{ $blog->cover_url }}" class="center-block"
                         style="!important; max-height: 512px; !important;"/>
                </div>

                <div class="col s12 m10 offset-m1">
                    <div class="card-stacked" style="max-width: 100%;">
                        <div class="card-content" style="word-wrap: break-word">

                            <p class="helveticaNeue right">
                                {{ Carbon\Carbon::parse($blog->created_at)->format('F j Y h:i A') }}
                            </p>
                            <div class="clearfix"></div>
                            <div class="divider"></div><br>

                            <a href="/admin/blogs/{{ $blog->id }}" class="helveticaNeue grey-text text-darken-2"
                               style="margin-top: 0; font-size: 32px;">
                                {{ str_limit($blog->title, $limit = 24, $end = '...') }}
                            </a>

                            <p class="helveticaNeue grey-text text-lighten-2" style="position: relative;">
                                {!! str_limit($blog->content, $limit = 256, $end = '...') !!}
                            </p>
                        </div>

                        <div class="card-action" style="border-top: none;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile View -->
            <div class="card show-on-medium-and-down hide-on-large-only">
                <div class="card-image">
                    <img src="/blog/{{ $blog->cover_url }}"/>
                </div>

                <div class="card-content">
                    <p class="helveticaNeue"
                       style="margin-top: 0; font-size:32px;">{{ str_limit($blog->title, $limit = 24, $end = '...') }}</p>

                    <p class="helveticaNeue" style="position: relative;">
                        {!! str_limit($blog->content, $limit = 192, $end = '...') !!}
                    </p>
                </div>

                <div class="card-action" style="border-top: none;">
                    <p class="helveticaNeue right">
                        {{ Carbon\Carbon::parse($blog->created_at)->format('F j Y h:i A') }}
                    </p>
                </div>

                <div class="clearfix"></div>
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