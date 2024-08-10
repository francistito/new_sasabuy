{{--<aside class="sidebar">--}}
{{--    <div class="sidebar-header">--}}
{{--        <h2>Dashboard</h2>--}}
{{--    </div>--}}
{{--    <ul class="sidebar-menu">--}}
{{--        <li><a href="{{route('dashboard.profile')}}">Profile</a></li>--}}
{{--        <li><a href="#orders">Order History</a></li>--}}
{{--        <li><a href="{{route('dashboard.product')}}">Manage Products</a></li>--}}
{{--    </ul>--}}
{{--</aside>--}}

<ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
    <li>
        <a class="dropdown-toggle dropdown-toggle-collapse dropdown-title" href="{{route('dashboard.profile')}}" >
            Profile
        </a>
    </li>
    <li>
        <a class="dropdown-current" href="{{route('dashboard.product')}}">Product items</a>
    </li>
    <li>
        <a class="dropdown-current" href="{{route('dashboard.product')}}">Settings</a>
    </li>

    <li>
        <a class="dropdown-current" href="{{route('dashboard.product')}}">Help</a>
    </li>
</ul>

