<?php

//Check if session is not registered, redirect back to main page. 
//Put this code in first line of web page. 

session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
include('../head.html');


?>

<html>
<head>
<style>
div{background-color:white;
border: 5px solid orange;}

#entform{text-decoration:none;
box-sizing:border-box;
text-height:max-size;}
</style>
</head>
<body>
<div>

<style>
#onl{border-radius:10px;
	text-decoration:none;
	
	background-color:orange;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;}
	
#onl:hover{background-color:#09ead2;
	text-decoration:none;}
	
#onl:active{background-color:white;}

tr{
	text-decoration:none;
	
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
<table border="2px">

	<tr id="tr"><!--pane options-->
	<!--Home page contents -->
			<td id="onl"><a href="../../index.html" title="Go to FORUM Home page">Home</a></td>
			<td id="onl"><a href="announcement.php" title="See whether there are new announcements">Announcements</a></td>
			<td id="onl"><a href="suggestion.php" title="Make new suggestions to the department">Suggestion</a></td>
	</tr>
</table>
<hr></hr>
Login Successful
<br />
<table cellspacing="5" border="2px" bordercolor="#2CF9B6" cellpadding="3px"><tr><td>
<a href="main_forum.php" id="entform">Enter forum</a>
</td></tr></table>
</div>
</body>
</html>
