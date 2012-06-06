<<<<<<< HEAD
﻿<html>
	<head>		
		<link href="style/info.css" rel="stylesheet" type="text/css" />
		<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
		<script>
			function refreshCaptcha()
			{
				var img = document.images["captchaimg"];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}

			function chck()
			{
				if ( document.myForm.accept.checked == true ) 
				{
				document.getElementById('fname').disabled = false;
				document.getElementById('lname').disabled = false;
				document.getElementById('login').disabled = false;
				document.getElementById('type').disabled = false;
				document.getElementById('pass').disabled = false;
				document.getElementById('repass').disabled = false;
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('fname').disabled = true;
				document.getElementById('lname').disabled = true;
				document.getElementById('login').disabled = true;
				document.getElementById('type').disabled = true;
				document.getElementById('pass').disabled = true;
				document.getElementById('repass').disabled = true;
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
		</script>
	</head>

	<body onload="chck()">
		<form action="admin_check.php?w=1&p=2" method="POST" name="myForm">
		<table>
		
			<tr>
				<td class="prev">
					Өөрчлөх ажилтан :
				</td>
				
				<td class="next">
					<?php
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
						
						echo '
						<select name="id">
							<option> Choose ... </option>';						
								$sql="select* from staff";
								$result=mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['staff_id'].'">  '.$row['staff_loginname'].' </option> ';	
								}
						echo ' </select> ';						
					?>
				</td>
			</tr>
			
			<tr>
				<td class="prev">					
					Би өөрчлөлтийг зөвшөөрч байна
				</td>
				
				<td class="next">
					<input type="checkbox" name="accept" onclick="chck()" title="click" >
				</td>
			</tr>
			
			<th colspan="2">
				Системийн Ажилтны Мэдээллийг өөрчлөх
			</th>		
			
			<tr>
				<td class="prev"> 				Ажилтны овог :				</td>				
				<td class="next">	<input type="text" id="fname" name="firstname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны нэр : 			</td>				
				<td class="next">	<input type="text" id="lname" name="lastname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нэвтрэх нэр :			</td>				
				<td class="next">	<input type="text" id="login" name="loginname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны төрөл :			</td>				
				<td class="next">	
					<select name="type" id="type">
						<option value="1" >Admin</option>
						<option value="0" >Staff</option>
					</select>
				</td>				
			</tr>
			
			<tr>
				<td class="prev">					Нууц үг :				</td>				
				<td class="next">	<input type="password" id="pass" name="password"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нууц үг давт :			</td>				
				<td class="next">	<input type="password" id="repass" name="repassword"/>	</td>
			</tr>		
			
			<tr>
				<td class="prev">			
					<a href="javascript: refreshCaptcha();" title="дарвал солигдно">
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" title="">
					</a>	
				</td>				
				<td class="next">	<input type="text" id="6lettercode" class="btn" name="6_letters_code"> </td>
			</tr>
			
			<tr>
				<td class="prev">
					Дээрх кодыг оруул
				</td>
				
				<td class="next">
					<input type="submit" name="submit" value="Өөрчлөх" id="submit">
				</td>			
			</tr>	
			
		</table>
		</form>
	</body>
=======
﻿<html>
	<head>		
		<link href="style/info.css" rel="stylesheet" type="text/css" />
		<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
		<script>
			function refreshCaptcha()
			{
				var img = document.images["captchaimg"];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}

			function chck()
			{
				if ( document.myForm.accept.checked == true ) 
				{
				document.getElementById('fname').disabled = false;
				document.getElementById('lname').disabled = false;
				document.getElementById('login').disabled = false;
				document.getElementById('type').disabled = false;
				document.getElementById('pass').disabled = false;
				document.getElementById('repass').disabled = false;
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('fname').disabled = true;
				document.getElementById('lname').disabled = true;
				document.getElementById('login').disabled = true;
				document.getElementById('type').disabled = true;
				document.getElementById('pass').disabled = true;
				document.getElementById('repass').disabled = true;
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
		</script>
	</head>

	<body onload="chck()">
		<form action="admin_check.php?w=1&p=2" method="POST" name="myForm">
		<table>
		
			<tr>
				<td class="prev">
					Өөрчлөх ажилтан :
				</td>
				
				<td class="next">
					<?php
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
						
						echo '
						<select name="id">
							<option> Choose ... </option>';						
								$sql="select* from staff";
								$result=mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['staff_id'].'">  '.$row['staff_loginname'].' </option> ';	
								}
						echo ' </select> ';						
					?>
				</td>
			</tr>
			
			<tr>
				<td class="prev">					
					Би өөрчлөлтийг зөвшөөрч байна
				</td>
				
				<td class="next">
					<input type="checkbox" name="accept" onclick="chck()" title="click" >
				</td>
			</tr>
			
			<th colspan="2">
				Системийн Ажилтны Мэдээллийг өөрчлөх
			</th>		
			
			<tr>
				<td class="prev"> 				Ажилтны овог :				</td>				
				<td class="next">	<input type="text" id="fname" name="firstname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны нэр : 			</td>				
				<td class="next">	<input type="text" id="lname" name="lastname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нэвтрэх нэр :			</td>				
				<td class="next">	<input type="text" id="login" name="loginname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны төрөл :			</td>				
				<td class="next">	
					<select name="type" id="type">
						<option value="1" >Admin</option>
						<option value="0" >Staff</option>
					</select>
				</td>				
			</tr>
			
			<tr>
				<td class="prev">					Нууц үг :				</td>				
				<td class="next">	<input type="password" id="pass" name="password"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нууц үг давт :			</td>				
				<td class="next">	<input type="password" id="repass" name="repassword"/>	</td>
			</tr>		
			
			<tr>
				<td class="prev">			
					<a href="javascript: refreshCaptcha();" title="дарвал солигдно">
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" title="">
					</a>	
				</td>				
				<td class="next">	<input type="text" id="6lettercode" class="btn" name="6_letters_code"> </td>
			</tr>
			
			<tr>
				<td class="prev">
					Дээрх кодыг оруул
				</td>
				
				<td class="next">
					<input type="submit" name="submit" value="Өөрчлөх" id="submit">
				</td>			
			</tr>	
			
		</table>
		</form>
	</body>
>>>>>>> 7b765e7714afd1d6fec5d2e185b7da633ffa0219
</html>