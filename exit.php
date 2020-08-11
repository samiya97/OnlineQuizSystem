<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/ModelCss.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/login.css" type="text/css"/>

</head>

<body>
<div id="container">
	    	<div class="header">
    			<span class="heading"><span class="C">O</span>NLINE <span class="C">Q</span>UIZ <span class="C">S</span>YSTEM </span>
			<div class="logo"><img src="img/flogo.png" width="188" height="150" alt="logo"></div>
		</div>
	    	<div class="center">
            <div style="color:red;font-size:20px;text-align:center;margin-top:20px;">
            <?php
session_start();
echo "Admin Password or Name is incorrect";
?>
</div>
<div class="FormWrap" style="display:table; margin:auto; margin-top:100px;">
        <div class="FormHeader">
          <h1>Administrator Login</h1></div>
        <div class="FormData" style="width:400px;">
            <div class="FormText" style="color:red;">Please enter correct Admin name and password.</div>
            <form class="form" action="login.php" method="get">
            <table border="0" style="margin-left:10px;">
            <tbody>
            <tr><td class="InpLbl">Username:</td>
            <td><input name="adminUname" type="text" id="adminUnname" placeholder="Username"  required style="width:260px;"/></td></tr>
            <tr><td class="InpLbl">Password:</td>
            <td><input name="adminPwd" type="password" id="adminPwd" placeholder="Password"  required style="width:260px;"/></td></tr>
            <tr><td>&nbsp;</td><td><button id="btnLogIn" class="btnEnb" type="submit">
            <font class="SiteIcons"></font><span>Log In</span></button>
            </td></tr>
            </tbody></table> 
            </form>   
        </div>
        
    </div>
    

<!--center end -->	 </div>
            
            
            
   <div class="footer">
       <footer>
<address>&copy; Copyright 2017 ($ SJJZ $) All Rights Reserved </address>
</footer> </div>
      
   <!--container end-->
	</div>

</body>
</html>