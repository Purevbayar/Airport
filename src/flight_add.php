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
		$sql="select* from airplane";
		$result=mysql_query($sql);
			while( $row = mysql_fetch_assoc($result) )
			{ 
				if( $row['airplane_id'] == $_POST['airplane_id'] )
				{			
			        mysql_query("INSERT INTO flight (
					flight_date_niseh,
					flight_date_buuh,
					flight_direction,
					flight_ourposition,
					flight_airplane_name) 				
			        VALUES ('".$_POST['date1']."', 
					'".$_POST['date2']."',
					'".$row['airplane_direct']."',
					'".$row['airplane_position']."',
					'".$row['airplane_name']."' )" )
					or die("end problem");
					echo ' Шинэ нислэг нэмэгдлээ ';					
					}
			}
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
		<form method="POST" action="flight_add.php">
		  <table>
			<th colspan="2">				Нислэг нэмэх					</th>
			   <tr>
				<td class="prev"> 			Онгоцны нэр :				</td>				
				<td class="next">	
				<?php
					echo '
					<select name="airplane_id">
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
				<td class="next">	<input type="text" class="btn" name="6_letters_code"> 		</td>
			</tr>
			
			<tr>
				<td class="prev">				Дээрх кодыг оруул								</td>				
				<td class="next"><input type="submit" name="submit" value="Бүртгэх" id="submit"></td>
			</tr>
		</table>
		</form>
	</body>
</html>