<?php
include('../head.html');
?>
<html>
<head>
<title>Add suggestion</title>
<style>
#onl{border-radius:10px;
	text-decoration:none;
	border-color:#09eab8;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;
	background-color:orange;}
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
<body>
<table id="mentab">
	<tr id="tr"><!--pane options-->
	<!--Home page contents -->
			<td id="onl"><a href="../../index.html" title="Go to FORUM Home page">Home</a></td>
			<td id="onl"><a href="announcement.php" title="See whether there are new announcements">Announcement</a></td>
			<td id="onl"><a href="suggestion.php" title="Make new suggestions to the department">Suggestion</a></td>
</table>
<hr></hr>
<div>
<table id="table" width="300" align="center" cellpadding="0" cellspacing="1">
<tr>
<td>
<form name="form1" method="post" action="suggestion_ac.php">
<table width="100%" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Fill in the details below to add suggestions:</strong></td>
</tr>
<tr>
<td width="71">Name</td>
<td width="6">:</td>
<td width="301"><input name="name" type="text" id="name" required="required"></td>
</tr>
<tr>
<td>Reg. Number</td>
<td>:</td>
<td><input name="regnum" type="text" id="regnum" required="required"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td ><input name="email" type="email" id="email" required="required"></td>
</tr>
<td>Suggestions</td>
<td>:</td>
<td><textarea name="suggest" cols="45" rows="3" id="suggest" required></textarea></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"><input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</form>
</td>
</table>
<a href="main_forum.php">Goto forum topics</a>
</div>
</body>
</html>