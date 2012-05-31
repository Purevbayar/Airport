<html>
	<head>		
		<link href="style/info.css" rel="stylesheet" type="text/css" />
		<script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
		<script>
			function chck(value)
			{
				var map = new Array(2);
				map[0]="";
				map[1]="";
				var i = parseInt(0);
				var k = parseInt(0);
								
				while( k < 2)
				{						
					if( value[i] == "$" ) k++;
					else map[k] += value[i];
					i++;
				}
				
				document.getElementById('name').value = map[0];
				if ( map[1] == "1" )
				document.getElementById('type').value = "2 талдаа";
				else
				document.getElementById('type').value = "1 талдаа";
			}		
		</script>
	</head>

	<body>		
		<table>
			<tr>
				<td class="prev">
					Чиглэл :
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
						<select onchange="chck(this.value)">
							<option> Сонго ... </option>';						
								$sql="select* from directions";
								$result=mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['direct_name'].'$'.$row['direct_type'].'$ ">  '.$row['direct_name'].' </option> ';	
								}
						echo ' </select> ';						
					?>
				</td>
			</tr>
		
		
			<th colspan="2">
				Нисэх чиглэл харах
			</th>
			
			<tr>
				<td class="prev"> 				Нисэх чиглэл :				</td>				
				<td class="next">	<input type="text" id="name"/>	</td>
			</tr>
						
			<tr>
				<td class="prev">				Буцах чиглэл :			</td>				
				<td class="next">	<input type="text" id="type"/>		</td>
			</tr>					
		</table>		
	</body>
</html>