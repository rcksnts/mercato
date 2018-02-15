@extends('master_admin')

@section('title')

@stop

@section('header')

@stop

@section('body')
    @include('admin.nav_newsletter')

    <div class="row">
        <div class="container">

            {{--<ul class="pagination center">--}}
            {{--<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>--}}

            {{--@for($i=1; $i<=$newsletter_pages; $i++)--}}
            {{--<li class="waves-effect"><a href="/admin/newsletter/pages/{{ $i }}">{{ $i }}</a></li>--}}
            {{--@endfor--}}
            {{--<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>--}}
            {{--</ul>--}}

            <br>

            <div class="card">
                <div class="card-content">

                    <table class="striped responsive-table">
                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Submitted</th>
                        </tr>
                        </thead>

                        @foreach($newsletters as $newsletter)
                            <tr>
                                <td>
                                    <a href="#" class="tooltipped" data-position="right" data-delay="50"
                                       data-tooltip="Copy" onclick="copyToClipboard(this)">
                                        {{ $newsletter->email }}
                                    </a>
                                </td>
                                <td>
                                    {{ Carbon\Carbon::parse($newsletter->created_at)->format('F j Y h:i A') }}
                                </td>
                            </tr>
                        @endforeach


                        @if(count($newsletters) <= 0)
                            <tr>
                                <td>No newsletters found</td>
                                <td></td>
                            </tr>
                        @endif
                    </table>

                </div>
            </div>

        </div>
    </div>

@stop

@section('script')
    <script type="text/javascript">
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();

            Materialize.toast('Copied', 3000)
        }
    </script>
@stop