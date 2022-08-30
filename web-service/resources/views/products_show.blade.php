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
    <p class="mb-5 text-center font-weight-light">نظر شما ارزشمند است</p>
    <form class="row mb-5 px-0 post-comment" action="javascript:void(0)" method="POST">
        <div class="form-group col-6">
            <label>پروفایل:</label>
            <input required name="avatar" id="avatar" type="file" accept="image/*" class="form-control"
                placeholder="عکس پروفایل خود را وارد کنید">
        </div>
        <div class="form-group col-6">
            <label>نام و نام‌خانوادگی:</label>
            <input required name="name" id="name" type="text" class="form-control"
                placeholder="نام و نام‌خانوادگی خود را وارد کنید">
        </div>
        <div class="form-group col-6">
            <label>ایمیل:</label>
            <input required name="email" id="email" type="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="form-group col-6">
            <label>امتیاز شما به محصول:</label>
            <select name="score" id="score" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlTextarea1">نظر شما:</label>
            <textarea name="comment" id="comment" class="form-control"
                placeholder="نظر خود را در مورد این محصول برای ما به اشتراک بگذارید" rows="3"></textarea>
        </div>
        <div class="col-12 d-flex align-items-center justify-content-end">
            <button type="submit" class="btn btn-primary fot-md">ثبت نظر</button>
        </div>
    </form>

    <h6 class="mb-3 text-right comments-registered">نظرات ثبت شده</h6>
    <div class="w-100 row mx-0 gap-15 comments_cnt"></div>


    <!-- Modal -->
    <div class="modal fade" id="edit_prd" tabindex="-1" role="dialog" aria-labelledby="edit_prdTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <h5 class="modal-title font-md">ویرایش محصول</h5>
                    <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row px-0 put-product" action="javascript:void(0)" method="PUT">
                        <div class="form-group col-6">
                            <label>عکس محصول:</label>
                            <input required name="image" id="prd_image" type="file" accept="image/*" class="form-control"
                                placeholder="عکس محصول را وارد کنید">
                        </div>
                        <div class="form-group col-6">
                            <label>نام محصول:</label>
                            <input required name="title" id="prd_title" type="text" class="form-control"
                                placeholder="نام محصول را وارد کنید">
                        </div>
                        <div class="form-group col-6">
                            <label>قیمت:</label>
                            <input required name="price" id="prd_price" type="text" class="form-control"
                                placeholder="3,400,000 تومان">
                        </div>
                        <div class="form-group col-6">
                            <label>امتیاز محصول:</label>
                            <select name="score" id="prd_score" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleFormControlTextarea1">جزئیات بیشتر:</label>
                            <textarea name="content" id="prd_content" class="form-control"
                                placeholder="ویژگی ها و توضیحاتی در مورد محصول وارد کنید" rows="3"></textarea>
                        </div>
                        <div class="form-group form-check col-12">
                            <input name="isFeatured" type="checkbox" class="form-check-input" id="prd_featured">
                            <label class="form-check-label mr-4" for="prd_featured">محصول ویژه است</label>
                         </div>
                        <div class="col-12 d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary font-md">ویرایش محصول</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('site_js_files')
    <script src="/js/products_show.js"></script>
@endsection
