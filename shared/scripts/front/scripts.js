$(function () {

    $(".jsBtnMobileMenu").on("click", function (e) {
        e.preventDefault();
        let controller = $(this);
        let menu = $(".header-nav");

        if (menu.hasClass("d-none")) {
            menu.hide().removeClass("d-none").slideDown(450, function () {
                $(this).addClass("d-block");
            });
        } else {
            menu.slideUp(450, function () {
                $(this).removeClass("d-block").addClass("d-none");
            });
        }
    });

});