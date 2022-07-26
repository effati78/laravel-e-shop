@extends('layout')
@section('site_title', 'محصولات')

@section('site_css_files')
    <link rel="stylesheet" href="/css/font.css" />
    <link rel="stylesheet" href="/css/products_show.css" />
@endsection

@section('site_content')
    <div class="w-100 row mx-0 product_cnt"></div>

    <hr class="my-5">

    <h5 class="mb-1 text-center">لطفا نظر خود را برای ما به اشتراک بگذارید</h5>
    <p class="mb-5 text-center font-weight-light">نظر شما ارزشمند است</ح>
    <form class="row mb-5 px-0">
        <div class="form-group col-6">
            <label for="exampleFormControlInput1">پروفایل:</label>
            <input type="file" accept="image/*" class="form-control" placeholder="عکس پروفایل خود را وارد کنید">
        </div>
        <div class="form-group col-6">
            <label for="exampleFormControlInput1">نام و نام‌خانوادگی:</label>
            <input type="text" class="form-control" placeholder="نام و نام‌خانوادگی خود را وارد کنید">
        </div>
        <div class="form-group col-6">
            <label for="exampleFormControlInput1">ایمیل:</label>
            <input type="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="form-group col-6">
            <label for="exampleFormControlSelect1">امتیاز شما به محصول:</label>
            <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlTextarea1">نظر شما:</label>
            <textarea class="form-control" placeholder="نظر خود را در مورد این محصول برای ما به اشتراک بگذارید" rows="3"></textarea>
        </div>
        <div class="col-12 d-flex align-items-center justify-content-end">
            <button type="submit" class="btn btn-primary">ثبت نظر</button>
        </div>
    </form>

    <h6 class="mb-3 text-right">نظرات ثبت شده</h6>
    <div class="w-100 row mx-0 gap-15 comments_cnt"></div>
@endsection

@section('site_js_files')
    <script src="/js/products_show.js"></script>
@endsection
