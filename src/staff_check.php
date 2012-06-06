<?php



if(isset($_POST['submit']))
	{
		include ("connect.php");
				$sql="select* from staff";
				$result=mysql_query($sql);
					while( $row = mysql_fetch_assoc($result) )
						{ 
						if ( $_GET['type'] == $row['staff_type'] )
							{
								if( ( $row['staff_loginname'] == $_POST['name'] ) && ( $row['staff_password'] == $_POST['password'] ) )
									{
										echo 'login complete';
									if ($_GET['type'] == "1")
										echo 'click <a href="admin_window.php?name='.$_POST['name'].'" target="#"> here </a> to begin';
									else
								echo 'click <a href="staff_window.php?name='.$_POST['name'].'" target="#"> here </a> to begin';
				}
			}
		}
	}
?>