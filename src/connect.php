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