<<<<<<< HEAD
﻿<?php
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
		$boo = 0;	
	
		mysql_query("INSERT INTO ticket (
					ticket_firstname,
					ticket_lastname,
					fid,
					register	) 				
			VALUES ('".$_POST['firstname']."', 
					'".$_POST['lastname']."',
					'".$_POST['fid']."',
					'".$_POST['register']."' )" )		
					or die("end problem");
					echo ' Билет захиалга амжилттай боллоо ';
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
		</script>
	</head>		
	<body>
		<form method="POST" action="ticket_add.php">
		<table>
			<th colspan="2">				Билет захиалга					</th>
			
			<tr>
				<td class="prev"> 			Аялагчийн овог :				</td>				
				<td class="next">	<input type="text" name="firstname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">				Аялагчийн нэр : 			</td>				
				<td class="next">	<input type="text" name="lastname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">		Аялагчийн Регистерийн дугаар 		</td>				
				<td class="next">	<input type="text" name="register"/>	</td>
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
				<td class="next">	<input type="text" class="btn" name="6_letters_code"> 		</td>
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
		$boo = 0;	
	
		mysql_query("INSERT INTO ticket (
					ticket_firstname,
					ticket_lastname,
					fid,
					register	) 				
			VALUES ('".$_POST['firstname']."', 
					'".$_POST['lastname']."',
					'".$_POST['fid']."',
					'".$_POST['register']."' )" )		
					or die("end problem");
					echo ' Билет захиалга амжилттай боллоо ';
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
		</script>
	</head>		
	<body>
		<form method="POST" action="ticket_add.php">
		<table>
			<th colspan="2">				Билет захиалга					</th>
			
			<tr>
				<td class="prev"> 			Аялагчийн овог :				</td>				
				<td class="next">	<input type="text" name="firstname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">				Аялагчийн нэр : 			</td>				
				<td class="next">	<input type="text" name="lastname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">		Аялагчийн Регистерийн дугаар 		</td>				
				<td class="next">	<input type="text" name="register"/>	</td>
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
				<td class="next">	<input type="text" class="btn" name="6_letters_code"> 		</td>
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