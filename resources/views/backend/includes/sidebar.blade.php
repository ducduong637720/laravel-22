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
            <li class="nav-item @if (request()->routeIs('backend.posts.*')) menu-open @endif">
                <a href="#2" class="nav-link @if (request()->routeIs('backend.posts.*')) active @endif">
                    <i class="fas fa-book-open"></i>
                    <p>
                        Bài viết
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.posts.create') }}"
                            class="nav-link 
              @if (request()->routeIs('backend.posts.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới bài viết</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.posts.index') }}"
                            class="nav-link
              @if (request()->routeIs('backend.posts.index')) active @endif">
                            <i class="far fa-list-alt"></i>
                            <p>Danh sách bài viết</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.categories.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.categories.*')) active @endif">
                    <i class="fas fa-clipboard-list"></i>
                    <p>
                      Danh mục bài viết
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
            <li class="nav-item @if (request()->routeIs('backend.tags.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.tags.*')) active @endif">
                    <i class="fas fa-tag"></i>
                    <p>
                        Thẻ
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.tags.create') }}" class="nav-link  @if (request()->routeIs('backend.tags.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới thẻ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.tags.index') }}" class="nav-link @if (request()->routeIs('backend.tags.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách thẻ</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.images.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.images.*')) active @endif">
                    <i class="fas fa-image"></i>
                    <p>
                        Ảnh
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.images.create') }}" class="nav-link  @if (request()->routeIs('backend.images.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới ảnh</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.images.index') }}" class="nav-link @if (request()->routeIs('backend.images.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách ảnh</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.storages.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.storages.*')) active @endif">
                    <i class="fas fa-image"></i>
                    <p>
                        Storage
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.storages.index') }}" class="nav-link @if (request()->routeIs('backend.storages.index')) active @endif">
                            <i class="far fa-list-alt"></i>
                            <p>Danh sách storage</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if (request()->routeIs('backend.products.*')) menu-open @endif">
                <a href="#2" class="nav-link @if (request()->routeIs('backend.products.*')) active @endif">
                    <i class="fab fa-product-hunt"></i>
                    <p>
                        Sản phẩm
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.products.create') }}"
                            class="nav-link 
              @if (request()->routeIs('backend.products.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.products.index') }}"
                            class="nav-link
              @if (request()->routeIs('backend.products.index')) active @endif">
                            <i class="far fa-list-alt"></i>
                            <p>Danh sách sản phẩm</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.prodcategories.*')) menu-open @endif">
                <a href="#2" class="nav-link @if (request()->routeIs('backend.prodcategories.*')) active @endif">
                    <i class="fab fa-product-hunt"></i>
                    <p>
                       Danh mục sản phẩm
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.prodcategories.create') }}"
                            class="nav-link 
              @if (request()->routeIs('backend.prodcategories.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới danh mục sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.prodcategories.index') }}"
                            class="nav-link
              @if (request()->routeIs('backend.prodcategories.index')) active @endif">
                            <i class="far fa-list-alt"></i>
                            <p>Danh mục sản phẩm</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if (request()->routeIs('backend.brands.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.brands.*')) active @endif">
                    <i class="fas fa-clipboard-list"></i>
                    <p>
                        Nhãn hiệu
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.brands.create') }}" class="nav-link  @if (request()->routeIs('backend.brands.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới nhãn hiệu</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.brands.index') }}" class="nav-link @if (request()->routeIs('backend.brands.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách nhãn hiệu</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">Hệ thống</li>
            <li class="nav-item @if (request()->routeIs('backend.users.*')) menu-open @endif">
                <a href="#2" class="nav-link  @if (request()->routeIs('backend.users.*')) active @endif">
                    <i class="fas fa-user"></i>
                    <p>
                        Quản lý người dùng
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.users.create') }}" class="nav-link  @if (request()->routeIs('backend.users.create')) active @endif">
                            <i class="fas fa-plus-circle"></i>
                            <p>Tạo mới người dùng</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.users.index') }}" class="nav-link @if (request()->routeIs('backend.users.index')) active @endif">
                            <i class="fas fa-list"></i>
                            <p>Danh sách người dùng</p>
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
                            <p>Tạo mới permission</p>
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
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
