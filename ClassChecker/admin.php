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
    <link rel="shortcut icon" href="file:///C|/xampp/htdocs/ClassChecker/Flat-UI-master/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/admin_style.css">


    <script src="Flat-UI-master/dist/js/vendor/jquery.min.js"></script>
    <script src="Flat-UI-master/dist/js/flat-ui.min.js"></script>
    <script src="Flat-UI-master/docs/assets/js/application.js"></script>
    
    <script>
      $(document).ready(function () {
     $("#upload-csv").hover(
        function() // on mouseover
        {
            $('#text-btn-import').text(".CSV");
        }, 

        function() // on mouseout
        {
            $('#text-btn-import').text("IMPORT");

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
              <a class="navbar-brand" href="admin.php">ClassChecker</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="http://www.ku.ac.th/king10.html" target="_blank">Kasetsart University</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-center">
                <li><a href="#fakelink">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
               </ul>

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="fui-mail"></span><span class="navbar-unread"></span></a></li>
                	<li><a href="profile.php"><img class="profile-icon" src="https://www.bodynbrain.com/img/unknownProfile.png" /><span class="user">TestUser</span></a></li>
          			<li class="dropdown">
                  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fui-gear"></span></a>
                  	<span class="dropdown-arrow"></span>
                  	<ul class="dropdown-menu">
                    	<li><a href="profile.php"><span class="fui-user"></span>  Profile</a></li>
                    	<li><a href="setting.php"><span class="fui-lock"></span>  Settings</a></li>
	                    <li><a href="#"><span class="fui-question-circle"></span>  Help</a></li>
	                    <li class="divider"></li>
	                    <li><a href="index.php"><span class="fui-power"></span>  Log out</a></li>
                  </ul>
                </li>
               </ul>
            </div><!-- /.navbar-collapse -->
          </nav><!-- /navbar -->
          </div>
  </div>
	<div class="wrapper">
   <button class="btn btn-block btn-lg btn-warning" data-popup-open="popup-create" id ="create-user"><span class="fui-plus"> </span>CREATE USER</button>

   <button class="btn btn-block btn-lg btn-info" data-popup-open="popup-create-from-csv" id ="create-user-csv"><span class="fui-exit"> </span>CREATE USER (CSV)</button>

  <button class="btn btn-block btn-lg btn-primary" data-popup-open="popup-import"  id ="upload-csv"><span class="fui-folder"> </span><label id="text-btn-import">IMPORT</label></button>

  </div>
  <div class="box" style="width: 900px; height: 500px; overflow: auto">
  <div class="wrapper-table">
    <table border="1" id="table-info">
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
        <td><button class="fui-document" id="export-each"></button></td>
      </tr>
    </table>
  </div>
    <button class="btn btn-block btn-lg btn-info" id="export-all"><span class="fui-document"></span> All User</button>
  </div>


  <div class="popup" data-popup="popup-import">
    <div class="popup-inner">
      <form>
        <label><h6>Enter Subject ID</h6><input type="text" value="" placeholder="Subject ID Ex. 01418433" class="form-control" /></label>
        <label><h6>Year</h6><input type="text" value="" placeholder="Year Ex.2560" class="form-control" />
        </label>
        <label><h6>Semester</h6>
        <select name="semester">
              <option value="First">First </option>
              <option value="Second">Second</option>
              <option value="Summer">Summer</option>
            </select>
        </label>
        <form action="PHP/importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" value="" class="form-control" />  
            </form>
        <hr>
        <button  class="btn btn-block btn-lg btn-info" type="Submit" id="btn-save">Submit</button>
        </form>
        <a class="popup-close" data-popup-close="popup-import" href="#">x</a>
    </div>
</div>

<!-- Create User -->
<div class="popup" data-popup="popup-create">
    <div class="popup-inner">
      <form>
          <label><h6>New User ID</h6><input type="text" value="" placeholder="New User ID" class="form-control" id="new-user" /></label>
        <hr>
        <button  class="btn btn-block btn-lg btn-info" id="btn-save">Create New User</button>
        </form>
        <a class="popup-close" data-popup-close="popup-create" href="#">x</a>
    </div>
  </div>

<!-- Create User from csv -->
    <div class="popup" data-popup="popup-create-from-csv">
    <div class="popup-inner">
      <form>
          <label><h6>New User ID File (.CSV)</h6><input type="file" name="file" value="" class="form-control" /></label>
        <hr>
        <button  class="btn btn-block btn-lg btn-info" id="btn-save">Create New User</button>
        </form>
        <a class="popup-close" data-popup-close="popup-create-from-csv" href="#">x</a>
    </div>
    </div>
</body>
</html>