$(document).ready(function() {

  $('#form-login').on("submit", function() {
  	var that = $(this);
    var content = that.serialize();

    $.ajax({
      url : "PHP/login.php",
      dataType : "text",
      type : "post",
      data : content,
      success: function(data) {
        if (data == 'student') {
          window.location.href = "student.php";
        } else if (data == 'teacher') {
  			  window.location.href = "teacher.html";
        } else if (data == 'admin') {
  			  window.location.href = "admin.html";
        } else {
          $('#text-invalid').show();
          $('#text-invalid').css({"color" : "RED", "font-size" : "80%"});
          $('#login-name').css("border-color", "RED");
          $('#login-pass').css("border-color", "RED");
        }
      }
    });
    return false;
  });
});