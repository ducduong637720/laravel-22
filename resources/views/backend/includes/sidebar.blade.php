<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src=" {{ auth()->user()->avatar_full }}" class="img-circle elevation-2"
                style="width: 2.5rem;height: 2.5rem" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">
                {{ auth()->user()->name }}
            </a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="" class="nav-link @if (request()->is('backend/dashboard')) active @endif">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-header">Quản lý chung</li>
            <li class="nav-item
        @if (request()->routeIs('backend.posts.*')) menu-open @endif">
                <a href="#2" class="nav-link
          @if (request()->routeIs('backend.posts.*')) active @endif">
                    <i class="fas fa-book-open"></i>
                    <p>
                        Quản lý Blog
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.posts.create') }}"
                            class="nav-link 
              @if (request()->routeIs('backend.posts.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới Blog</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.posts.index') }}"
                            class="nav-link
              @if (request()->routeIs('backend.posts.index')) active @endif">
                            <i class="far fa-list-alt"></i>
                            <p>Danh sách Blog</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if (request()->routeIs('backend.categories.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.categories.*')) active @endif">
                    <i class="fas fa-clipboard-list"></i>
                    <p>
                        Quản lý danh mục
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.categories.create') }}" class="nav-link  @if (request()->routeIs('backend.categories.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới danh mục</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.categories.index') }}" class="nav-link @if (request()->routeIs('backend.categories.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách danh mục</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.categories.delete') }}" class="nav-link @if (request()->routeIs('backend.categories.delete')) active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lịch sử xóa</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.storages.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.storages.*')) active @endif">
                    <i class="fas fa-image"></i>
                    <p>
                        Quản lý ảnh
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.storages.index') }}" class="nav-link @if (request()->routeIs('backend.storages.index')) active @endif">
                            <i class="far fa-list-alt"></i>
                            <p>Danh sách ảnh</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.storages.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.storages.*')) active @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Quản lý log
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="http://myweb.dev.com/log-viewer" class="nav-link">
                            <i class="fas fa-list"></i>
                            <p>Danh sách log</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">Hệ thống</li>
            <li class="nav-item @if (request()->routeIs('backend.users.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.users.*')) active @endif">
                    <i class="fas fa-user"></i>
                    <p>
                        Quản lý Users
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.users.create') }}" class="nav-link  @if (request()->routeIs('backend.users.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới user</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.users.index') }}" class="nav-link @if (request()->routeIs('backend.users.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.users.delete') }}" class="nav-link @if (request()->routeIs('backend.users.delete')) active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lịch sử xóa</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.roles.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.roles.*')) active @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Quản lý Roles
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.roles.create') }}" class="nav-link  @if (request()->routeIs('backend.users.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới role</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.roles.index') }}" class="nav-link @if (request()->routeIs('backend.users.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách role</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.permissions.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.permissions.*')) active @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Quản lý Permissions
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.permissions.create') }}"
                            class="nav-link  @if (request()->routeIs('backend.permissions.create')) active @endif">
                            <i class="far fa-circle nav-icon"></i>
                            <i class="fas fa-plus-circle"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.permissions.index') }}"
                            class="nav-link @if (request()->routeIs('backend.permissions.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách permission</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
