let product_cnt = $('.product_cnt');
let product_api = '';
let id = window.location.href.slice(31);
fetch(`http://127.0.0.1:8000/api/products/${id}`)
    .then(res => res.json())
    .then(function(json) {
        product_api = `<div class="col-12 row p-2 bg-white border rounded">
                            <div class="col-md-3"><img class="img-fluid img-responsive rounded product-image"
                                    src="${json.product.image_url}"></div>
                            <div class="col-md-6 mt-1">
                                <h5 class="font-weight-bold mb-3">${json.product.title}</h5>
                                <p class="text-justify para mt-2 font-md pre">${json.product.content}</p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-right mt-1">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <h4 class="mr-1 text-center d-block mb-4">${json.product.price}</h4>
                                </div>
                                <h6 class="${json.product.isFeatured == 0 ? 'd-none' : ''} text-white bg-success p-2 text-center">محصول ویژه</h6>
                                <h6 class="text-dark bg-warning p-2 mt-2 text-center">امتیاز محصول ${json.product.score}</h6>
                            </div>
                        </div>`;
        product_cnt.html(product_api);
    });

let comments_cnt = $(".comments_cnt");
let comments_api = "";
fetch(`http://localhost:8000/api/comments/${id}`)
    .then((res) => res.json())
    .then(function (json) {
        for (let i = 0; i < json.comments.length; i++) {
            comments_api += `<div class="col-12 row p-2 bg-white border rounded">
                                <div class="avatar"><img class="img-fluid img-responsive rounded product-image"
                                        src="${json.comments[i].sender_avatar}"></div>
                                <div class="col-md-6 mt-1">
                                    <h5 class="font-weight-bold">${json.comments[i].sender_name}</h5>
                                    <p class="text-justify para mb-0 font-md">${json.comments[i].comment}</p>
                                </div>
                                <div class="mr-auto align-items-center align-content-center col-md-3 border-right mt-1">
                                    <div class="d-flex flex-row align-items-center justify-content-center">
                                        <h5 class="mr-1 text-center font-md">${json.comments[i].sender_email}</h5>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <h6 class="badge badge-dark p-2 mt-2 text-center font-sm">این کاربر به محصول <b class="bg-warning px-2 text-dark rounded">امتیاز ${json.comments[i].score}</b> داده است</h6>
                                    </div>
                                </div>
                            </div>`;
        }
        comments_cnt.html(comments_api);
    });