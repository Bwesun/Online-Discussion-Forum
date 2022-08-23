<?php
include('head.html');
?>
<html>
<head>
<title>Post Announcement</title>
<style>
#onl{border-radius:10px;
	text-decoration:none;
	border-color:#09eab8;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;}
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
#onl:active{background-color:white;}
tr{	text-decoration:none;
	border-color:#09eab8;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
div{background-color:white;
border:3px solid orange;
border-radius:10px;}
#table{border: 3px solid #09eab8;
border-radius:10px;
background-color:#b0e5fb;}
a:hover{background-color:orange;}
tr:active{background-color:white;}
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
</style>
</head>
<body>
<div>
<table id="table" width="300" align="center" cellpadding="0" cellspacing="1">
<tr>
<td>
<form name="form1" method="post" action="announcement_ac.php">
<table width="100%" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Post Announcments to the Forums</strong></td>
</tr>
<tr>
<td id="onl" width="71">Subject</td>
<td width="6">:</td>
<td width="301"><input name="subject" type="text" id="subject" required="required"></td>
</tr>
<tr>
<td id="onl" >Announcement</td>
<td>:</td>
<td><textarea name="announ" cols="45" rows="3" id="announ" required="required"></textarea></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Post"><input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</form>
</td>
</table>
<a href="index.html">Goto Admin Page</a>
</div>
</body>
</html>