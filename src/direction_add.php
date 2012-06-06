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
		</script>
	</head>

	<body>
		<form action="admin_check.php?w=3&p=1" method="POST" name="newForm">
		<table>
			<th colspan="2">
				Нисэх чиглэл нэмэх
			</th>
			
			<tr>
				<td class="prev"> 				Нисэх чиглэл :				</td>				
				<td class="next">	<input type="text" name="name"/>	</td>
			</tr>
						
			<tr>
				<td class="prev">				Буцах чиглэл :			</td>				
				<td class="next">	
					<select name="type">
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
		</script>
	</head>

	<body>
		<form action="admin_check.php?w=3&p=1" method="POST" name="newForm">
		<table>
			<th colspan="2">
				Нисэх чиглэл нэмэх
			</th>
			
			<tr>
				<td class="prev"> 				Нисэх чиглэл :				</td>				
				<td class="next">	<input type="text" name="name"/>	</td>
			</tr>
						
			<tr>
				<td class="prev">				Буцах чиглэл :			</td>				
				<td class="next">	
					<select name="type">
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
>>>>>>> 7b765e7714afd1d6fec5d2e185b7da633ffa0219
</html>