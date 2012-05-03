<?php

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="style/search.css" rel="stylesheet" type="text/css" />	


<link type="text/css" href="style/calendar/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="jquery/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript">
			$(function(){
				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});		
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);		
			});
			$(function(){
				// Datepicker
				$('#datepicker2').datepicker({
					inline: true
				});		
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);		
			});
</script>		
	</head>

	<table>
		<th colspan="3">
			Booking:
		</th>
			
		<tr>
			<td colspan="3">
				<input type="radio" name="dire">		
				Round Trip
			</td>
		</tr>
	
		<tr>
			<td colspan="3">
				<input type="radio" name="dire">
				One way
			</td>
		</tr>
			
		<tr>
			<td colspan="3">
				Flying From			
				<br/>
				<?php
				echo '
				<select name="comboBoxTHIS" class="fld">
					<option> Choose ...</option>';
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
							$sql="select* from directions";
							$result=mysql_query($sql);
							while( $row = mysql_fetch_assoc($result) )
							{ 
							echo '<option value="'.$row['direct_name'].'">  '.$row['direct_name'].' </option> ';	
							}
				echo '
				</select>		
				';
				?>			
			</td>
		</tr>
	
		<tr>
			<td colspan="3">
				Flying to
				<br/>
				<?php
				echo '
				<select name="comboBoxGO" class="fld">
					<option> Choose ... </option>';
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
							$sql="select* from directions";
							$result=mysql_query($sql);
							while( $row = mysql_fetch_assoc($result) )
							{ 
							echo '<option value="'.$row['direct_name'].'">  '.$row['direct_name'].' </option> ';	
							}
				echo '
				</select>		
				';
				?>			
			</td>
		</tr>
				
		<tr>
			<td colspan="3">					
				Depart:
				<br/>
				<input class="fld" type="textfield"  id="datepicker"  value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
			</td>
		</tr>
			
		<tr>
			<td colspan="3">
			Return:
				<br/>
				<input class="fld" type="textfield"  id="datepicker2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
			</td>
		</tr>

		<tr>
			<td>
				Adult
				<br/>
				<select>
					<option> 1 </option>
					<option> 2 </option>
					<option> 3 </option>
					<option> 4 </option>
					<option> 5</option>
					<option> 6 </option>
				</select>	
			</td>
			
			<td>
				Child
				<br/>
				<select>
					<option> ... </option>
					<option> 1 </option>
					<option> 2 </option>
					<option> 3 </option>
					<option> 4 </option>
					<option> 5</option>
					<option> 6 </option>
				</select>	
			</td>
			
			<td>
			    Infant
				<br/>
				<select>
					<option> ... </option>
					<option> 1 </option>
				    <option> 2 </option>
					<option> 3 </option>
				</select>	
			</td>
		</tr>
		
		<tr>		
			<td>
				Class
			</td>
			
			<td colspan="2">
				<select class="fld">
					<option> Economy </option>
					<option> Business </option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td colspan="3">
				<input type="button" class="fld1" value="Search">
			</td>
		</tr>
</html>