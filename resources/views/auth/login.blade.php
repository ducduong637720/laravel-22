@extends('frontend.layouts.auth')
@section('css')
    <link rel="stylesheet" href="/frontend/css/sb-admin-2.min.css" rel="stylesheet">
@endsection
@section('container')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Đăng nhập</h1>
                            </div>
                            <form method="POST" action="{{ route('auth.login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                  </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck" name="remember" value="true">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    Đăng nhập
                                </button>
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i>Login with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i>Login with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Quên mật khẩu</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('auth.register') }}">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="/frontend/vendor/jquery.min.js"></script>
<script src="/frontend/vendor/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="/frontend/vendor/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="/frontend/vendor/sb-admin-2.min.js"></script>
@endsection