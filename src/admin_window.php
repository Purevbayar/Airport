<html>
	<head>
		<title>
			Admin window
		</title>		
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<style type="text/css">	
	body
	{	background: #6595A3;
		padding: 0 20px;	}
	
	#left
	{	width: 80%;
		min-width: 650px;
		margin: 20px auto auto auto;
		
		padding: 20px 35px;
		border-bottom:30px solid #FFCC00}
		
	#right
	{	width: 80%;
		min-width: 650px;
		height:450px;
		margin: auto auto 0 auto;
		background: #FCFFED;
		padding: 20px 35px;}	
		
	iframe 
	{	border:1px solid;
		width:100%;
		height:100%;}
	
	a
	{	color: #324143;
		text-decoration:none;}

	a:hover
	{	color: #7B8D3B;
		text-decoration:underline;}

	#copyright table
	{	width: 80%;
		min-width: 650px;
		margin: 0 auto;
		padding: 20px 35px;
		background: #B6C28B;
		font: 11px tahoma;
		color: #324143
		border:none;
		border-top: 10px solid orange;}

	#copyright a:hover
	{	color: #171F26;}
	
	#jsddm
	{	margin: 0;
		padding: 0;}
		
	#jsddm li
	{	float: left;
		list-style: none;
		font: 12px Tahoma; 
		width:25%;}

	#jsddm li a
	{	display: block;
		background: #324143;
		padding: 10px 5px;
		text-decoration: none;
		border-right: 0px none;
		width: 70px;
		color: #EAFFED;
		white-space: nowrap;
		width:100%;}
		
	#jsddm li ul
	{	margin: 0;
		padding: 0;
		position: absolute;
		visibility: hidden;
		width:21%;}
	
	#jsddm li ul li
	{	float: none;
		display: inline;}
			
	#jsddm li ul li a
	{	width: auto;
		background: #A9C251;
		color: #24313C; }
			
	#jsddm li ul li a:hover
	{	background: #8EA344; 
		opacity:0.6;}
	</style>	
	
	<script type="text/javascript">
		var timeout         = 500;
		var closetimer		= 0;
		var ddmenuitem      = 0;

		function jsddm_open()
		{	jsddm_canceltimer();
			jsddm_close();
			ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');	}

		function jsddm_close()
		{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

		function jsddm_timer()
		{	closetimer = window.setTimeout(jsddm_close, timeout);}

		function jsddm_canceltimer()
		{	if(closetimer)
		{	window.clearTimeout(closetimer);
			closetimer = null;}}

		$(document).ready(function()
		{	$('#jsddm > li').bind('mouseover', jsddm_open);
			$('#jsddm > li').bind('mouseout',  jsddm_timer);});
		document.onclick = jsddm_close;
	</script>
	</head>

	<body>
		<h3>
			<?php
			if ( empty($_GET['name'])) echo ' Admin ';
				else
				echo '	
				Welcome Employeer '.$_GET['name'].' GooD JOBS !!! ';
				echo '
				
		</h3>
		<div id="left">
			<ul id="jsddm">				
				<li> <a href="#"> Admin </a>
					<ul>
						<li>  <a href="staff_add.php" target="rightFrame"> Add user  </a> </li>
						<li>  <a href="staff_edit.php" target="rightFrame"> Impormation edit    </a> </li>
						<li>  <a href="staff_delete.php" target="rightFrame"> disemploy   </a> </li>
						<li>  <a href="staff_view.php" target="rightFrame">Staff view </a> </li>
					</ul>
				</li>
								
				<li> <a href="#"> Airplane </a>
					<ul>
						<li>  <a href="airplane_add.php" target="rightFrame"> Add   </a> </li>
						<li>  <a href="airplane_edit.php" target="rightFrame"> Edit  </a> </li>
						<li>  <a href="airplane_delete.php" target="rightFrame"> Delete </a> </li>
						<li>  <a href="airplane_view.php" target="rightFrame"> Airplane view </a> </li>
					</ul>
				</li>
					
				<li> <a href="#"> Direction </a>
					<ul>
						<li>  <a href="direction_add.php" target="rightFrame"> Direction add  </a> </li>
						<li>  <a href="direction_edit.php" target="rightFrame"> Direction edit  </a> </li>
						<li>  <a href="direction_delete.php" target="rightFrame"> Direction edit </a> </li>
						<li>  <a href="direction_view.php" target="rightFrame"> Direction view </a> </li>
					</ul>
				</li>
					
				<li>	<a href="#"> Other </a>
					<ul>
						<li>  <a href="owner_edit.php" target="rightFrame"> Own info edit </a> </li>
						<li>  <a href="owner_view.php" target="rightFrame"> Own info view</a> </li>
					</ul>
				</li>
			</ul>
		</div>			
		
		<div id="right">
			<iframe src="staff_add.php"name="rightFrame">				
			</iframe>
		</div>		
		
		<div id="copyright">
		<table>
			<tr>
				<td>	&copy;  			</td>
				<td>	<a href="index.php" title="Go To Home Page">Logout			</td>
			</tr>
		</table>	
		</div>
	</body>
</html> ';
?>