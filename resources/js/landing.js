window.$ = window.jQuery = require("jquery");

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

require("bootstrap");

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

$(document).ready(() => {
    $(".category-checkbox").change(function() {
        if ($(this).is(":checked")) {
            $(this)
                .parent()
                .addClass("active");
        } else {
            $(this)
                .parent()
                .removeClass("active");
        }
    });

    $("#landingPageForm").submit(function(e) {
        if ($(".category-checkbox:checked").length < 1) {
            $("#selectCategoryAlert").fadeIn();
            $([document.documentElement, document.body]).animate(
                {
                    scrollTop: $("#selectCategoryAlert").offset().top
                },
                1000
            );
            e.preventDefault();
        } else if (
            !validateEmail($("#email").val()) &&
            String(parseInt($("#email").val())).length < 10
        ) {
            $("#emailPhoneAlert").fadeIn();
            $([document.documentElement, document.body]).animate(
                {
                    scrollTop: $("#emailPhoneAlert").offset().top
                },
                1000
            );
            e.preventDefault();
        }
    });

    $("#selectCategoryAlert button,#emailPhoneAlert button").click(function() {
        $(this)
            .parent()
            .fadeOut();
    });

    console.log("I'm Ready");
});
