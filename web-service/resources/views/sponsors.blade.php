@extends('layout')
@section('site_title', 'حامیان مالی')

@section('site_css_files')
    <link rel="stylesheet" href="/css/font.css" />
    <link rel="stylesheet" href="/css/sponsors.css" />
@endsection

@section('site_content')
    <div class="mb-4">
        <button class="addSpTrue btn btn-sm btn-primary" data-toggle="modal" data-target="#new_prd"><i class="fad fa-plus-circle"></i> افزودن
            حامی مالی</button>
    </div>

    <div class="row gap-15 sponsors_cnt"></div>

    <!-- Modal -->
    <div class="modal fade" id="edit_prd" tabindex="-1" role="dialog" aria-labelledby="edit_prdTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <h5 class="modal-title font-md">ویرایش حامی</h5>
                    <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row px-0 put-sponsors" action="javascript:void(0)" method="PUT">
                        <div class="form-group col-6">
                            <label>عکس حامی:</label>
                            <input required name="img" id="prd_image" type="file" accept="image/*"
                                class="form-control" placeholder="لوگو یا عکس حامی را وارد کنید">
                        </div>
                        <div class="form-group col-6">
                            <label>نام حامی:</label>
                            <input required name="name" id="prd_title" type="text" class="form-control"
                                placeholder="نام حامی مالی را وارد کنید">
                        </div>
                        <div class="form-group col-12">
                            <label>لینک ارتباط:</label>
                            <input required name="url" id="prd_url" type="url" class="form-control"
                                placeholder="https://www.webazto.ir" dir="ltr" />
                        </div>
                        <div class="col-12 d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary font-md">ویرایش حامی</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- ... -->
    <div class="modal fade" id="new_prd" tabindex="-1" role="dialog" aria-labelledby="new_prdTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <h5 class="modal-title font-md">افزودن حامی مالی</h5>
                    <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row px-0 post-sponsors" action="javascript:void(0)" method="PUT">
                        <div class="form-group col-6">
                            <label>عکس حامی:</label>
                            <input required name="img" id="spr_image" type="file" accept="image/*"
                                class="form-control" placeholder="لوگو یا عکس حامی را وارد کنید">
                        </div>
                        <div class="form-group col-6">
                            <label>نام حامی:</label>
                            <input required name="name" id="spr_title" type="text" class="form-control"
                                placeholder="نام حامی مالی را وارد کنید">
                        </div>
                        <div class="form-group col-12">
                            <label>لینک ارتباط:</label>
                            <input required name="url" id="spr_url" type="url" class="form-control"
                                placeholder="https://www.webazto.ir" dir="ltr" />
                        </div>
                        <div class="col-12 d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary font-md">افزودن حامی</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('site_js_files')
    <script src="/js/sponsors.js"></script>
@endsection
