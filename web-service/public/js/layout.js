let c_admin = getCookie("admin_shop");

if (c_admin != "") {
    $(".loginBtnTrue").show();
    $(".loginBtnFalse").hide();
} else {
    $(".loginBtnTrue").hide();
    $(".loginBtnFalse").show();
}