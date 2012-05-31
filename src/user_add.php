<?php 
session_start();
$errors = '';

if(isset($_POST['submit']))
{		
	{
		if(empty($_SESSION['6_letters_code'] ) || strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
		       { $errors .= "error";	}
		else
		{		
			$link = mysql_connect('localhost','root',''); 	
			if (!$link)	die('Could not connect to MySQL: ' . mysql_error());
			     if (!mysql_select_db('airport', $link))
			    {		
				   echo 'Could not select database>';
				   exit;
			    }
				mysql_query("SET character_set_results=utf8");
				mysql_query("SET character_set_client=utf8");
				mysql_query("SET character_set_connection=utf8");		
				mysql_query("INSERT INTO userinfo (	
				user_firstname, user_lastname, 
				user_loginname, user_password, 
				user_registernumber, user_email, 
				user_homeaddress, user_mobilenumber, 
				user_phonenumber, user_bankacc ) 				
				VALUES ('".$_POST['firstname']."', 
				'".$_POST['lastname']."',
				'".$_POST['loginname']."',
				'".$_POST['password']."',
				'".$_POST['registernumber']."',
				'".$_POST['email']."',
				'".$_POST['homeaddress']."',				
				'".$_POST['mobilephone']."',
				'".$_POST['homephone']."',
				'".$_POST['bankacc']."'  )")
				or die("end problem");	
		        echo "Command complete";
		}
	}
}
?>
<html>
<body>
	<?php	if(!empty($errors))	{ echo " The Problem ";	}	?>
	  Click <a href="user_submit.php" target="mainWindow"> HERE </a> to return menu
</body>
</html>