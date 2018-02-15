@extends('master_admin')

@section('title')

@stop

@section('header')

@stop

@section('body')
    @include('admin.nav_blog')

    <div class="row">
        <div class="container">

            <div class="col s12">

                <form method="POST" action="/admin/blogs/archive">
                    {{ csrf_field() }}

                    <div id="modal_archive" class="modal">
                        <div class="modal-content">
                            <h4>Archive Blog</h4>
                            <p>The selected blog will be archived and will no longer be available to the public.
                                Proceed?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="modal-action modal-close waves-effect waves-darken btn-flat">
                                Yes
                            </button>
                            <a href="#!" class="modal-action modal-close waves-effect waves-darken btn-flat">Cancel</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <p class="flow-text">
                                Select a blog to archive
                            </p>
                        </div>

                        <div class="card-action">
                            @if(count($blogs) > 0)
                                <a href="#modal_archive" class="btn grey darken-2 right modal-trigger">
                                    Archive Blog
                                </a>
                                <div class="clearfix"></div>
                            @else
                                <a href="#modal_archive" class="btn grey darken-2 right modal-trigger" disabled>
                                    Archive Blog
                                </a>
                                <div class="clearfix"></div>
                            @endif

                            <p>
                                @if(count($blogs) > 0)
                                    <select id="blogs" name="blog_id" class="browser-default">
                                        @foreach($blogs as $blog)
                                            <option value="{{ $blog->id }}">{{ $blog->title }}, Created
                                                on: {{ Carbon\Carbon::parse($blog->created_at)->format('F j Y h:i A') }}</option>
                                        @endforeach
                                    </select>
                                @else
                                    <select id="blogs" name="blog_id" class="browser-default" disabled>
                                        <option value="0">No blogs found</option>
                                    </select>
                                @endif

                                <label for="blogs">Blog Title</label>
                            </p>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@stop

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
    </script>
@stop