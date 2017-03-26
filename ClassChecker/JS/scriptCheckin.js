var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).ready(function () {

    $('#form-login').on("submit", function () {
        var that = $(this);
        var content = that.serialize();

        $.ajax({
            url: "PHP/login.php",
            dataType: "text",
            type: "post",
            data: content,
            success: function (data) {
                if (data == 'student') {
                    alert("check in succuess");
                    window.location.href = "student.php";
                } else {
                    $('#text-invalid').show();
                    $('#text-invalid').css({ "color": "RED", "font-size": "80%" });
                    $('#login-name').css("border-color", "RED");
                    $('#login-pass').css("border-color", "RED");
                }
            }
        });
        return false;
    });
});