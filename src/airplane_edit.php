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
				document.getElementById('name').disabled = false;
				document.getElementById('volume').disabled = false;
				document.getElementById('direct').disabled = false;
				document.getElementById('position').disabled = false;
				document.getElementById('status').disabled = false;
				document.getElementById('ticket_price').disabled = false;
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('name').disabled = true;
				document.getElementById('volume').disabled = true;
				document.getElementById('direct').disabled = true;
				document.getElementById('position').disabled = true;
				document.getElementById('status').disabled = true;
				document.getElementById('ticket_price').disabled = true;
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
		</script>
	</head>

	<body onLoad="chck()">
		<form action="admin_check.php?w=2&p=2" method="POST" name="myForm">
			<table>		
			<tr>			
				<td class="prev">
					Өөрчлөх онгоц :
				</td>			
				
				<td class="next">
					<?php
					include ("connect.php");
						
						echo '
						<select name="id">
							<option> Choose ... </option>';						
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
				<td class="prev">					
					Би өөрчлөлтийг зөвшөөрч байна
				</td>
				
				<td class="next">
					<input type="checkbox" name="accept" onClick="chck()" title="click" >
				</td>
			</tr>
			
			<th colspan="2">
				Онгоцны Мэдээллийг өөрчлөх
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
				<td class="prev"> 				Онгоцны нэр :				</td>				
				<td class="next">	<input type="text" name="name" id="name"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Суудлын тоо : 			</td>				
				<td class="next">	<input type="text" name="volume" id="volume" />	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нисэх чиглэл :			</td>				
				<td class="next">				
				<?php
				echo '
				<select name="direct" id="direct">
					<option> Choose ... </option>';						
						$sql="select* from directions";
						$result=mysql_query($sql);
						while( $row = mysql_fetch_assoc($result) )
						{ 
							echo '<option value="'.$row['direct_name'].'">  '.$row['direct_name'].' </option> ';	
						}
				echo ' </select> ';
				?>				
				</td>
			</tr>
			
			<tr>
				<td class="prev">				Одоогийн байрлал :			</td>				
				<td class="next">				
				<?php
				echo '
				<select name="position" id="position">
					<option> Choose ... </option>';						
						$sql="select* from directions";
						$result=mysql_query($sql);
						while( $row = mysql_fetch_assoc($result) )
						{ 
							echo '<option value="'.$row['direct_name'].'">  '.$row['direct_name'].' </option> ';	
						}
				echo ' </select> ';
				?>				
				</td>
			</tr>
			
			<tr>
				<td class="prev">					Онгоцны төлөв :			</td>				
				<td class="next">	
					<select name="status" id="status">
						<option>  Агуулах</option>
						<option>  Засвар </option>
						<option>  Буусан </option>
						<option>  Агаарт </option>
					</select>
				</td>
			</tr>		
			
			<tr>
				<td class="prev">				Тасалбарын үнэ :			</td>				
				<td class="next">	<input type="text" name="ticket_price" id="ticket_price">
				</td>
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
</html>