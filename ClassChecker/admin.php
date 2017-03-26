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


    <script src="Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
    <script src="Flat-UI-master/dist/js/flat-ui.min.js"></script>
    <script src="Flat-UI-master/docs/assets/js/application.js"></script>

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
              <a class="navbar-brand" href="home.html">ClassChecker</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="http://www.ku.ac.th/king10.html" target="_blank">Kasetsart University</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-center">
                <li><a href="#fakelink">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
               </ul>

                <?php 
                  include 'PHP/info_navbar.php';
                ?>

            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
  </div>
	<div class="wrapper">
   <button class="btn btn-block btn-lg btn-info" id ="manage-user"><h4>Manage User</h4></button>
  <button class="btn btn-block btn-lg btn-primary" id ="upload-csv">IMPORT</button>
  </div>
</body>
</html>