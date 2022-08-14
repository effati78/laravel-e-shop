let product_cnt = $(".product_cnt");
let product_api = "";
let id = window.location.href.slice(31);

const comment_url = `http://127.0.0.1:8000/api/comments/${id}`;
const product_url = `http://127.0.0.1:8000/api/products/${id}`;

fetch(product_url)
    .then((res) => res.json())
    .then(function (json) {
        product_api = `<div class="col-12 row p-2 bg-white border rounded">
                            <div class="col-md-3"><img class="img-fluid img-responsive rounded product-image"
                                    src="${json.product.image_url}"></div>
                            <div class="col-md-6 mt-1">
                                <h5 class="font-weight-bold mb-3">${
                                    json.product.title
                                }</h5>
                                <p class="text-justify para mt-2 font-md pre">${
                                    json.product.content
                                }</p>
                            </div>
                            <div class="align-items-center align-content-center col-md-3 border-right mt-1">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <h4 class="mr-1 text-center d-block mb-4 price">${
                                        json.product.price
                                    }</h4>
                                </div>
                                <h6 class="${
                                    json.product.isFeatured == 0 ? "d-none" : ""
                                } text-white bg-success p-2 text-center"><i class="far fa-gift"></i> محصول ویژه</h6>
                                <h6 class="bg-info text-white p-2 mt-2 text-center"><i class="far fa-star"></i> امتیاز محصول ${
                                    json.product.score
                                }</h6>
                                
                                <hr />
                                <div class="d-flex align-items-center justify-content-between admin-btnS">
                                    <button class="btn btn-sm btn-warning" title="ویرایش" data-toggle="modal" data-target="#edit_prd"><i class="far fa-edit"></i> ویرایش</button>
                                    <button class="btn btn-sm btn-danger delete_prd" title="حذف"><i class="far fa-trash-alt"></i> حذف</button>
                                </div>
                            </div>
                        </div>`;
        product_cnt.html(product_api);
    });

let comments_cnt = $(".comments_cnt");
let comments_api = "";

fetch(comment_url)
    .then((res) => res.json())
    .then(function (json) {
        if (json.comments.length > 0) $(".comments-registered").show();

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
                                        <h6 class="badge badge-dark p-2 mt-2 text-center font-sm font-weight-light">امتیاز کاربر: <b class="text-warning font-weight-bold"> ${json.comments[i].score} <i class="fas fa-star"></i></b></h6>
                                    </div>
                                </div>
                            </div>`;
        }
        comments_cnt.html(comments_api);
    });

$(document).on("click", ".delete_prd", function (e) {
    e.preventDefault();

    Swal.fire({
        title: "محصول مورد نظر حذف شود؟",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "حذف کن",
        cancelButtonText: "لغو",
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(product_url, { method: "DELETE" })
                .then((res) => res.json())
                .then();

            Swal.fire({
                icon: "success",
                title: "موفق!",
                text: "محصول با موفقیت حذف شد.",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                willClose: () => {
                    window.location = "http://127.0.0.1:8000/";
                },
            });
        }
    });
});

$(".post-comment").submit(function (e) {
    e.preventDefault();

    fetch(comment_url, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            name: $("#name").val(),
            email: $("#email").val(),
            avatar: $("#avatar").val(),
            score: $("#score").val(),
            comment: $("#comment").val(),
        }),
    })
        .then((res) => res.json())
        .then((json) => console.log(json));

    Swal.fire({
        icon: "success",
        title: "موفق!",
        text: "نظر با موفقیت افزوده شد.",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        willClose: () => {
            location.reload();
        },
    });
});

$(".put-product").submit(function (e) {
    e.preventDefault();

    console.log($("#prd_title").val());
    console.log($("#prd_content").val());
    console.log($("#prd_image").val());
    console.log($("#prd_price").val());
    console.log( $("#prd_score").val());
    console.log($("#prd_featured").is(':checked'));

    fetch(product_url, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            title: $("#prd_title").val(),
            content: $("#prd_content").val(),
            image: $("#prd_image").val(),
            price: $("#prd_price").val(),
            score: $("#prd_score").val(),
            isFeatured: $("#prd_featured").is(':checked'),
        }),
    })
        .then((res) => res.json())
        .then((json) => console.log(json));

    // Swal.fire({
    //     icon: "success",
    //     title: "موفق!",
    //     text: "محصول با موفقیت ویرایش شد.",
    //     showConfirmButton: false,
    //     timer: 5000,
    //     timerProgressBar: true,
    //     willClose: () => {
    //         location.reload();
    //     },
    // });
});