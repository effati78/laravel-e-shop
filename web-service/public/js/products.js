let products_cnt = $('.products_cnt');
let products_api = '';
fetch('http://127.0.0.1:8000/api/products')
    .then(res => res.json())
    .then(function(json) {
        for (let i = 0; i < json.products.length; i++) {
            products_api += `<div class="col-3">
                                <div class="card position-relative">
                                    <p class="${json.products[i].isFeatured == 0 ? 'd-none' : ''} badge badge-success">محصول ویژه</p>
                                    <p class="badge badge-warning">امتیاز ${json.products[i].score}</p>
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid" src="${json.products[i].image_url}"
                                            alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-ellipsis font-weight-bold">${json.products[i].title}</h6>
                                        <p class="card-text text-ellipsis-3 font-sm">${json.products[i].content}</p>
                                        <p class="font-weight-bold">${json.products[i].price}</p>
                                        <a href="http://127.0.0.1:8000/products/${json.products[i].id}" class="btn-sm btn btn-primary w-100">مشاهده محصول</a>
                                    </div>
                                </div>
                            </div>`;
        }
        products_cnt.html(products_api);
    });

$('.home').addClass('active');