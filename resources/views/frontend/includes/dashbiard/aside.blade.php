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
        <a class="dropdown-current" href="{{route('dashboard.profile')}}" >
            <strong>Profile</strong>
        </a>
    </li>
    <li>
        <a class="dropdown-current" href="{{route('dashboard.product')}}"><strong>Product items</strong></a>
    </li>
    <li>
        <a class="dropdown-current" href="{{route('dashboard.product')}}"><strong>Settings</strong></a>
    </li>

    <li>
        <a class="dropdown-current" href="{{route('dashboard.product')}}"><strong>Help</strong></a>
    </li>

    <li>

        {!! Form::open(['route' => 'logout', 'id' => 'logout-form']) !!}
        {!! Form::close() !!}
        <a class="nav-link border-bottom-0" tabindex="-1" href="{{ route("logout") }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Log Out </a>

{{--        <a class="dropdown-current" href="{{url('/logout')}}"><strong>Logout</strong></a>--}}
    </li>
</ul>

