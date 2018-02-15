@extends('master_admin')

@section('title')

@stop

@section('header')

@stop

@section('body')
    @include('admin.nav_taste_tests')

    <div class="row" style="margin-top: 0;">
        {{--<div class="container">--}}

        <div class="card" style="margin-top:0;">
            <div class="card-content">

                <table class="striped responsive-table">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Food Concept</th>
                        <th>Products</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Business Account</th>
                        <th>Found Via</th>
                        <th>Submitted</th>
                    </tr>
                    </thead>

                    @foreach($taste_tests as $taste_test)
                        <tr>
                            <td>{{ $taste_test->name }}</td>
                            <td>{{ $taste_test->food_concept }}</td>
                            <td>{{ $taste_test->products }}</td>
                            <td>
                                <a href="#" class="tooltipped" data-position="right" data-delay="50"
                                   data-tooltip="Copy"
                                   onclick="copyToClipboard(this)">
                                    {{ $taste_test->email }}
                                </a>
                            </td>
                            <td>{{ $taste_test->mobile }}</td>
                            <td>{{ $taste_test->business_account }}</td>
                            <td>{{ $taste_test->found_via }}</td>
                            <td>
                                {{ Carbon\Carbon::parse($taste_test->created_at)->format('F j Y h:i A') }}
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>

            @if(count($taste_tests) <= 0)
                <div class="card-action">
                    <p>No taste test requests found</p>
                </div>
            @endif
        </div>

        {{--</div>--}}
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