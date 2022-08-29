@extends('layout')
@section('site_title', 'ورود به حساب کاربری')

@section('site_css_files')
    <link rel="stylesheet" href="/css/font.css" />
    <link rel="stylesheet" href="/css/login.css" />
@endsection

@section('site_content')
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            <div class="col-md-5 col-11 p-5 form-box loginFalse">
                <h5 class="text-center mb-4 text-white">ورود به حساب کاربری</h5>
                <form action="#" class="login-form" autocomplete="off">
                    <div class="form-group">
                        <input required dir="auto" autofocus type="email" autocomplete="off"
                            class="email form-control" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <input required dir="auto" type="password" autocomplete="off" class="password form-control"
                            placeholder="رمز عبور">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-login">ورود</button>
                    </div>
                </form>
            </div>

            <div class="col-md-5 col-11 p-5 form-box loginTrue">
                <p class="text-center mb-4 text-white">شما با نام کاربری <strong>رضا عفتی مقدم</strong> و نقش
                    <strong>ادمین</strong> وارد سامانه شده‌اید.
                </p>
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn btn-danger btn-sm logout"><i class="fas fa-sign-out"></i>
                        خروج از حسا کاربری</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('site_js_files')
    <script src="/js/login.js"></script>
@endsection
