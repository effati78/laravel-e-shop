@extends('layout')
@section('site_title', 'ورود به حساب کاربری')

@section('site_css_files')
    <link rel="stylesheet" href="/css/font.css" />
    <link rel="stylesheet" href="/css/login.css" />
@endsection

@section('site_content')
    <div class="container">
        <div class="row justify-content-center mt-5 pt-5">
            {{-- <div class="col-md-5 col-11 p-5 form-box">
                <h5 class="text-center mb-4 text-white">ورود به حساب کاربری</h5>
                <form action="#" method="post" class="login-form" autocomplete="off">
                    <div class="form-group">
                        <input dir="auto" autofocus type="text" autocomplete="off" class="form-control" placeholder="ایمیل">
                    </div>
                    <div class="form-group">
                        <input dir="auto" type="text" autocomplete="off" class="form-control" placeholder="رمز عبور">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-login">ورود</button>
                    </div>
                </form>
            </div> --}}

            <div class="col-md-5 col-11 p-5 form-box">
                <p class="text-center mb-4 text-white">شما با نام کاربری <strong>رضا عفتی مقدم</strong> و نقش <strong>ادمین</strong> وارد سامانه شده‌اید.</p>
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn btn-danger btn-sm">خروج از حسا کاربری</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('site_js_files')
@endsection
