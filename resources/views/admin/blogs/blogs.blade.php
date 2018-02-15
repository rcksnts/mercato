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

        @foreach($blogs as $blog)
            <!-- Desktop View -->
                <div class="col s12 m10 offset-m1">
                    <div class="card horizontal hide-on-med-and-down z-depth-0">
                        <div class="card-image" style="min-width: 400px;">
                            <img src="{{ asset('/img_blog/' . $blog->cover_url) }}"
                                 style="width: 400px !important; height: 300px; !important;"/>
                        </div>

                        <div class="card-stacked" style="width: 100%;">
                            <div class="card-content" style="word-wrap: break-word; width: 100%;">
                                <a href="/admin/blogs/details/{{ $blog->id }}"
                                   class="helveticaNeue grey-text text-darken-2 tooltipped"
                                   style="margin-top: 0; font-size: 32px;"
                                   data-position="bottom" data-delay="50" data-tooltip="{{ $blog->title }}">
                                    {{ str_limit($blog->title, $limit = 24, $end = '...') }}
                                </a>

                                <p class="helveticaNeue grey-text text-lighten-2" style="position: relative;">
                                    {!! str_limit($blog->content, $limit = 256, $end = '...') !!}
                                </p>
                            </div>

                            <div class="card-action" style="border-top: none;">
                                <p class="helveticaNeue right">
                                    {{ Carbon\Carbon::parse($blog->created_at)->format('F j Y h:i A') }}
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Mobile View -->
                    <div class="card show-on-medium-and-down hide-on-large-only">
                        <div class="card-image">
                            <img src="{{ asset('/img_blog/' . $blog->cover_url) }}">
                        </div>

                        <div class="card-content">
                            <p class="helveticaNeue tooltipped center-align"
                               style="margin-top: 0; font-size:24px;"
                               data-position="bottom" data-delay="50"
                               data-tooltip="{{ $blog->title }}">{{ str_limit($blog->title, $limit = 24, $end = '...') }}</p>

                            <p class="helveticaNeue center-align">
                                {{ Carbon\Carbon::parse($blog->created_at)->format('F j Y h:i A') }}
                            </p>
                            <div class="clearfix"></div>
                            <div class="divider"></div>
                            <br>

                            <p class="helveticaNeue" style="position: relative;">
                                {!! str_limit($blog->content, $limit = 192, $end = '...') !!}
                            </p>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            @endforeach

            <div class="clearfix"></div>
            <br><br>

            @if(isset($page))
                @if($page < $blog_pages)
                    <p class="right helveticaNeue">
                        <a href="/admin/blogs/page/{{ $page+1 }}">
                            Older Posts
                        </a>
                    </p>
                @endif
            @else
                @if($blog_pages > 1)
                    <p class="right helveticaNeue">
                        <a href="/admin/blogs/page/2">
                            Older Posts
                        </a>
                    </p>
                @else
                    {{--<p class="right helveticaNeue" disabled>--}}
                        {{--Older Posts--}}
                    {{--</p>--}}
                @endif
            @endif
        </div>
    </div>

@stop

@section('script')

@stop