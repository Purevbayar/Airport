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
		<form action="admin_check.php?w=2&p=1" method="POST" name="newForm">
		<table>
			<th colspan="2">
				Шинэ онгоц бүртгэх хэсэг
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
				<td class="prev"> 				Онгоцны нэр :			</td>				
				<td class="next">	<input type="text" name="name"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Суудлын тоо : 			</td>				
				<td class="next">	<input type="text" name="volume"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нисэх чиглэл :			</td>				
				<td class="next">				
				<?php
				echo '
				<select name="direct">
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
				<select name="position">
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
				<td class="prev">					Онгоцны байдал :			</td>				
				<td class="next">	
					<select name="status">
						<option>  Агуулах</option>
						<option>  Засвар </option>
						<option>  Буусан </option>
						<option>  Агаарт </option>
					</select>
				</td>
			</tr>		
			
			<tr>
				<td class="prev">				Тасалбарын үнэ :			</td>				
				<td class="next">	<input type="text" name="ticket_price">
				</td>
			</tr>
						
			<tr>
				<td class="prev">			
					<a href="javascript: refreshCaptcha();" title="дарвал солигдно">
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" title="">
					</a>	
				</td>				
				<td class="next">	<input type="text" class="btn" name="6_letters_code"> </td>
			</tr>
			
			<tr>
				<td class="prev">
					Дээрх кодыг оруул
				</td>				
				<td class="next">
					<input type="submit" name="submit" value="Бүртгэх" id="submit">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>