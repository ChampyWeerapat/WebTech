<?php 

	session_start();

	echo "
	<ul class='nav navbar-nav navbar-right'>
    	<li><a href='#'><span class='fui-mail'></span><span class='navbar-unread'></span></a></li>
        <li><a href='profile.php'><img class='profile-icon' src='https://www.bodynbrain.com/img/unknownProfile.png' />
        <span class='user' id='username-navbar'>
                {$_SESSION['username']}
        </span></a></li>
        <li class='dropdown'>
        <a href='#''class='dropdown-toggle' data-toggle='dropdown'><span class='fui-gear'></span></a>
        <span class='dropdown-arrow'></span>
        <ul class='dropdown-menu'>
        	<li><a href='profile.php'><span class='fui-user'></span>  Profile</a></li>
        	<li><a href='setting.php'><span class='fui-lock'></span>  Settings</a></li>
	    	<li><a href='#''><span class='fui-question-circle'></span>  Help</a></li>
	    	<li class='divider'></li>
	    	<li><a href='PHP/kill_session.php'><span class='fui-power'></span>  Log out</a></li>
        </ul>
        </li>
    </ul>
	";

?>