$("#reload").click(function () {
    $.ajax({
        type: "GET",
        url: "reload-captcha",
        success: function (data) {
            $(".captcha span").html(data.captcha);
        },
    });
});

var myModal = document.getElementById("myModal");
var myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", function () {
    myInput.focus();
});
