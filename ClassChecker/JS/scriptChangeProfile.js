$(document).ready(function() {

	$('#form-profile').on("submit", function() {
	  	var that = $(this);
    	var content = that.serialize();

    	$.ajax({
    	url : "PHP/change_profile.php",
	    dataType : "text",
	    type : "post",
	    data : content,
	    success: function(data) {
        	if (data == 'yes') {
          		window.location.href = "index.php";
        // 	} else if (data == 'teacher') {
  			  	// window.location.href = "teacher.php";
        // 	} else if (data == 'admin') {
  			  	// window.location.href = "admin.php";
        // 	} else {
        //   		$('#text-invalid').show();
		      //   $('#text-invalid').css({"color" : "RED", "font-size" : "80%"});
		      //   $('#login-name').css("border-color", "RED");
		      //   $('#login-pass').css("border-color", "RED");
        	}
      	}
    	});
    	return false;
	});
});