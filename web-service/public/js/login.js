if (c_admin != "") {
    $(".loginTrue").show();
    $(".loginFalse").hide();
} else {
    $(".loginTrue").hide();
    $(".loginFalse").show();
}

$(".logout").click(function (e) { 
    e.preventDefault();
    
    deleteCookie('admin_shop');
    Swal.fire({
            icon: "success",
            title: "تبریک!",
            text: "با موفقیت از سامانه خارج شدید.",
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            willClose: () => {
                location.reload();
            },
        });
});

$(".login-form").submit(function(e) {
    e.preventDefault();

    let email = $(".email").val(),
        password = $(".password").val();

    if (email === "effati78@pm.me" && password === "123456") {
        setCookie('admin_shop', 'trueeeeeee', 12345);

        Swal.fire({
            icon: "success",
            title: "تبریک!",
            text: "با دسترسی ادمین واردِ سامانه شده‌اید.",
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
            willClose: () => {
                location.reload();
            },
        });
    } else {
        Swal.fire({
            icon: "error",
            title: "خطا!",
            text: "ایمیل یا رمز عبور شما اشتباه است.",
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        });
    }
});