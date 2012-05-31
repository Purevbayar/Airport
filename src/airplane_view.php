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
				map[4]="";
				map[5]="";
				var i = parseInt(0);
				var k = parseInt(0);
								
				while( k < 6)
				{						
					if( value[i] == "$" ) k++;
					else map[k] += value[i];
					i++;
				}
				
				document.getElementById('name').value = map[0];			
				document.getElementById('volume').value = map[1];
				document.getElementById('direct').value = map[2];
				document.getElementById('position').value = map[3];
				document.getElementById('status').value = map[4];
				document.getElementById('ticket_price').value = map[5];
			}
		</script>
	</head>

	<body onload="chck()">
		<table>		
			<tr>
				<td class="prev">
					Онгоц :
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
								$sql="select* from airplane";
								$result=mysql_query($sql);
								while( $row = mysql_fetch_assoc($result) )
								{ 
									echo '<option value="'.$row['airplane_name'].'$'.$row['airplane_volume'].'$'.$row['airplane_direct'].'$'.$row['airplane_position'].'$'.$row['airplane_status'].'$'.$row['airplane_ticket_price'].'$ ">  '.$row['airplane_name'].' </option> ';	
								}
						echo ' </select> ';						
					?>
				</td>
			</tr>		
			
			<th colspan="2">
				Онгоцны Мэдээллийг харах
			</th>	
			
			<tr>
				<td class="prev"> 				Онгоцны нэр :				</td>				
				<td class="next">	<input type="text" id="name"/>	</td>
			</tr>
			
			<tr>
				<td class="prev">					Суудлын тоо : 			</td>				
				<td class="next">	<input type="text" id="volume" />	</td>
			</tr>
			
			<tr>
				<td class="prev">					Нисэх чиглэл :			</td>				
				<td class="next">	<input type="text" id="direct"/>		</td>				
			</tr>
			
			<tr>
				<td class="prev">				Одоогийн байрлал :			</td>				
				<td class="next">	<input type="text" id="position">		</td>
			</tr>
			
			<tr>
				<td class="prev">					Онгоцны байдал :			</td>				
				<td class="next">	<input type="text" id="status">				</td>
			</tr>		
			
			<tr>
				<td class="prev">				Тасалбарын үнэ :			</td>				
				<td class="next">	<input type="text" id="ticket_price">	</td>
			</tr>
		</table>
	</body>
</html>