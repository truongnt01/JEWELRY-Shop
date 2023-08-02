<section id="sidebar">
    <a href="{{ route('dashboard') }}" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">AdminHub</span>
    </a>
    <ul class="side-menu top">
        <li class=" {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('roles.*') ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Role</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('users.*') ? 'active' : '' }}"> 
            <a href="{{ route('users.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">User</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('categories.*') ? 'active' : '' }}">
            <a href="{{ route('categories.index') }}">
                <i class='bx bxs-doughnut-chart' ></i>
                <span class="text">Categories</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('products.*') ? 'active' : '' }}">
            <a href="{{ route('products.index') }}">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Products</span>
            </a>
        </li>
        <li class="{{ request()->routeIs('coupons.*') ? 'active' : '' }}">
            <a href="{{ route('coupons.index') }}">
                <i class='bx bxs-message-dots' ></i>
                <span class="text">Coupons</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        
        <li>
            <a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();
            ">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
            @csrf
            </form>
        </li>
    </ul>
</section>