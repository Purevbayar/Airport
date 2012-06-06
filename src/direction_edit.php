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
				document.getElementById('name').disabled = false;
				document.getElementById('type').disabled = false;
				document.getElementById('6lettercode').disabled = false;
				document.getElementById('submit').disabled = false;
				}
				else 
				{  
				document.getElementById('name').disabled = true;
				document.getElementById('type').disabled = true;
				document.getElementById('6lettercode').disabled = true;
				document.getElementById('submit').disabled = true;
				}
			}
			
		</script>
	</head>

	<body onLoad="chck()">
		<form action="admin_check.php?w=3&p=2" method="POST" name="myForm">
		<table>
		
			<tr>
				<td class="prev">
					Өөрчлөх Чиглэл :
				</td>
				
				<td class="next">
					<?php
					include ("connect.php");
						
						echo '
						<select name="id">
						<option> Choose ... </option>';						
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
					Би өөрчлөлтийг зөвшөөрч байна
				</td>
				
				<td class="next">
					<input type="checkbox" name="accept" onClick="chck()" title="click" >
				</td>
			</tr>
		
		
			<th colspan="2">
				Нисэх чиглэл өөрчлөх
			</th>
			
			<tr>
				<td class="prev"> 				Нисэх чиглэл :				</td>				
				<td class="next">	<input type="text" name="name" id="name"/>	</td>
			</tr>
						
			<tr>
				<td class="prev">				Буцах чиглэл :			</td>				
				<td class="next">	
					<select name="type" id="type">
						<option value="1" >Тийм</option>
						<option value="0" >Үгүй</option>
					</select>
				</td>
			</tr>
						
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
					<input type="submit" name="submit" value="Өөрчлөх" id="submit">
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>