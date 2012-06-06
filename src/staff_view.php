<html>
	<head>		
		<link href="style/info.css" rel="stylesheet" type="text/css" />
		<script>
			function chck(value)
			{
				var map = new Array(6);
				map[0]="";
				map[1]="";
				map[2]="";
				map[3]="";
				var i = parseInt(0);
				var k = parseInt(0);
								
				while( k < 4)
				{						
					if( value[i] == "$" ) k++;
					else map[k] += value[i];
					i++;
				}
				
				document.getElementById('firstname').value = map[0];			
				document.getElementById('lastname').value = map[1];
				document.getElementById('loginname').value = map[2];
				if( map[3] == "1" )
				document.getElementById('type').value = "Удирдагч";
				else
				document.getElementById('type').value = "Ажилтан";
			}
		</script>
	</head>

	<body>		
		<table>
		
			<tr>
				<td class="prev">
					Ажилтан :
				</td>
				
				<td class="next">
					<?php
					include ("connect.php");
						
						echo '
						<select onchange="chck(this.value)">
							<option> Сонго ... </option>';						
								$sql="select* from staff";
								$result=mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['staff_firstname'].'$'.$row['staff_lastname'].'$'.$row['staff_loginname'].'$'.$row['staff_type'].'$">  '.$row['staff_loginname'].' </option> ';	
								}
						echo ' </select> ';						
					?>
				</td>
			</tr>
		
			<th colspan="2">
				Системийн Ажилтан Харах
			</th>
			
			<tr>
				<td class="prev"> 				Ажилтны овог :				</td>				
				<td class="next">	<input type="text" id="firstname"/>	    </td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны нэр : 			</td>				
				<td class="next">	<input type="text" id="lastname"/>	    </td>
			</tr>
			
			<tr>
				<td class="prev">					Нэвтрэх нэр :			</td>				
				<td class="next">	<input type="text" id="loginname"/>	    </td>
			</tr>
			
			<tr>
				<td class="prev">					Ажилтны төрөл :			</td>				
				<td class="next">	<input type="text" id="type"/>	       </td>
			</tr>			
		</table>
	</body>
</html>