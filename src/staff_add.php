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
		<form action="admin_check.php?w=1&p=1" method="POST" name="newForm">
		<table>
			<th colspan="2">
				Системийн Ажилтан Бүртгэх хэсэг
			</th>
			
			<tr>
				<td class="prev"> 				Ажилтны овог :				</td>				
				<td class="next">	<input type="text" name="firstname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны нэр : 			</td>				
				<td class="next">	<input type="text" name="lastname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нэвтрэх нэр :			</td>				
				<td class="next">	<input type="text" name="loginname"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны төрөл :			</td>				
				<td class="next">	
					<select name="type">
						<option value="1" >Admin</option>
						<option value="0" >Staff</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td class="prev">					Нууц үг :				</td>				
				<td class="next">	<input type="password" name="password"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нууц үг давт :			</td>				
				<td class="next">	<input type="password" name="repassword"/>	</td>
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