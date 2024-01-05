<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">MITRATANI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">MT</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('home') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('home') }}">General Dashboard</a>
                    </li>

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Master Data</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">Product</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('user.index') }}">Order</a>
                    </li>
                </ul>
            </li>


    </aside>
</div>
