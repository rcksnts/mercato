@extends('master_admin')

@section('title')

@stop

@section('header')

@stop

@section('body')
    <div class="row">
        <div class="container">

            <form method="POST" action="/blog/create">
                {{ csrf_field() }}

                <div class="col s12 m8 offset-m2">

                    @if($content != null)
                        {!! $content !!}
                    @endif

                    <p class="flow-text">Create a blog</p>
                    <textarea name="content"></textarea>

                    <br>
                    <div class="divider"></div>
                    <br>
                    <button type="submit" class="btn waves-effect waves-light">Submit</button>
                </div>
            </form>

        </div>
    </div>
@stop

@section('script')
    <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
        var editor_config = {
            path_absolute: "{{ URL::to('/') }}/",
            selector: "textarea",
            plugins: ["advlist autolink lists link charmap print preview hr pagebreak", "searchreplace wordcount visualblocks visualchars code fullscreen", "insertdatetime nonbreaking save table contextmenu directionality", "emoticons paste textcolor colorpicker textpattern"],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link",
            style_formats:
                [
                    {
                        title: 'Bullet',
                        selector: 'ul',
                        classes: 'browser-default',
                    }
                ],
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.grtElementByTagName('body')[0].clientHeight;
                var cmsURL = editor_config.path_absolute + 'laravel-filemanager ?field_name' + field_name;
                if (type = 'image') {
                    cmsURL = cmsURL + '&type=Images';
                } else {
                    cmsUrl = cmsURL + '&type=Files';
                }
                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizeble: 'yes',
                    close_previous: 'no'
                });
            }
        };
        tinymce.init(editor_config);
    </script>﻿
@stop