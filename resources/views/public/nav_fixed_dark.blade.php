<div class="navbar-fixed" style="position: fixed; padding-top: 48px;">
    <nav class="z-depth-0" style="background: none;">
        <div class="nav-wrapper">
            <a href="/home" class="brand-logo center">
                <img src="{{ asset('img/logo.png') }}" style="max-height: 72px; position: relative; bottom: 16px;"/>
            </a>

            <ul id="navigation" class="right hide-on-med-and-down" style="margin-right: 48px;">
                <li><a id="nav_signup" class="oratorStd modal-trigger black-text" href="#modal-signup">Sign Up</a></li>
                <li><a id="nav_login" class="oratorStd black-text" href="/admin/login">Log In</a></li>
            </ul>

        </div>
    </nav>
</div>

<div id="icons_media">
    <a href="http://instagram.com"><img src="{{ asset('img/icon_ig.png') }}"
                                        style="position: fixed; bottom: 32px; right: 64px;"/></a>
    <a href="http://facebook.com"><img src="{{ asset('img/icon_fb.png') }}"
                                       style="position: fixed; bottom: 32px; right: 102px;"/></a>
    <a href="http://twitter.com"><img src="{{ asset('img/icon_twtr.png') }}"
                                      style="position: fixed; bottom: 32px; right: 128px;"/></a>
</div>

<form method="POST" action="/newsletter/signup">
    {{ csrf_field() }}
    <div id="modal-signup" class="modal"
         style="height: 100%; top: 10vh; bottom: 10vh; background-image: url('img/signup.jpg'); background-size: cover;">

        <div class="modal-content white-text oratorStd valign-wrapper" style="height: 100%; background: #b07e5b;">
            <div class="center-block">
                <p class="flow-text">Lorem Ipsum Lorem</p>
                <p class="flow-text">Lorem Ipsum Lorem</p>

                <div class="input-field">
                    <input id="email" name="email" type="email" class="signup-email">
                    <label for="email" class="white-text">Email</label>

                    <button type="submit" class="center-block borderBottom15-white"
                            style="border: none; background: none; font-size: 18px; color: white; padding-bottom: 0px; margin-bottom: 0;">
                        <i>Subscribe</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>