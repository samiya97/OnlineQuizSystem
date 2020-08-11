<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Student registeration</title>
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
<div id="regdiv">
<!--register div start-->
<div id="register">
<div class="FormWrap" style="display:table;">
        <div class="FormHeader"><h1> Student Registration</h1></div>
        <div class="FormData" style="width:420px;">
            <br><br>
          <form class="form" action="Slogin.php" method="get">
            <table border="0" >
            <tbody><tr><td class="InpLbl">Full Name:</td>
            <td> <input name="fullName" type="text" maxlength="60" id="fullName" required placeholder="Full Name"   style="width:260px;"></td></tr>
            <tr><td class="InpLbl">Batch:</td>
            <td><input name="batch" type="number" maxlength="60" id="batch" required placeholder="e.g 2016" style="width:260px;"></td></tr>
            <tr><td class="InpLbl">Roll No:</td>
            <td><input name="rollNo" type="number" maxlength="60" id="rollNo" required placeholder="e.g 097 " style="width:260px;"></td></tr>
            <tr><td class="InpLbl">Deptartment:</td>
            <td><input name="dept" type="text" maxlength="60" id="dept" required placeholder="e.g software" style="width:260px;"></td></tr>
            <tr><td class="InpLbl">Email:</td>
            <td><input name="email" type="email" maxlength="50" id="email" required placeholder="Email" style="width:260px;">
           <!-- <br><div class="HintRed">Please use a valid email address </div>--></td></tr>
            <tr><td class="InpLbl">Confirm Email:</td>
            <td><input name="confirmEmail" type="email" maxlength="50" id="confirmEmail" required placeholder="Confirm Email" style="width:260px;"></td></tr>
            <tr><td class="InpLbl">Password:</td>
            <td><input name="password" type="password" maxlength="60" id="password" required placeholder="password" style="width:260px;"></td></tr>
            <tr><td>&nbsp;</td>
            <td><br><button id="submit" class="btnEnb" type="submit">
            <font class="SiteIcons"></font><span>Sign Me Up</span></button></td></tr>
            
   
            </tbody></table>
             </form>
            <br>
            
        </div>
    </div>
<!--register div end-->  </div>
<div id="apart"></div>

<div id="login">
<div class="FormWrap" style="display:table;">
        <div class="FormHeader"><h1>Log In</h1></div>
        <div class="FormData" >
            <div class="FormText">Please enter your email and password.</div>
            <form class="form" action="Shome.php" method="get">
            <table border="0">
            <tbody>
            <tr><td class="InpLbl">Email:</td>
            <td><input name="" type="email" value="" maxlength="50" id="" required placeholder="Email" style="width:260px;"></td></tr>
            <tr><td class="InpLbl">Password:</td>
            <td><input name="" type="password" maxlength="20" id="" required placeholder="Password" style="width:260px;"></td></tr>
           
            <tr><td>&nbsp;</td>
            <td><button id="btnLogIn" class="btnEnb" type="submit"><font class="SiteIcons"></font><span>Log In</span></button>
            </td></tr>
            </tbody></table> 
            </form>
            
           
        </div>
        
    </div>
    
<!--login form div end-->  </div>
<!--register whole div end--> </div>
<!--center end -->	 </div>
            
            
            
            
   <div class="footer">
       <footer>
<address>&copy; Copyright 2017 ($ SJJZ $) All Rights Reserved </address>
</footer> </div>
      
   <!--container end-->
	</div>
</body>
</html>