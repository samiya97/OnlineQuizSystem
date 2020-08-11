<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>php quiz</title>
<link href="css/ModelCss.css" rel="stylesheet" type="text/css">
<style type="text/css">
h1{line-height:300%; text-align:center;}
label{line-height:200%;}
h3{line-height:150%;}
h4{color:black;}
</style>
</head>
<body>
	
			
	<div id="container">
	    	<div class="header">
    			<span class="heading"><span class="C">O</span>NLINE <span class="C">Q</span>UIZ <span class="C">S</span>YSTEM </span>
		<div class="logo"><img src="img/flogo.png" width="188" height="150" alt="logo"></div>
    	
		</div>
	    	<div class="center">
				
			 <nav>
				<ul>
                <img src="img/user.jpg" width="50" height="45" alt="user" style="border:1px solid #000;border-radius:50px;float:left;margin-top:2px;"/>
				<li style="margin-right:100px; height:50px;width:auto"><a href="home.php">Username</a></li>
				<li><a href="Shome.php">Home</a></li>
				<li><a href="results.php">Results</a></li>
				<li><a href="welcome.php">Sign Out</a></li>
				</ul>
			</nav>
			<div id="page-wrap">
			<h1>PHP Quiz </h1>
			<form action="results.php" id="quiz">
			
				<ol>
				<li>
				<h3> What does PHP stand for?</h3>
				<div>
				<input type="radio" name="question-1-answer" id="question-1-answer-A" value="A"/>
				<label for="question-1-answer-A">a) PHP: Hypertext Preprocessor</label> 
				</div>
				<div>
				<input type="radio" name="question-1-answer" id="question-1-answer-B" value="B"/>
				<label for="question-1-answer-B">b) Personal Hypertext Processor</label> 
				</div>
				<div>
				<input type="radio" name="question-1-answer" id="question-1-answer-C" value="C"/>
				<label for="question-1-answer-C">c) Personal Home Page</label> 
				</div>
				<div>
				<input type="radio" name="question-1-answer" id="question-1-answer-D" value="D"/>
				<label for="question-1-answer-D">d) Both a and c</label> 
				</div>
				</li>
				<li>
				<h3>PHP server scripts are surrounded by delimiters, which?</h3>
				<div>
				<input type="radio" name="question-2-answer" id="question-2-answer-A" value="A"/>
				<label for="question-2-answer-A">a) <&>...</&></label> 
				</div>
				<div>
				<input type="radio" name="question-2-answer" id="question-2-answer-B" value="B"/>
				<label for="question-2-answer-B">b) < ?php...? >label> 
				</div>
				<div>
				<input type="radio" name="question-2-answer" id="question-2-answer-C" value="C"/>
				<label for="question-2-answer-C">c) < ?php>...</? ></label> 
				</div>
				<div>
				<input type="radio" name="question-2-answer" id="question-2-answer-D" value="D"/>
				<label for="question-2-answer-D">d) < script>...</ script ></label> 
				</div>
				</li>
				<li>
				<h3> How do you write "Hello World" in PHP</h3>
				<div>
				<input type="radio" name="question-3-answer" id="question-2-answer-A" value="A"/>
				<label for="question-3-answer-A">a) "Hello World"; </label> 
				</div>
				<div>
				<input type="radio" name="question-3-answer" id="question-3-answer-B" value="B"/>
				<label for="question-3-answer-B">b) Document.Write("Hello World");</label> 
				</div>
				<div>
				<input type="radio" name="question-3-answer" id="question-3-answer-C" value="C"/>
				<label for="question-3-answer-C">c) echo "Hello World";</label> 
				</div>
				<div>
				<input type="radio" name="question-3-answer" id="question-3-answer-D" value="D"/>
				<label for="question-3-answer-D">d) printf("Hello World");</label> 
				</div>
				</li>
				</ol>
				</form>
			</div>
			<a href="php_quiz1.php"><h4><center>next page</center></h4></a>
			</div>
			
   <div class="footer">
            <footer>

<address>&copy; Copyright 2017 ($ SJJZ $) All Rights Reserved </address>
</footer> </div>
      
    
    
    
    
	</div>
</body>
</html>