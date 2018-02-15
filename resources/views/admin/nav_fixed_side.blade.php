<ul id="slide-out" class="side-nav fixed" style="width: 72px;">

    <li style="margin: 0;">
        <a href="/admin" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Home"
           style="padding-left: 24px; padding-right: 0;">
            <i class="material-icons">home</i>
        </a>
    </li>

    <li>
        <div class="divider" style="margin: 0;"></div>
    </li>

    <li style="margin: 0;">
        <a href="/admin/blogs" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Blogs"
           style="padding-left: 24px; padding-right: 0;">
            <i class="material-icons">rss_feed</i>
        </a>
    </li>

    <li>
        <div class="divider" style="margin: 0;"></div>
    </li>

    <li style="margin: 0;">
        <a href="/admin/newsletters" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Newsletters"
           style="padding-left: 24px; padding-right: 0;">
            <i class="material-icons">description</i>
        </a>
    </li>

    <li>
        <div class="divider" style="margin: 0;"></div>
    </li>

    <li style="margin: 0;">
        <a href="/admin/taste-tests" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Taste Tests"
           style="padding-left: 24px; padding-right: 0;">
            <i class="material-icons">restaurant_menu</i>
        </a>
    </li>

    <li>
        <div class="divider" style="margin: 0;"></div>
    </li>

    <li style="margin: 0;">
        <a href="#modal_admin_logout" class="tooltipped modal-trigger" data-position="right" data-delay="50"
           data-tooltip="Logout"
           style="padding-left: 24px; padding-right: 0;">
            <i class="material-icons">power_settings_new</i>
        </a>
    </li>

    <li>
        <div class="divider" style="margin: 0;"></div>
    </li>

    {{--<li><a class="subheader">Subheader</a></li>--}}
</ul>

<div id="modal_admin_logout" class="modal">
    <div class="modal-content">
        <p class="flow-text">
            Are you sure you want to log out?
        </p>
    </div>
    <div class="modal-footer">
        <a href="/admin/logout" class="waves-effect waves-dark btn-flat">
            Logout
        </a>
        <a href="#" class="modal-action modal-close waves-effect waves-dark btn-flat">Cancel</a>
    </div>
</div>

{{--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>--}}
