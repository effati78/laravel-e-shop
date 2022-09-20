let sponsors_cnt = $(".sponsors_cnt");
let sponsors_api = "";
let sponsors_url = "";

fetch("http://localhost:8000/api/sponsors")
    .then((res) => res.json())
    .then(function (json) {
        for (let i = 0; i < json.sponsors.length; i++) {
            sponsors_api += `<div class="col-3">
                                <div class="card position-relative overflow-hidden" data-id="${
                                    json.sponsors[i].id
                                }">
                                    
                                    ${
                                        c_admin != ""
                                            ? `<div class="cardSpTrue bg-light d-flex align-items-center justify-content-between py-2 px-3">
                                            <button class="btn btn-sm btn-warning badge edit_prd" title="ویرایش" data-toggle="modal" data-target="#edit_prd"><i class="far fa-edit"></i> ویرایش</button>
                                            <button class="btn btn-sm btn-danger badge delete_prd" title="حذف"><i class="far fa-trash-alt"></i> حذف</button>
                                        </div>`
                                            : ""
                                    }

                                    <div class="card-img">
                                        <img class="card-img-top img-fluid" src="/storage/${
                                            json.sponsors[i].img
                                        }"
                                        onerror="this.onerror=null; this.src='/images/default.png'" alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-ellipsis text-center">${
                                            json.sponsors[i].name
                                        }</h6>
                                        <a href="${
                                            json.sponsors[i].url
                                        }" class="btn-sm btn btn-primary w-100 mt-2">مشاهده سایت</a>
                                    </div>
                                </div>
                            </div>`;
        }
        sponsors_cnt.html(sponsors_api);
    });

$(document).on("click", ".edit_prd", function () {
    sponsors_url = `http://localhost:8000/api/sponsors/${$(this)
        .parents(".card")
        .attr("data-id")}`;
});

$(document).on("click", ".delete_prd", function (e) {
    e.preventDefault();

    sponsors_url = `http://localhost:8000/api/sponsors/${$(this)
        .parents(".card")
        .attr("data-id")}`;

    Swal.fire({
        title: "حامی مورد نظر حذف شود؟",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "حذف کن",
        cancelButtonText: "لغو",
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(sponsors_url, { method: "DELETE" })
                .then((res) => res.json())
                .then();

            Swal.fire({
                icon: "success",
                title: "موفق!",
                text: "حامی مالی با موفقیت حذف شد.",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                willClose: () => {
                    location.reload();
                },
            });
        }
    });
});

$(".put-sponsors").submit(function (e) {
    e.preventDefault();

    let form = new FormData(this);
    fetch(sponsors_url, {
        method: "POST",
        body: form,
    })
        .then((res) => res.json())
        .then((json) => console.log(json));

    Swal.fire({
        icon: "success",
        title: "موفق!",
        text: "حامی مالی با موفقیت ویرایش شد.",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        willClose: () => {
            // location.reload();
        },
    });
});

$(".post-sponsors").submit(function (e) {
    e.preventDefault();

    let form = new FormData(this);

    fetch("http://localhost:8000/api/sponsors", {
        method: "POST",
        body: form,
    })
        .then((res) => res.json())
        .then((json) => console.log(json));

    Swal.fire({
        icon: "success",
        title: "موفق!",
        text: "حامی مالی با موفقیت افزوده شد.",
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        willClose: () => {
            location.reload();
        },
    });
});

$(".sponsors").addClass("active");

if (c_admin != "") {
    $(".addSpTrue").show();
} else {
    $(".addSpTrue").hide();
}
