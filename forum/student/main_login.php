<html>
<head>
<style>
body{background-color:#b0e5fb;
	border:1px;
	border-color:white;
	padding-top:5px;
	padding-left:100px;
	padding-right:100px;}
	
#cover{background-color:white;
border:5px solid orange;
margin-right:0px;}

#top{background-color:#09ead2;
padding-left:0px;
margin-left:0px;
padding-bottom:10px;}
body{background-color:#b0e5fb;
	border:1px;
	border-color:white;
	padding-top:5px;
	padding-left:20%;
	padding-right:20%;}

#main{background-color:white;
	border:5px solid orange;
	border-radius:10px;}
	
table{borderr:2px solid #1EA8E1;
background-color:#b0e5fb;}
input {
color: #5a5854;
background-color: #f2f2f2;
border: 1px solid #bdbdbd;
border-radius: 5px;
background-repeat: no-repeat;
background-position:0;
margin-bottom: 6px;}
input:focus {
background-color: #ffffff;
border: 1px solid #b1e1e4;}
#edit{background-color:#b0e5fb;
	border:1px solid orange;}
	a:hover{background-color:#FFFFCC}
#tab1{border:1px solid orange;
border-radius:10px;}

.blink {
	-webkit-animation: blink .75s linear infinite;
	-moz-animation: blink .75s linear infinite;
	-ms-animation: blink .75s linear infinite;
	-o-animation: blink .75s linear infinite;
	 animation: blink .75s linear infinite;
}
@-webkit-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-moz-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@-o-keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
@keyframes blink {
	0% { opacity: 1; }
	50% { opacity: 1; }
	50.01% { opacity: 0; }
	100% { opacity: 0; }
}
</style>
<title>Students login</title>
</head>
<body>


<?php include('../../head.html'); ?>
<div id="main">
<table id="tab1" width="300" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td>
<table width="100%" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<h2>Student Login</h2>
For you to access the Students forum, you must Login first with your account details:
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername" required="required"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword" required="required"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<p id="edit" align="center">Don't have an account? Click <a class="blink" href="../how.php">HERE</a> to see how to Sign Up.</p>

<a href="../../index.html">Go to previous page</a>
</div>
</body>
