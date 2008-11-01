<html>
<head>
    <title>Ажилтан</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"      media="all" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style/MenuMatic.css"  media="screen" charset="utf-8"/>
	<script type="text/javascript" >
		window.addEvent('domready', function() {			
			var myMenu = new MenuMatic({ orientation:'vertical' });			
		});		
	</script>	
	
	 <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
</head>

<body>
	<form method="POST" action="staff_check.php" name="userMainForm">
		<div id="container">
		
			<?php
				if ( empty($_GET['name'])) echo ' Staff ';
				else
				echo '	
				Welcome Employeer '.$_GET['name'].' GooD JOBS !!! ';
				echo '
			</br>
			<div id="left">
				<ul id="nav">
					<li><a href="#">Airplane</a>
					<ul><li><a href="airplane_status.php" target="rightFrame"> Airplane status</a></li>
						<li><a href="airplane_view.php" target="rightFrame"> Airplane view</a></li></ul></li>
				
					<li><a href="#">Ticket</a>
					<ul><li><a href="ticket_add.php" target="rightFrame">Ticket add</a></li>
						<li><a href="ticket_remove.php" target="rightFrame">Ticket remove</a></li>
						<li><a href="ticket_edit.php" target="rightFrame">Ticket edit</a></li>
						<li><a href="ticket_view.php" target="rightFrame">Ticket view</a></li></ul></li>
				
					<li><a href="#">Flight</a>
					<ul><li><a href="flight_add.php" target="rightFrame">Flight edit</a></li>
						<li><a href="flight_remove.php" target="rightFrame">Flight delete</a></li>
						<li><a href="flight_edit.php" target="rightFrame">Flight edit</a></li>
						<li><a href="flight_view.php" target="rightFrame">Flight view</a></li></ul></li>
				
					<li><a href="#">Other</a>
					  <ul>
					    <li><a href="staff_edit.php" target="rightFrame">Staff edit</a></li>
						<li><a href="staff_view.php" target="rightFrame">Staff view</a></li>
					  </ul>
					</li>				
				 </ul>
			</div>
	
			<div id="right">
				<iframe src="" name="rightFrame">
				<iframe>				
			</div>			
		</div>
	</form>	
</body>
</html>';?>