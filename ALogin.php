<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin login</title>
<!--<link href="css/ALoginCss.css" rel="stylesheet" type="text/css">-->
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
<div class="FormWrap" style="display:table; margin:auto; margin-top:100px;">
        <div class="FormHeader">
          <h1>Administrator Login</h1></div>
        <div class="FormData" style="width:400px;">
            <div class="FormText">Please enter Admin email and password.</div>
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