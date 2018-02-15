@extends('master_admin')

@section('title')

@stop

@section('header')
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
@stop

@section('body')
    @include('admin.nav_blog')

    <div class="row">
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

@stop