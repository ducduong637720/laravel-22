<header class="site-header header-style-1 ">
        
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="wt-topbar-left clearfix">
                    <ul class="list-unstyled e-p-bx pull-right">
                        <li><i class="fa fa-envelope"></i>mail@startuprr.com</li>
                        <li><i class="fa fa-phone"></i>(888) 123-4567</li>
                    </ul>
                </div>
                <div class="wt-topbar-right clearfix " style="color:white; display:flex">
                    @if (auth()->check())
                        <div style="width:7%"><img src="/frontend/images/icon-login.png" alt=""></div>
                        {{auth()->user()->name }}
                        <div class="nav-item d-none d-sm-inline-block">
                            <form action="{{ route('auth.logout') }}" method="post">
                              @csrf
                              <a href="#" class="nav-link" style="color: white" onclick="this.closest('form').submit();return false;">
                                Logout
                              </a>
                            </form>
                        </div>
                    @else
                    <div style="margin-right:20px"><a href="{{ route('auth.register')}}"  style="color: white">Đăng ký</a></div>
                    <div><a href="{{ route('auth.login')}}"  style="color: white">Đăng nhập</a></div>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Search Link -->

<!-- Search Form -->

@include('frontend.includes.sidebar')
    
</header>