@extends('layout')
@section('site_title', 'محصولات')

@section('site_css_files')
    <link rel="stylesheet" href="/css/products_show.css" />
@endsection

@section('site_content')
    <div class="w-100 row mx-0 product_cnt"></div>

    <hr class="my-5">

    <div class="w-100 row mx-0 gap-15 comments_cnt"></div>
@endsection

@section('site_js_files')
    <script src="/js/products_show.js"></script>
@endsection
