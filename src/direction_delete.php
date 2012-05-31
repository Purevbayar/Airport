<html>
	<head>		
		<link href="style/info.css" rel="stylesheet" type="text/css" />
		<script language="JavaScript" src="js/en_validatorv31.js" type="text/javascript"></script>
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
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
			
		</script>
	</head>

<body onload="chck()">
  <form action="admin_check.php?w=3&p=3" method="POST" name="myForm">
	<table>
		    <tr>
				<td class="prev">
					Хасах Чиглэл :
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
							<option> Сонго ... </option>';						
								$sql="select* from directions";
								$result=mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['direct_id'].'">  '.$row['direct_name'].' </option> ';	
								}
						echo ' </select> ';						
					?>
				 </td>
			</tr>
			
			<tr>
				<td class="prev">					
					Би устгалыг зөвшөөрч байна
				</td>
				
				<td class="next">
					<input type="checkbox" name="accept" onclick="chck()" title="click" >
				</td>
			</tr>
		
		
			<th colspan="2">
				Нисэх чиглэл Устгах
			</th>
	
			<tr>
				<td class="prev">			
					<a href="javascript: refreshCaptcha();" title="дарвал солигдно">
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" title="">
					</a>	
				</td>				
				<td class="next">	<input type="text" class="btn" name="6_letters_code" id="6lettercode"> </td>
			</tr>
			
			<tr>
				<td class="prev">
					Дээрх кодыг оруул
				</td>
				
				<td class="next">
					<input type="submit" name="submit" value="Устгах" id="submit">
				</td>
			</tr>
			
	  </table>
	</form>
 </body>
</html>