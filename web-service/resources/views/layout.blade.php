<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="/images/shop.png" />
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="/css/layout.css" />
    @yield('site_css_files')
    <title>@yield('site_title')</title>
</head>

<body>
    <header>
        <nav
            class="container-fluid d-flex align-items-center justify-content-between navbar navbar-expand-lg navbar-dark bg-dark">
            <div>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarExample01">
                    <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
                        <li class="nav-item home">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">خانه</a>
                        </li>
                        <li class="nav-item featured">
                            <a class="nav-link" href="{{ route('featured') }}">محصولات ویژه</a>
                        </li>
                        <li class="nav-item sponsors">
                            <a class="nav-link" href="{{ route('sponsors') }}">حامیان مالی</a>
                        </li>
                        <li class="nav-item documents">
                            <a class="nav-link" href="{{ route('documents') }}">مستندات</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <a href="{{route("login")}}" class="btn btn-light btn-sm login-btn">
                <i class="fas fa-sign-in"></i>
                ورود به حساب
            </a> --}}
            <a href="{{route("login")}}" title="برای خروج از حساب کاربری کلیک کنید" class="btn btn-light btn-sm">
                <i class="fas fa-user"></i>
                سلام رضا عزیز - <span class="badge badge-dark">ادمین</span>    
            </a>
        </nav>
    </header>

    <main class="container my-5">
        @yield('site_content')
    </main>

    <footer class="text-center text-lg-start bg-dark">
        <div class="text-center p-3 text-white">
            کپی‌رایت 1401 © ساخته شده با ♥ توسط
            <a class="text-white" href="https://github.com/effati78">رضا عفتی مقدم</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    @yield('site_js_files')
</body>

</html>
