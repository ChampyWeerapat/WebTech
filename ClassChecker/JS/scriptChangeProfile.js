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
            alert("Successfully change your profile.");
            window.location.href = "index.php";
          } else {
            alert("Incorrect Password.");
          }
        }
    	});
    	return false;
	});
});