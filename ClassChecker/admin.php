<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin | ClassChecker</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="Flat-UI-master/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/admin_style.css">

    <!-- JavaScript -->
    <script src="Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
    <script src="Flat-UI-master/dist/js/flat-ui.min.js"></script>
    <script src="Flat-UI-master/docs/assets/js/application.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type='text/javascript' src='JS/scriptHome.js'></script>
    
    <script>
      $(document).ready(function () {
     $("#upload-csv").hover(
        function() // on mouseover
        {
            $(this).text(".CSV");
        }, 

        function() // on mouseout
        {
            $(this).text("IMPORT");

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
   <button class="btn btn-block btn-lg btn-warning" id ="create-user">CREATE USER</button>
   <button class="btn btn-block btn-lg btn-info" id ="manage-user">MANAGE USER</button>
  <button class="btn btn-block btn-lg btn-primary" data-popup-open="popup-1"  id ="upload-csv">IMPORT</button>
  </div>
  <div class="box" style="width: 900px; height: 500px; overflow: auto">
  <div class="table-user">
    <table border="1">
      <col width="150px" />
      <col width="250px" />
      <col width="250px" />
      <col width="80px" />
      <tr>
        <th>User </th>
        <th>First Name </th>
        <th>Last Name </th>
        <th>Position </th>
        <th>Export </th>
      </tr>
      <tr>
        <td>122323213123</td>
        <td>Mr.Test</td>
        <td>Prototype</td>
        <td>
          <select  id="position">
            <option value="Student">Student</option>          
            <option value="Teacher">Teacher</option>  
          </select>
         </td>
        <td><button class="fui-document"></button></td>
      </tr>
    </table>
  </div>
  </div>


  <div class="popup" data-popup="popup-1">
    <div class="popup-inner">
      <form action="PHP/importData.php" method="post" enctype="multipart/form-data" id="importFrm">
        <label><h6>Enter Subject ID</h6><input type="text" name="subId" value="" placeholder="Subject ID Ex. 01418433" class="form-control" /></label>
        <label><h6>Year</h6><input type="text" name="year" value="" placeholder="Year Ex.2560" class="form-control" /></label>
        <label><h6>Semester</h6>
        <select name="semester">
              <option  value="First">First </option>
              <option  value="Second">Second</option>
              <option  value="Summer">Summer</option>
            </select>
        </label>
        <input type="file" name="file" /> 
        <hr>
        <input type="submit" class="btn btn-block btn-lg btn-info" name="importSubmit" value="IMPORT">
        </form>
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
    </div>
</div>
</body>
</html>