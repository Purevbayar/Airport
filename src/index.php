<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link rel="stylesheet" type="text/css" href="style/index.css" />
		<link rel="stylesheet" href="style/lavalamp_test.css" type="text/css" media="screen">
		<script type="text/javascript" src="js/jquery-1.1.3.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
	    <script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
		<link href="css/menucss.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
     function slideSwitch() 
	 {
        var $active = $('#slideshow IMG.active');
		if ( $active.length == 0 ) $active = $('#slideshow IMG:last');
			var $next =  $active.next().length ? $active.next()
			: $('#slideshow IMG:first');
			$active.addClass('last-active');
			$next.css({opacity: 0.0})
			.addClass('active')
			.animate({opacity: 1.0}, 1000, 
			function() 
				{
					$active.removeClass('active last-active');
				});
     }                        
$(function() {
    setInterval( "slideSwitch()", 5000 );
});		
</script>
		<script type="text/javascript">
			$(function() 
				{	$("#1, #2, #3").lavaLamp({				
				fx: "backout", 
				speed: 700	});});
		</script>	
		<title>
			Airport
		</title>
</head>
		
	<body>

<!-----CONTAINER-------------------------------------------------------->
		<div id = "container">		
		
			<!-----HEADER------------------------------------------------------->
			<div id = "header">
			
				<!-----HEADER_LEFT---------------------------------------------->
				<div id = "header_left">
					<div id="slideshow">
						<img src="style/image/1.jpg" alt="Slideshow Image 2" class="active"/>    
						<img src="style/image/2.jpg" alt="Slideshow Image 2" />
						<img src="style/image/3.jpg" alt="Slideshow Image 3" />
					</div>   
				</div>
			
				<!-----HEADER_RIGHT--------------------------------------------->
				<div id = "header_right">					
					<marquee onMouseOut="this.start()" direction="down" align="left" loop="true" onMouseOver="this.stop()" scrollamount="3" >


				<?php
			         include ("connect.php");	
							$sql="select* from airplane";
							$result=mysql_query($sql);
							while( $row = mysql_fetch_assoc($result) )
								{
								   if($row['airplane_status']=="Land on" || $row['airplane_status']=="airborne")
									{
										echo ' '.$row['airplane_name'].' &nbsp &nbsp'.$row['airplane_direct'].' &nbsp &nbsp'.$row['airplane_position'].' ( '.$row['airplane_status'].' )</br> </br>';
									}
								}
					?>

						</marquee>
				</div>
				
			</div>
			
			<!-----Navigation--------------------------------------------------->
		<div id="content">
			<nav>
				<ul id="appleNav">
					<li><a href="index.php" title="Home page">Home</a></li>
					<li><a href="booking.php" target="mainWindow" title="Booking">Booking</a></li>
					<li><a href="flight_info.php" title="fight info">Flight info</a></li>
					<li><a href="rewards_discounts.php" title="Rewards and discounts">Discounts</a></li>
					<li><a href="programs_services.php" title="Programs and services">Services</a></li>
					<li><a href="about.php" title="About us">About us</a></li>
				</ul>
			</nav>
		</div>
			
		
			<!-----MAIN--------------------------------------------------------->
			<div id = "main">
				<!-----MAIN_LEFT------------------------------------------------>
				<div id = "main_left">	
					<iframe src="ticket_search.php">
					</iframe>
				</div>
				
				<!-----MAIN_MIDDLE---------------------------------------------->
				<div id = "main_middle">
	                     <iframe src="homenews.php">
						 </iframe>
				</div>
				
				<!-----MAIN_RIGHT------------------------------------------------>
				<div id = "main_right">
				
					<!-----MAIN_TOP---------------------------------------------->
					<div id = "main_top">
					       <iframe src="log.html"> </iframe>
					</div>
					
					<!-----MAIN_BOTTOM------------------------------------------->
					<div id = "main_bottom">
					
					</div>
				</div>
				
			</div>
			
			<!-----Footer------------------------------------------------------->
			<div id = "footer">
				<ul class="footermenu" >
					<li class="wordli"> <a href="#"><b> ABOUT US </b>      </a> </li>
					<li > <a href=""> |        </a> </li>
					<li class="wordli"> <a href="#"> <b>CONDITIONS OF CARRIAGE</b></a> </li>
					<li> <a href=""> |        </a> </li>
					<li class="wordli"> <a href="#"> <b>SITEMAP</b>      </a> </li>
					<li> <a href=""> |        </a> </li>
					<li class="wordli"> <a href="#"> <b>CONTACT US</b>  </a> </li>
					<li> <a href=""> |        </a> </li>
					<li class="wordli"> <a href="#"> <b>ADVERTISE WITH US</b>  </a> </li>
					<li> <a href=""> |        </a> </li>
					<li class="wordli"> <a href="#"> <b>Admin </b> </a> </li>
					<li> <a href=""> |        </a> </li>
					<li class="wordli"> <a href="#"><b> Staff</b></a> </li>
				</ul>	
				<br/><br/><br/><br/>
				<p> <b>@2012 IT Purevbayar, Amarjargal, Uuriintuya</b><p>
				
			</div>
		
		</div>
	
	</body>
</html>