let products_cnt = $('.products_cnt');
let products_api = '';
fetch('http://127.0.0.1:8000/api/products/featured')
    .then(res => res.json())
    .then(function(json) {
        for (let i = 0; i < json.featured.length; i++) {
            products_api += `<div class="col-3">
                                <div class="card position-relative">
                                    <p class="badge badge-success">محصول ویژه</p>
                                    <p class="badge badge-warning">امتیاز ${json.featured[i].score}</p>
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid" src="${json.featured[i].image_url}"
                                            onerror="this.onerror=null; this.src='/images/default.png'" alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-ellipsis font-weight-bold">${json.featured[i].title}</h6>
                                        <p class="card-text text-ellipsis-3 font-sm">${json.featured[i].content}</p>
                                        <p class="font-weight-bold">${json.featured[i].price}</p>
                                        <a href="http://127.0.0.1:8000/products/${json.featured[i].id}" class="btn btn-sm btn-primary w-100">مشاهده محصول</a>
                                    </div>
                                </div>
                            </div>`;
        }
        products_cnt.html(products_api);
    });

$('.featured').addClass('active');