<?php		
echo '
<html>
	<head>		<link href="style/info.css" rel="stylesheet" type="text/css" />	</head>	
	<body> 
		<form method="POST" action="staff_check.php?type='.$_GET['type'].'">	
			<table>
				<th>';					
					if ( $_GET['type'] == "1")
					echo 'Админы';
					else
					echo 'Ажилчны';
				echo '
					нэвтрэх хэсэг
				</th>				
				<tr>
					<td class="prev">		Нэвтрэх нэр :			</td>
					<td class="next">		<input type="text" name="name"/>			</td>
				</tr>				
				<tr>
					<td class="prev">		Нууц үг				</td>
					<td class="next">		<input type="password" name="password"/>	</td>
				</tr>				
				<tr>
					<td class="prev">		<a href="#" >ForGot </a>			</td>
					<td class="next">		<input type="submit" name="submit" value="Нэвтрэх">		</td>
				</tr>				
			</table>
		</form>
	</body>
</html>';