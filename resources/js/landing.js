window.$ = window.jQuery = require("jquery");

window.axios = require("axios");

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

require("bootstrap");

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
            e.preventDefault();
        }
    });

    $("#selectCategoryAlert button").click(function() {
        $(this)
            .parent()
            .fadeOut();
    });

    console.log("I'm Ready");
});
