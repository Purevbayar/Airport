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
			include ("connect.php");				
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