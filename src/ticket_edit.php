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
	
	if ( isset ( $_POST['submit'] ) )
	{
		mysql_query("UPDATE ticket SET 
					ticket_firstname='".$_POST['firstname']."',
					ticket_lastname='".$_POST['lastname']."',
					fid='".$_POST['fid']."',
					register='".$_POST['register']."',
					WHERE ticket_id = '".$_POST['id']."' ")
					or die("end problem");
					echo ' Билетийн өөрчлөлт амжилттай боллоо ';
	}
?>

<html>
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
				document.getElementById('firstname').disabled = false;
				document.getElementById('lastname').disabled = false;
				document.getElementById('fid').disabled = false;
				document.getElementById('register').disabled = false;
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('firstname').disabled = true;
				document.getElementById('lastname').disabled = true;
				document.getElementById('fid').disabled = true;
				document.getElementById('register').disabled = true;
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
		</script>
	</head>		
	<body onload="chck()">
		<form method="POST" action="ticket_edit.php" name="myForm">
		<table>
			<tr>			
				<td class="prev">
					Өөрчлөх аялагч :
				</td>			
				
				<td class="next">
					<?php						
						echo '
						<select name="id">
							<option> Сонго ... </option>';						
								$sql="select* from ticket";
								$result=mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['ticket_id'].'">  '.$row['ticket_firstname'].'-'.$row['ticket_lastname'].' </option> ';	
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
			
			<th colspan="2">				Билет захиалга					</th>
			
			<tr>
				<td class="prev"> 			Аялагчийн овог :				</td>				
				<td class="next">	<input type="text" name="firstname" id="firstname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">				Аялагчийн нэр : 			</td>				
				<td class="next">	<input type="text" name="lastname" id="lastname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">		Аялагчийн Регистерийн дугаар 		</td>				
				<td class="next">	<input type="text" name="register" id="register"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">				Аялалын дугаар :			</td>				
				<td class="next">
					<?php
						echo '
							<select name="fid" id="fid">
								<option> Сонго ... </option>';						
									$sql="select* from flight";
									$result=mysql_query($sql);
										while( $row = mysql_fetch_assoc($result) )
										{ 
											echo '<option value="'.$row['flight_id'].'"> '.$row['flight_direction'].'-'.$row['flight_ourposition'].''.$row['flight_id'].'</option> ';	
										}
						echo ' </select> ';
					?>		
				</td>
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
</html>