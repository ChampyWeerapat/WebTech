<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ClassChecker Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="Flat-UI-master/dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Loading Flat UI -->
    <link href="Flat-UI-master/dist/css/flat-ui.css" rel="stylesheet">
    <link href="Flat-UI-master/docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="Flat-UI-master/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/login_style.css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type='text/javascript' src='JS/scriptLogin.js'></script>
</head>
<body>
  <div class="container">
    <div class="col-xs-12">
            <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                  <span class="sr-only">Toggle navigation</span>
                </button>
                <a class="navbar-brand" href="index.php">ClassChecker</a>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse-01">
                <ul class="nav navbar-nav navbar-left">
                  <li><a href="http://www.ku.ac.th/king10.html" target="_blank">Kasetsart University</a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                  <li><a href="#fakelink">About</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                 </ul>
              </div><!-- /.navbar-collapse -->
            </nav><!-- /navbar -->
    </div>
    <div class="wrapper-login">
      <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="Flat-UI-master/img/icons/svg/clipboard.svg" alt="Welcome to Classroom">
            <h4>Welcome to <small>Classroom</small></h4>
          </div>

          <form method="post" accept-charset="utf-8" id="form-login">
            <div class="login-form">
              <div class="email">
                <input type="text" class="form-control login-field" placeholder="Enter your email" id="email" name="email">
              </div>
              <hr>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
              </div>
              
              <p id="text-invalid" hidden>Incorrect Email</p>
          
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>