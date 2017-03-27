<?php  
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student | ClassChecker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="Flat-UI-master/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/student_style.css">

    <!-- JavaScript -->
    <script src="Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
    <script src="Flat-UI-master/dist/js/flat-ui.min.js"></script>
    <script src="Flat-UI-master/docs/assets/js/application.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type='text/javascript' src='JS/scriptHome.js'></script>

    <script type="text/javascript">
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
});

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
  </div>

  <div class="wrapper">
  	<button class="btn btn-block btn-lg btn-warning"  data-popup-open="popup-1" id="check-in"><h5>Class Check-in</h5></button>
  </div>


  <div class="box" style="width: 900px; height: 500px; overflow: auto; ">
  <div class="wrapper-table">
  <form accept-charset="utf-8" id="form-qr" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label><h6>Year</h6>
        <select name="year" class="btn btn-block btn-lg btn-info">
              <option value="2559">2559</option>
              <option value="2558">2558</option>
              <option value="2557">2557</option>
            </select>
        </label>
  <label><h6>Semester</h6>
        <select name="semester" class="btn btn-block btn-lg btn-info">
              <option value="First" <?php if(isset($_POST['semester']) && ($_POST['semester']=='First')) echo 'selected' ?> >First</option>
              <option value="Second" <?php if(isset($_POST['semester']) && ($_POST['semester']=='Second')) echo 'selected' ?> >Second</option>
              <option value="Summer" <?php if(isset($_POST['semester']) && ($_POST['semester']=='Summer')) echo 'selected' ?> >Summer</option>
            </select>
        </label>
        <label>
        <input type="submit" class="btn btn-info" name="ok" style="margin-top:11%" value="submit">
        </label>
        </form>
  <hr class="divider" style="background: black; height: 1px; width: 80%;">
  <?php
      include 'PHP/config.php';
    $sql = "SELECT sub_id,name,credit,time FROM subject ";
    $result = $db->query($sql);
  if(isset($_POST['ok'])){
    $year = $_POST['year'];
    $semester = $_POST['semester'];
      //execute the SQL query and return records
    $sql = "SELECT subject.sub_id,name,credit,time FROM subject JOIN section ON section.sub_id = subject.sub_id WHERE section.year = '$year' and section.semester = '$semester'";
    $result = $db->query($sql);
  }
      ?>
      <table border="1" id="table-info">
      
        <col width="150px" /> 
        <col width="300px" />
        <col width="80px" />
        <col width="250px" />
        <tr>
          <th>Subject ID</th>
          <th>Subject</th>
          <th>Credit</th>
          <th>Time</th>
        </tr>
        <?php
   if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
    
    <td >".$row["sub_id"]."</td>
    <td>".$row["name"]."</td>
    <td>".$row["credit"]."</td>
    <td>".$row["time"]."</td>
    
    
    </tr>"; 
    }
    echo "</table>";
} else {
    echo "0 results";
}
$db->close();
        ?>
</table>

  </div>
  </div>
  <div class="popup" data-popup="popup-1">
    <div class="popup-inner">
    	<form>
        <label><h4>Enter Classroom Code :</h4><input type="text" value="" placeholder="Classroom Code" class="form-control" /></label>
        <hr>
        <button  class="btn btn-block btn-lg btn-info" id="btn-save">Submit</button>
        </form>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>
</body>
</html>