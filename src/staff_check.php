<?php



if(isset($_POST['submit']))
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