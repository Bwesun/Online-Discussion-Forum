<?php
include('../head.html');
?>

<html>
<head>
<title>Login Unsuccessful</title>
<style>
#entform{text-decoration:none;
box-sizing:border-box;
text-height:max-size;}
div{background-color:white;
border: 5px solid orange;}
tr{border:1px solid red;
	text-decoration:none;
	border-color:#09eab8;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
	
table{border: 2px solid white;}
	
tr:hover{background-color:#09ead2;
	text-decoration:none;}
	
a:hover{background-color:orange;}
	
tr:active{background-color:white;}
</style>
</head>
<body>
<hr></hr>
<div>
Login Unsuccessful: The Username or Password is not recognized!
<br />
<table cellspacing="5" border="2px" bordercolor="#2CF9B6" cellpadding="3px"><tr><td>
<a href="../staff/main_login.php" id="entform">Go back</a>
</td></tr></table>
</div>
<a href="main_login.php"</a>
</body>
</html>
