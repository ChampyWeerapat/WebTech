$(document).ready(function() {

  $('#form-change-password').on("submit", function() {
  	var that = $(this);
    var content = that.serialize();

    $.ajax({
      url : "PHP/change_password.php",
      dataType : "text",
      type : "post",
      data : content,
      success: function(data) {
        if (data == "Succesfully change password") {
          alert("Succesfully change password");
          window.location.href = "index.php";
        } else if (data == "Current password doesn't match") {
          $('#text-not-match').show();
          $('#text-not-match').css({"color" : "RED", "font-size" : "80%"});
          $('#current-pass').css("border-color", "RED");

          $('#text-invalid').hide();
          $('#new-pass').css("border-color", "#d5dbdb");
          $('#new-confirm-pass').css("border-color", "#d5dbdb");


        } else if (data == "Incorrect New password or Confirm password") {
          $('#text-invalid').show();
          $('#text-invalid').css({"color" : "RED", "font-size" : "80%"});
          $('#new-pass').css("border-color", "RED");
          $('#new-confirm-pass').css("border-color", "RED");

          $('#text-not-match').hide();
          $('#current-pass').css("border-color", "#d5dbdb");

        } else {
          // $('#text-invalid').show();
          // $('#text-invalid').css({"color" : "RED", "font-size" : "80%"});
          // $('#login-name').css("border-color", "RED");
          // $('#login-pass').css("border-color", "RED");
        }
      }
    });
    return false;
  });
});