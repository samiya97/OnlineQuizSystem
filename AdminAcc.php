<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin Account</title>
<link href="css/AdminAccCss.css" rel="stylesheet" type="text/css">
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
			<nav>
				<ul>
                <img src="img/user.jpg" width="50" height="45" alt="user" style="border:1px solid #000;border-radius:50px;float:left;margin-top:2px;"/>
				<li style="margin-right:100px; height:50px;width:auto"><a class="active" href="">
                <?php
				echo "".$result['adminName']."";
				?>
                </a></li>
				<li><a href="AHome.php">Home</a></li>
				<li><a href="editAdminAcc.php">Edit Account</a></li>
				<li><a href="welcome.php">Sign Out</a></li>
				</ul>
			</nav>	
			<div class="info">
					<div class="photo"></div>
			<h1 class="name">
			<?php
			echo "".$result['adminName']."";
			?>
			<br/><br/>
			<?php
			echo "Username: ".$result['adminUname']."";
			?>
			<br/><br/>
			Created On 22-Apr-2017
			<br/><br/>
            <a href="editAdminAcc.php">Edit Account</a>
			</h1>
			</div>
		</div>
	     <div class="footer">
            <footer>

<address>&copy; Copyright 2017 ($ SJJZ $) All Rights Reserved </address>
</footer> </div>
    
    
     
    
    
    
	</div>
</body>
</html>