<?php

	$link = mysql_connect('mysql-user-master.stanford.edu', 'ccs147chandmal', 'ooquooto');
	mysql_select_db('c_cs147_chandmal');


	// username and password sent from form 
	$myusername=$_POST['username']; 
	$mypassword=$_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="SELECT * FROM members WHERE username='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		//echo "Danners is a n00b";
		header('Location: result.php');
	} else {
		echo "Wrong Username or Password";
	}
?>