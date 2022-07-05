let sponsors_cnt = $(".sponsors_cnt");
let sponsors_api = "";
fetch("http://localhost:8000/api/sponsors")
    .then((res) => res.json())
    .then(function (json) {
        for (let i = 0; i < json.sponsors.length; i++) {
            sponsors_api += `<div class="col-3">
                                <div class="card position-relative">
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid" src="${json.sponsors[i].img}"
                                            alt="Card image cap" />
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title text-ellipsis text-center">${json.sponsors[i].name}</h6>
                                        <a href="${json.sponsors[i].url}" class="btn-sm btn btn-primary w-100 mt-2">مشاهده سایت</a>
                                    </div>
                                </div>
                            </div>`;
        }
        sponsors_cnt.html(sponsors_api);
    });

$('.sponsors').addClass('active');