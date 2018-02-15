@extends('master_user')

@section('title')
    <title>Blog</title>
@stop

@section('header')
@stop

@section('body')
    @include('public.nav_fixed_dark')
    @include('public.nav_side')

    <p onclick="openNav()" class="oratorStd"
       style="cursor: pointer; position: fixed; bottom: 16px; left: 110px; font-size: 18px;"><b>Menu</b></p>

    <div class="row full-page hide-on-med-and-down" style="margin-bottom: 0; margin-left: calc(220px + 43.2px);">
        <div class="full-page">
            {{--style="background-image: url({{ asset('img/blog_bg.jpg') }}); background-size: cover;min-height: 100vh; max-width: 1280px;">--}}
            {{--<div class="container">--}}
            <br>
            <div style="margin-top: 128px;"></div>

            @foreach($blogs as $blog)
            <!-- Desktop View -->
                <div class="col s12 m10 offset-m1  hoverable">
                    <div class="card horizontal  hide-on-med-and-down z-depth-0">
                        <div class="card-image" style="min-width: 400px;">
                            <img src="/img_blog/{{ $blog->cover_url }}"
                                 style="width: 400px !important; height: 300px; !important;"/>
                        </div>

                        <div class="card-stacked" style="width: 100%;">
                            <div class="card-content" style="word-wrap: break-word; width: 100%;">
                                <a href="/blog/details/{{ $blog->id }}"
                                   class="futuraMediumBT grey-text text-darken-2 tooltipped"
                                   style="margin-top: 0; font-size: 32px;"
                                   data-position="bottom" data-delay="50" data-tooltip="{{ $blog->title }}">
                                    {{ str_limit($blog->title, $limit = 24, $end = '...') }}
                                </a>

                                <span class="avenir grey-text text-darken-1" style="position: relative; left: 16px;">
                                    {!! str_limit($blog->content, $limit = 256, $end = '...') !!}
                                </span>
                            </div>

                            <div class="card-action" style="border-top: none;">
                                <p class="helveticaNeue right">
                                    {{ Carbon\Carbon::parse($blog->created_at)->format('F j Y h:i A') }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            <div class="clearfix"></div>
            <br><br>

            {{--</div>--}}

            <div class="row">
                <div class="col s12 m10 offset-m1">

                    @if(isset($page))
                        @if($page < $blog_pages)
                            <p class="right helveticaNeue">
                                <a href="/blog/page/{{ $page+1 }}">
                                    Older Posts
                                </a>
                            </p>
                        @endif
                    @else
                        @if($blog_pages > 1)
                            <p class="right helveticaNeue">
                                <a href="/blog/page/2">
                                    Older Posts
                                </a>
                            </p>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </div>


    <div class="hide-on-large-only">
        <br>
        <div style="margin-top: 128px;"></div>
    </div>

    <div class="row">
    @foreach($blogs as $blog)
        <!-- Mobile View -->
            <div class="col s12 m10 offset-m1">
                <div class="card show-on-medium-and-down hide-on-large-only">
                    <div class="card-image">
                        <img src="{{ asset('/img_blog/' . $blog->cover_url) }}">
                    </div>

                    <div class="card-content">
                        <div class="center-align">
                            <a href="/blog/details/{{ $blog->id }}"
                               class="futuraMediumBT grey-text text-darken-2 tooltipped"
                               style="margin-top: 0; font-size: 32px;"
                               data-position="bottom" data-delay="50" data-tooltip="{{ $blog->title }}">
                                {{ str_limit($blog->title, $limit = 24, $end = '...') }}
                            </a>
                        </div>

                        <p class="helveticaNeue center-align">
                            {{ Carbon\Carbon::parse($blog->created_at)->format('F j Y h:i A') }}
                        </p>
                        <div class="clearfix"></div>
                        <div class="divider"></div>
                        <br>


                        <span class="avenir grey-text text-darken-1">
                            {!! str_limit($blog->content, $limit = 256, $end = '...') !!}
                        </span>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        @endforeach
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