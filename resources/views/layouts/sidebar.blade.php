<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">MENU</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">Menu</a>
    </div>
    <ul class="sidebar-menu">

        <li class="menu-header">Starter</li>
        <li>
            <a class="nav-link" href="/"><i class="far fa-square"></i> <span>Dashboard</span></a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                <span>Menu Utama</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link " href="{{ route('surats.index') }}">Arsip</a></li>
                <li><a class="nav-link " href="/about">About</a></li>
            </ul>
        </li>
    </ul>

</aside>
