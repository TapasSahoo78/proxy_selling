<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    {{-- New Sidebar Menu Management Start --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
            aria-expanded="true" aria-controls="collapseBlog">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Blog Management</span>
        </a>
        <div id="collapseBlog" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utilities:</h6>
                <a class="collapse-item" href="{{ route('admin.blog.category.list') }}">Categories</a>
                <a class="collapse-item" href="{{ route('admin.news.list') }}">Blogs</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProxy"
            aria-expanded="true" aria-controls="collapseProxy">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Proxy Management</span>
        </a>
        <div id="collapseProxy" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utilities:</h6>
                <a class="collapse-item" href="{{ route('admin.coupon.list') }}">Coupons</a>
                <a class="collapse-item" href="#">Countries</a>
                <a class="collapse-item" href="{{ route('admin.category.list') }}">Categories</a>
                <a class="collapse-item" href="{{ route('admin.proxy.list') }}">Proxies</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser"
            aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-fw fa-wrench"></i>
            <span>User Management</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utilities:</h6>
                <a class="collapse-item" href="{{ route('admin.user.list') }}">User List</a>
                <a class="collapse-item" href="{{ route('admin.user.list') }}">Payment History</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder"
            aria-expanded="true" aria-controls="collapseOrder">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Order Management</span>
        </a>
        <div id="collapseOrder" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utilities:</h6>
                <a class="collapse-item" href="{{ route('admin.user.list') }}">User List</a>
                <a class="collapse-item" href="{{ route('admin.user.list') }}">Payment History</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCMS"
            aria-expanded="true" aria-controls="collapseCMS">
            <i class="fas fa-fw fa-wrench"></i>
            <span>CMS Management</span>
        </a>
        <div id="collapseCMS" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Utilities:</h6>
                <a class="collapse-item" href="{{ route('admin.user.list') }}">Header</a>
                <a class="collapse-item" href="{{ route('admin.user.list') }}">Content</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.ticket.list') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Ticket Management</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.notification.list') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Notification Management</span>
        </a>
    </li>

    {{-- New Sidebar Menu Management End --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
