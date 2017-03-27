<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home | ClassChecker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="Flat-UI-master/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/teacher_style.css">

    <!-- JavaScript -->
    <script src="Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
    <script src="Flat-UI-master/dist/js/flat-ui.min.js"></script>
    <script src="Flat-UI-master/docs/assets/js/application.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type='text/javascript' src='JS/scriptHome.js'></script>

    <script>

      $(document).ready(function () {
     $("#btn-import").hover(
        function() // on mouseover
        {
            $('#text-btn-import').text("Grade.CSV");
        },

        function() // on mouseout
        {
            $('#text-btn-import').text("Import Grade");

        });
      });



		$(function() {
		//----- OPEN
		$('[data-popup-open]').on('click', function(e)  {
			var targeted_popup_class = jQuery(this).attr('data-popup-open');
			$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

			e.preventDefault();
		});

		//----- CLOSE
		$('[data-popup-close]').on('click', function(e)  {
			var targeted_popup_class = jQuery(this).attr('data-popup-close');
			$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

			e.preventDefault();
		});

$(document).ready(function(){



  // Click subject(Ex.01418443) then show all date
  $('[data-subject]').click(function()  {
      var targeted_subject_class = jQuery(this).attr('data-subject');
      $('[drop-date="' + targeted_subject_class + '"]').slideToggle("slow");
    });

// Click date then show option
  $('[data-date]').click(function()  {
      var targeted_date_class = jQuery(this).attr('data-date');
      $('[data-option="' + targeted_date_class + '"]').slideToggle("slow");
    });




	$("#std1").click(function(){
		$("#dropstd").slideToggle("slow");

});

		$('#attend1').click(function () {
			$("#box1").animate({width: 'toggle'});
		});


		$('#perform1').click(function () {
				$("#box2").animate({width: 'toggle'});
	});
});
});

//Press Enter to comment
function handle(e){
				if(e.keyCode === 13){
						e.preventDefault(); // Ensure it is only this code that rusn

						var temp = $('.commentoption').attr('commentoption');
						var tmpp = $('input[commentoption="1"]').val();
						console.log(temp)
						console.log($('label[todo-comment="'+temp+'"]'));
						$('.todo-comment').text(tmpp)
						$("#dropstd").slideToggle("slow");
						}

				}

    </script>
</head>
<body>
<div class="container">
  <div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" id="home-navbar">ClassChecker</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="http://www.ku.ac.th/king10.html" target="_blank">Kasetsart University</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-center">
                <li><a href="#fakelink">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
               </ul>

                <?php
                  include 'PHP/info_navbar.php';
                ?>

            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
  </div>

	<div class="row demo-samples">
  <div class="col-xs-4">
    <div class="btn-wrapper">
      <div class="btn-qr">
          <button class="btn btn-block btn-lg btn-right" data-popup-open="popup-1" id= "att" href="#"><h5>Create QRcode</h5></button></div>
          <div >
          <button class="btn btn-success" data-popup-open="popup-import-grade" id="btn-import"><label id="text-btn-import">Import Grade</label></button>
          </div>
      </div>


          <div class="todo" id= "dothis">
            <div class="todo-search">
              <input class="todo-search-field" type="search" value="" placeholder="Search">
            </div>
            <ul style="width: 100%; height: 340px; overflow: auto">
              <li class="data-subject" data-subject="01418443">
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    01418443
                  </h4>
                </div>
			  </li>

        <div class="drop-date" drop-date="01418443" style="width: 100%; height: 150px; overflow: auto">

             <li class="data-date" data-date ="25"><a href="#"><span class="fui-time"> </span>25/03/17</a></li>
                  <div class="data-option" data-option="25">
                          <li id="attend1"><a href="#"><span class="fui-eye"> </span>Attendance</a></li>
                          <li id="perform1"><a href="#"><span class="fui-new"> </span>Performance</a></li>
                  </div>


            <!-- <li class="data-date"  data-date ="28"><a href="#"><span class="fui-time"> </span>28/03/17</a></li>
                  <div class="data-option" data-option ="28">
                        <li id="attend1"><a href="#"><span class="fui-eye"> </span>Attendance</a></li>
                        <li id="perform1"><a href="#"><span class="fui-new"> </span>Performance</a></li>
                  </div>


            <li class="data-date"  data-date ="29"><a href="#"><span class="fui-time"> </span>29/03/17</a></li>
                  <div class="data-option" data-option ="29">
                        <li id="attend1"><a href="#"><span class="fui-eye"> </span>Attendance</a></li>
                        <li id="perform1"><a href="#"><span class="fui-new"> </span>Performance</a></li>
                  </div>


          <li class="data-date"  data-date ="30"><a href="#"><span class="fui-time"> </span>30/03/17</a></li>
                  <div class="data-option" data-option ="30">
                        <li id="attend1"><a href="#"><span class="fui-eye"> </span>Attendance</a></li>
                        <li id="perform1"><a href="#"><span class="fui-new"> </span>Performance</a></li>
                  </div>


      <li class="data-date"  data-date ="31"><a href="#"><span class="fui-time"> </span>31/03/17</a></li>
                  <div class="data-option" data-option ="31">
                        <li id="attend1"><a href="#"><span class="fui-eye"> </span>Attendance</a></li>
                        <li id="perform1"><a href="#"><span class="fui-new"> </span>Performance</a></li>
                  </div> -->
        </div>


              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    01418351
                  </h4>
                  09/03/17
                </div>
              </li>
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    01418332
                  </h4>
                  09/03/17
                </div>
              </li>
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    01418497
                  </h4>
                  06/03/17
                </div>
              </li>
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    01418217
                  </h4>
                  28/02/17
                </div>
              </li>
              <li>
                <div class="todo-icon fui-list"></div>
                <div class="todo-content">
                  <h4 class="todo-name">
                    01418114
                  </h4>
                  09/02/17
                </div>
              </li>
            </ul>
          </div><!-- /.todo -->

  </div>
	<div class="col-xs-8">
		<div class="box" id="box1">
		<div class="info-box">
				<h2>01418443</h2>
				<h5 class="text-user">Username : 6010412345</h5>
				<label class="total_std">Total Student : xx </label>
				<div class="attend">
				<label> Attendance : xx </label>
				</div>
				<!-- <div class="comment">
				<h6>comment</h6>
				<div class="todo" id= "stdcomment">
					<ul style="width: 100%; height: 240px; overflow: auto">
						<li>
							<div class="todo-content">
								<h4 class="todo-name">
									student name
								</h4>
								comment...
							</div>
						</li>
						<li>
							<div class="todo-content">
								<h4 class="todo-name">
									student name
								</h4>
								comment...
							</div>
						</li>
						<li>
							<div class="todo-content">
								<h4 class="todo-name">
									student name
								</h4>
								comment...
							</div>
						</li>
					</ul>
				</div>
				</div> -->
				<button  class="btn btn-block btn-lg btn-info" id="btn-save">Save</button>
		</div>
		</div>

		<div class="box" id="box2">
		<div class="info-box">
				<h2>01418443</h2>
				<h5 class="text-user">Username : 6010412345</h5>

				<div class="student">
				<div class="todo" id= "stdcomment">
					<ul style="width: 100%; height: 340px; overflow: auto">
						<li id="std1">
							<div class="todo-content">
								<h4 class="todo-name">
									student name
								</h4>
							<label class="todo-comment" todo-comment ="1">
								comment...</label>
							</div>

						</li>
						<div class="dropdownstd" id="dropstd">
								<li id="comment1"><input type="text"  value="" placeholder="comment" class="commentoption" commentoption ="1" onkeypress="handle(event)"></li>
						</div>
						<li>
							<div class="todo-content">
								<h4 class="todo-name">
									student name
								</h4>
								comment...
							</div>
						</li>
						<li>
							<div class="todo-content">
								<h4 class="todo-name">
									student name
								</h4>
								comment...
							</div>
						</li>
					</ul>
				</div>
				</div>
				<button  class="btn btn-block btn-lg btn-info" id="btn-save">Save</button>
		</div>
		</div>

	</div>
  </div>


<!-- Import Grade -->
  <div class="popup" data-popup="popup-import-grade">
    <div class="popup-inner">
      <form>
      <h4>Importing Grade</h4>
      <hr>
        <label><p>Enter Subject ID :</p><input type="text" value="" placeholder="Subject ID" class="form-control" /></label>
        <br><br>
        <input type="file" value=""  class="form-control" />
        <hr>
        <button  class="btn btn-block btn-lg btn-info" id="btn-save">Submit</button>
        </form>
        <a class="popup-close" data-popup-close="popup-import-grade" href="#">x</a>
    </div>
</div>

<!--Generate QR code-->
 <div class="popup" data-popup="popup-1">
    <div class="popup-inner">
        <form accept-charset="utf-8" id="form-qr" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<h5>Class Info</h5>
        	<div class="date">
			<label>Date <span id="date"></span></label>
            <script>
                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth() + 1; //January is 0!
                var yyyy = today.getFullYear();

                if (dd < 10) {
                    dd = '0' + dd
                }

                if (mm < 10) {
                    mm = '0' + mm
                }

                today = mm + '/' + dd + '/' + yyyy;
                $("#date").text(today);
                $("#date").val(today);
            </script>
			</div>
			<div class="subject">
			<label>Subject ID<input type="text" value="" placeholder="Subject ID" class="form-control" name="subjectid" required /></label>
			</div>
			<div class="section">
			<label>Section<input type="text" value="" placeholder="Section" class="form-control" name="sec" required /></label>
			</div>
        	<div class="time">
			<label>Expire Time<input type="text" value="" placeholder="Expire Time" class="form-control" name="exp" required /></label>
			</div>

            <input type="submit" value="Generate" name="generate">
        </form>
        <p><a data-popup-open="popup-2" href="#">Show QR</a></p>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>


<?php
    if(isset($_POST['generate'])){
        $code=$_POST['subjectid'];
        $url="http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://localhost/ClassChecker/checkin.php?qr=".$code;

        echo "
        <script>alert('Generate Success');</script>
        <div class='popup' data-popup='popup-2'>
            <div class='popup-inner'>
                <h2>CODE: $code</h2>
                <img src=$url alt='qr code'>
                <p><a data-popup-close='popup-2' href='#'>Close</a></p>
                 <a class='popup-close' data-popup-close='popup-2' href='#'>x</a>
            </div>
        </div>";
    }
?>

 </div>

</body>
</html>
