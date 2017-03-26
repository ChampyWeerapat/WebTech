<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Settings | ClassChecker</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	    <!-- Loading Bootstrap -->
	    <link href="Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Loading Flat UI -->
	    <link href="Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
	    <link href="Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">
	    <link rel="shortcut icon" href="Flat-UI-master/img/favicon.ico">
	    <link rel="stylesheet" type="text/css" href="CSS/setting_style.css">

      <!-- JavaScript -->
	    <script src="Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
	    <script src="Flat-UI-master/dist/js/flat-ui.min.js"></script>
	    <script src="Flat-UI-master/docs/assets/js/application.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script type='text/javascript' src='JS/scriptChangePassword.js'></script>
      <script type='text/javascript' src='JS/scriptHome.js'></script>

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
                <li><a href="contact.html">Contact Us</a></li>
               </ul>

                <?php 
                  include 'PHP/info_navbar.php';
                ?>
                
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
          </div>
  </div>
  <div class="pass-box">
  	<form method="post" id="form-change-password">
      <h4>Change Your Password</h4>

      <div class="curpass-box">
      	<label>Current Password
          <input type="password" class="form-control login-field" value="" placeholder="Current Password" id="current-pass" name="current-pass">
        </label>
      </div>

      <p id="text-not-match" hidden>Current password doesn't match</p>

      <div class="newpass-box">
      	<label>New Password
          <input type="password" class="form-control login-field" value="" placeholder="New Password" id="new-pass" name="new-pass">
        </label>
      </div>

      <div class="conpass-box">
      	<label>Confirm Password
          <input type="password" class="form-control login-field" value="" placeholder="Confirm Password" id="new-confirm-pass" name="new-confirm-pass">
        </label>
      </div>

      <p id="text-invalid" hidden>Incorrect New password or Confirm password</p>
      
      <input type="submit" class="btn btn-block btn-lg btn-info" id="btn-change-pass" value="Change Password">

      </form>
  </div>
	</body>
</html>	