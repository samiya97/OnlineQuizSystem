<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edit account</title>
<link href="css/AModelCss.css" rel="stylesheet" type="text/css">
<link href="css/editAdminAccCss.css" rel="stylesheet" type="text/css">
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
				<ul><img src="img/user.jpg" width="50" height="45" alt="user" style="border:1px solid #000;border-radius:50px;float:left;margin-top:2px;"/>
				<li style="margin-right:100px; height:50px;width:auto">
				<a href="AdminAcc.php">
				<?php
				echo "".$result['adminName']."";
				?>
				</a></li>
				<li><a href="AHome.php">Home</a></li>
				<li><a class="active" href="editAdminAcc.php">Edit Account</a></li>
				<li><a href="welcome.php">Sign Out</a></li>
				</ul>
			</nav>
		<form class="form" action="" method="get">
			<span class="H">Edit Name</span><br /><br/>
			<?php
			echo "".$result['adminName']."";
			?>
			<br />
			<input class= "inp" type="text" placeholder="New Name" name="" />
			<br />
			<input type="Submit" class="button" value="Save" />
		</form>	
		<form class="form2" action="" method="get">
			<span class="H">Edit Password</span><br />
			<input class="inp" type="password" placeholder="Current Password" name="" /><br />
			<input class="inp" type="password" placeholder="New Password" name="" /><br />
			<input class="inp" type="password" placeholder="Confirm Password" name="" /><br />
			<input style="margin-top:-5px;"type="Submit" class="button" value="Save" />
		</form>
		</div>
	    	<div class="footer">
            <footer>

<address>&copy; Copyright 2017 ($ SJJZ $) All Rights Reserved </address>
</footer> </div>
    
    
    
    
    
	</div>
</body>
</html>