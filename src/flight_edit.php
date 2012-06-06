<<<<<<< HEAD
﻿<?php

?><html>
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
				document.getElementById('date1').disabled = false;
				document.getElementById('date2').disabled = false;
				document.getElementById('airplane_id').disabled = false;
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('date1').disabled = true;
				document.getElementById('date2').disabled = true;
				document.getElementById('airplane_id').disabled = true;
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
		</script>
	</head>

	<body onload="chck()">
		<form action="flight_edit.php" method="POST" name="myForm">
			<table>		
			<tr>			
				<td class="prev">
					Өөрчлөх нислэг :
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
						    $sql="select* from flight";
							$result=mysql_query($sql);
							while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['flight_id'].'">  '.$row['flight_direction'].'-'.$row['flight_ourposition'].'-'.$row['flight_id'].' </option> ';	
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
				Нислэгийн Мэдээллийг өөрчлөх
			</th>		
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
				?>
			<tr>
				<td class="prev"> 			Онгоцны нэр :				</td>				
				<td class="next">	
				<?php
					echo '
					<select name="airplane_id" id="airplane_id">
						<option> Сонго ... </option>';						
							$sql="select* from airplane";
							$result=mysql_query($sql);
							while( $row = mysql_fetch_assoc($result) )
							{ 
								echo '<option value="'.$row['airplane_id'].'">  '.$row['airplane_name'].' </option> ';	
							}
					echo ' </select> ';
					?>				
				</td>
			</tr>
			
			<tr>
				<td class="prev">				Нисэх он сар өдөр цаг минут: 									</td>				
				<td class="next">	<input type="datetime" name="date1" id="date1" value="yyyy-mm-dd hh:mm:ss"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">				Буух он сар өдөр цаг минут										</td>				
				<td class="next">	<input type="datetime" name="date2" id="date2" value="yyyy-mm-dd hh:mm:ss"/>	</td>
			</tr>			
						
			<tr>
				<td class="prev">			
					<a href="javascript: refreshCaptcha();" title="дарвал солигдно">
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" title="">
					</a>	
				</td>				
				<td class="next">	<input type="text" class="btn" name="6_letters_code" id="6lettercode"> 		</td>
			</tr>
			
			<tr>
				<td class="prev">				Дээрх кодыг оруул								</td>				
				<td class="next"><input type="submit" name="submit" value="Бүртгэх" id="submit"></td>
			</tr>	
			
		</table>
		</form>
	</body>
=======
﻿<?php

?><html>
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
				document.getElementById('date1').disabled = false;
				document.getElementById('date2').disabled = false;
				document.getElementById('airplane_id').disabled = false;
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('date1').disabled = true;
				document.getElementById('date2').disabled = true;
				document.getElementById('airplane_id').disabled = true;
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
		</script>
	</head>

	<body onload="chck()">
		<form action="flight_edit.php" method="POST" name="myForm">
			<table>		
			<tr>			
				<td class="prev">
					Өөрчлөх нислэг :
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
						    $sql="select* from flight";
							$result=mysql_query($sql);
							while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['flight_id'].'">  '.$row['flight_direction'].'-'.$row['flight_ourposition'].'-'.$row['flight_id'].' </option> ';	
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
				Нислэгийн Мэдээллийг өөрчлөх
			</th>		
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
				?>
			<tr>
				<td class="prev"> 			Онгоцны нэр :				</td>				
				<td class="next">	
				<?php
					echo '
					<select name="airplane_id" id="airplane_id">
						<option> Сонго ... </option>';						
							$sql="select* from airplane";
							$result=mysql_query($sql);
							while( $row = mysql_fetch_assoc($result) )
							{ 
								echo '<option value="'.$row['airplane_id'].'">  '.$row['airplane_name'].' </option> ';	
							}
					echo ' </select> ';
					?>				
				</td>
			</tr>
			
			<tr>
				<td class="prev">				Нисэх он сар өдөр цаг минут: 									</td>				
				<td class="next">	<input type="datetime" name="date1" id="date1" value="yyyy-mm-dd hh:mm:ss"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">				Буух он сар өдөр цаг минут										</td>				
				<td class="next">	<input type="datetime" name="date2" id="date2" value="yyyy-mm-dd hh:mm:ss"/>	</td>
			</tr>			
						
			<tr>
				<td class="prev">			
					<a href="javascript: refreshCaptcha();" title="дарвал солигдно">
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" title="">
					</a>	
				</td>				
				<td class="next">	<input type="text" class="btn" name="6_letters_code" id="6lettercode"> 		</td>
			</tr>
			
			<tr>
				<td class="prev">				Дээрх кодыг оруул								</td>				
				<td class="next"><input type="submit" name="submit" value="Бүртгэх" id="submit"></td>
			</tr>	
			
		</table>
		</form>
	</body>
>>>>>>> 7b765e7714afd1d6fec5d2e185b7da633ffa0219
</html>