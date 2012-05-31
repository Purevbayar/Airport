<?php
	session_start();
	$window = $_GET['w'];
	$proced = $_GET['p'];
	$errors = "";
	if(isset($_POST['submit']))
	{
		if(empty($_SESSION['6_letters_code'] ) || strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
		{ 
			$errors .= "\n The captcha code does not match!";	
		}
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
			
			switch ($window)
			{
				// staff part
				case "1" :

					switch ($proced)
					{						
						case "1" :
							
							mysql_query("INSERT INTO staff (	
											staff_firstname, 
											staff_lastname, 
											staff_loginname, 
											staff_type, 
											staff_password ) 				
							VALUES ('".$_POST['firstname']."', 
									'".$_POST['lastname']."',
									'".$_POST['loginname']."',
									'".$_POST['type']."',
									'".$_POST['password']."'  )")
									or die("end problem");
									echo ' New System Staffer Submit Has Complete ';
									echo 'click <a href="staff_add.php" target="rightFrame"> here </a> to return';
						break;
						
						case "2" : 
							mysql_query("UPDATE staff SET	
											staff_firstname='".$_POST['firstname']."', 
											staff_lastname='".$_POST['lastname']."', 
											staff_loginname='".$_POST['loginname']."', 
											staff_type='".$_POST['type']."', 
											staff_password='".$_POST['password']."'
											WHERE staff_id = '".$_POST['id']."' ")
									or die("end problem");
									echo ' Employeer Information Edited ';
									echo 'click <a href="staff_edit.php" target="rightFrame"> here </a> to return';
						break;
						
						case "3" : 
							mysql_query("DELETE FROM staff WHERE staff_id='".$_POST['id']."' ")
									or die("end problem");
									echo ' System Staffer Deleted ';
									echo 'click <a href="staff_delete.php" target="rightFrame"> here </a> to return';
						break;
					}
				break;

				// airplane part
				case "2" : 
					switch ($proced)
					{
						case "1" : 							
							mysql_query("INSERT INTO airplane (	
											airplane_name, 
											airplane_volume, 
											airplane_direct, 
											airplane_position, 
											airplane_status,
											airplane_ticket_price ) 				
							VALUES ('".$_POST['name']."', 
									'".$_POST['volume']."',
									'".$_POST['direct']."',
									'".$_POST['position']."',
									'".$_POST['status']."',
									'".$_POST['ticket_price']."' )")
									or die("end problem");
									echo ' New Aiplane Submit Has Complete ';
									echo 'click <a href="airplane_add.php" target="rightFrame"> HERE </a> to return';
						break;
						
						case "2" : 
							mysql_query("UPDATE airplane SET	
											airplane_name='".$_POST['name']."', 
											airplane_volume='".$_POST['volume']."', 
											airplane_direct='".$_POST['direct']."', 
											airplane_position='".$_POST['position']."', 
											airplane_status='".$_POST['status']."',
											airplane_ticket_price='".$_POST['ticket_price']."'
											WHERE airplane_id = '".$_POST['id']."' ")
									or die("end problem");
									echo ' AirPlane Information Edited';
									echo 'click <a href="staff_edit.php" target="rightFrame"> here </a> to return';
						break;
						
						case "3" : 
							mysql_query("DELETE FROM airplane WHERE airplane_id='".$_POST['id']."' ")
								or die("end problem");
								echo ' AirPlane Deleted ';
								echo 'click <a href="airplane_delete.php" target="rightFrame"> here </a> to return';
						break;
					}				
				
				break;
				
				// Direction part
				case "3" : 
				
					switch ($proced)
					{
						case "1" : 
							mysql_query("INSERT INTO directions (	
											direct_name, 
											direct_type ) 				
							VALUES ('".$_POST['name']."', 
									'".$_POST['type']."' )")
									or die(" Алдаа гарсан ");
									echo ' Шинэ чиглэл нэмэх үйлдэл амжилттай боллоо ';
									echo 'click <a href="direction_add.php" target="rightFrame"> HERE </a> to return';
						break;
						
						case "2" : 
							mysql_query("UPDATE directions SET	
											direct_name='".$_POST['name']."', 
											direct_type='".$_POST['type']."'
											WHERE direct_id = '".$_POST['id']."' ")
									or die("end problem");
									echo ' Direction information Edited ';
									echo 'click <a href="direction_edit.php" target="rightFrame"> here </a> to return';
						break;
						
						case "3" : 
							mysql_query("DELETE FROM directions WHERE direct_id='".$_POST['id']."' ")
									or die("end problem");
									echo ' Direct Deleted ';
									echo 'click <a href="direction_delete.php" target="rightFrame"> here </a> to return';
						break;
					}
				break;
			}
		}
		if(!empty($errors))	{ echo " The Problem "; }
	}
?>