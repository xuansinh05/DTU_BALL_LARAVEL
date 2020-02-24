
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div>
            @if(\Illuminate\Support\Facades\Auth::check())
                <div><a href="#">Chào Admin {{\Illuminate\Support\Facades\Auth::user()->name}}</a></div>
                <div><a href="{{route('admin-logout')}}">Logout</a></div>
            @endif
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin-home') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'home' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item has-treeview {{ isset($sidebar['parent']) && $sidebar['parent'] == 'user' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Quản lý tài khoản
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin-user-index') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'user' && isset($sidebar['child']) && $sidebar['child'] == 'index' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách tài khoản</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin-user-add') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'user' && isset($sidebar['child']) && $sidebar['child'] == 'add' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm tài khoản</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ isset($sidebar['parent']) && $sidebar['parent'] == 'user' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Quản lý khu vực
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin-category-index') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'category' && isset($sidebar['child']) && $sidebar['child'] == 'index' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách khu vực</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin-category-add') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'category' && isset($sidebar['child']) && $sidebar['child'] == 'add' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm khu vực</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ isset($sidebar['parent']) && $sidebar['parent'] == 'product' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Quản lý Sân
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin-product-index') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'product' && isset($sidebar['child']) && $sidebar['child'] == 'index' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách sân</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin-product-add') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'product' && isset($sidebar['child']) && $sidebar['child'] == 'add' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm mới sân</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ isset($sidebar['parent']) && $sidebar['parent'] == 'order' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                       Quản lý đặt sân
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin-order-index') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'order' && isset($sidebar['child']) && $sidebar['child'] == 'index' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách đặt sân</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin-order-add') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'order' && isset($sidebar['child']) && $sidebar['child'] == 'add' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm sân đặt</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ isset($sidebar['parent']) && $sidebar['parent'] == 'supplier' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Quản lý nhà cung cấp
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin-supplier-index') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'supplier' && isset($sidebar['child']) && $sidebar['child'] == 'index' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách nhà cung cấp</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin-supplier-add') }}" class="nav-link {{ isset($sidebar['parent']) && $sidebar['parent'] == 'supplier' && isset($sidebar['child']) && $sidebar['child'] == 'add' ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm nhà cung cấp</p>
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
