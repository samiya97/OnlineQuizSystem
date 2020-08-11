<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>
<link href="css/AHomeCss.css" rel="stylesheet" type="text/css">
<link href="css/AModelCss.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
	include('connect.php');
	$sql="Select * from admin";
	$record=mysqli_query($con,$sql);
	$result=mysqli_fetch_assoc($record);
	?>
	<div id="container">
	    	<div class="header">
    			<span class="heading"><span class="C">O</span>NLINE <span class="C">Q</span>UIZ <span class="C">S</span>YSTEM </span>
	<div class="logo"><span class="center"><img src="img/flogo.png" width="188" height="150" alt="logo"></span></div>
		</div>
	    	<div class="center">
			 <nav >
				<ul>
                <img src="img/user.jpg" width="50" height="45" alt="user" style="border:1px solid #000;border-radius:50px;float:left;margin-top:2px;"/>
				<li style="margin-right:100px; height:50px;width:auto"><a href="AdminAcc.php">
                <?php
				echo "".$result['adminName']."";
				?>
               </a></li>
				<li><a  class="active" href="AHome.php">Home</a></li>
				<li><a href="editAdminAcc.php">Edit Account</a></li>
				<li><a href="welcome.php">Sign Out</a></li>
				</ul>
			</nav>
			<div class="controls">
				<span class="temp">Hover to View More</span>
				<ul>	
					<li><a href="viewStudents.php">Students</a>
					<div class="info">
					View information about students<br/>Their emails<br/>Their scores<br/>	
					</div>
					</li>
					<li><a href=#>Records</a>
					<div style="margin-top:-175px;" class="info">
					View recent records<br/>View current records<br/>Edit/ Delete records
					</div>
					</li>
					<li><a href=#>Add Quiz</a>
					<div style="margin-top:-270px;" class="info">
					Add/ Remove questions<br/> Edit questions <br/> Edit difficulty
					</div>
					</li>
				</ul>
			</div>
		</div>
	    	<div class="footer">
            <footer>

<address>&copy; Copyright 2017 ($ SJJZ $) All Rights Reserved </address>
</footer> </div>
    
    
    
    
    
    
	</div>
</body>
</html>