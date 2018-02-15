@extends('master_admin')

@section('title')

@stop

@section('header')

@stop

@section('body')

    <div class="row valign-wrapper" style="min-height: 100vh; height: 100%; margin-bottom: 0;">
        <div class="container">

            <form method="POST" action="/admin/login">
                {{ csrf_field() }}

                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <div class="col s12 m8 offset-m2">
                                <p class="flow-text">Admin Login</p>
                                <div class="divider"></div>

                                <div class="input-field">
                                    <input id="username" name="username" type="text" class="validate" maxlength="32" minlength="4"
                                           required/>
                                    <label for="username">Username</label>
                                </div>

                                <div class="input-field">
                                    <input id="password" name="password" type="password" class="validate" maxlength="32" minlength="4"
                                           required/>
                                    <label for="password">Password</label>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="card-action">
                            <div class="col s12 m8 offset-m2">
                                <button type="submit" class="btn grey darken-2 right">
                                    <i class="material-icons right">send</i> Login
                                </button>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>

@stop

@section('script')

@stop