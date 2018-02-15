@extends('master_admin')

@section('title')

@stop

@section('header')
    <style type="text/css">
    </style>
@stop

@section('body')
    @include('admin.nav_blog')

    <div class="row">
        <div class="container">

            <div class="col s12">

                <form method="POST" action="/admin/blogs/create"  enctype="multipart/form-data">
                {{ csrf_field() }}

                <!-- Submit Form -->
                    <div id="modal_submit" class="modal">
                        <div class="modal-content">
                            <p class="flow-text">
                                Publish Blog?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="waves-effect waves-dark btn-flat">
                                Publish
                            </button>
                            <a href="#" class="modal-action modal-close waves-effect waves-dark btn-flat">Cancel</a>
                        </div>
                    </div>

                    <p>
                        <a href="#modal_submit" class="modal-trigger">
                            <button type="button" class="btn grey darken-2 right">
                                Publish Blog
                            </button>
                        </a>
                    </p>

                    <div class="clearfix"></div>

                    <div class="col s12 m6">

                        <div class="input-field">
                            <input id="title" name="title" type="text" data-length="128" minlength="2" maxlength="128"
                                   required/>
                            <label for="title">Blog Title</label>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="file-field input-field">
                            <div class="btn teal darken-1">
                                <span><i class="material-icons">image</i> </span>
                                <input type="file" name="image" required>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="image_url" type="text"
                                       placeholder="Upload Cover Image">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <p>
                        <textarea name="content" class="form-control my-editor"
                                  minlength="2" maxlength="8096"></textarea>
                    </p>
                </form>

            </div>


        </div>
    </div>

@stop

@section('script')

    <script type="text/javascript" src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);

        $(document).ready(function () {
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
    </script>

@stop