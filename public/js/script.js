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

function verifyAnswer() {
    //get the selected value from the dropdown list
    var mylist = document.getElementById("myAns");
    var result = mylist.options[mylist.selectedIndex].text;
    if (result == "Shared") {
        //disable all the radio button
        document.getElementById("faq").disabled = false;
        document.getElementById("transactional").disabled = true;
    } else {
        //enable all the radio button
        document.getElementById("faq").disabled = false;
        document.getElementById("transactional").disabled = false;
    }
}
