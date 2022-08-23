<html>
<head>
<title>Create a topic</title>
<style>
table{background-color:white;
border:5px solid orange;}
table{padding-left:5px;}
#onl{border-radius:10px;
	text-decoration:none;
	border-color:#09eab8;
	background-color:orange;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;}
	
#onl:hover{background-color:#09ead2;
	text-decoration:none;}
	
#onl:active{background-color:white;}
#pre{background-color:Orange;
border: 2px solid #09eab8}
#pre:active{background-color:white;}
tr{border-radius:10px;
	text-decoration:none;
	border-color:#09eab8;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
	
table{border: 2px solid white;
border-radius:10px;}
a:hover{background-color:orange;}
	div{background-color:white;
	border:5px solid orange;
	border-radius:10px;}
#onl:active{background-color:white;}
tr{	text-decoration:none;
	border-color:#09eab8;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
a:hover{background-color:orange;}
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

<?php
include('../head.html');
?>
<div>
<table>
	<tr id="tr"><!--pane options-->
	<!--Home page contents -->
		<td id="onl"><a href="../../index.html" title="Go to FORUM Home page">Home</a></td>
	<td id="onl"><a href="announcement.php" title="See whether there are new announcements">Announcement</a><td>
		<td id="onl"><a href="suggestion.php" title="Make new suggestions to the department">Suggestion</a></td>
	</tr>
</table>
<hr></hr>

<table width="400"  bordercolor="#09eab8" border="10" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#E6E6E6"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" required="required" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td>:</td>
<td><input name="name" type="text" id="name" size="50" required="required" /></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="email" type="email" id="email" size="50" required="required" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<a id="pre" href="main_forum.php">Go back</a>
</div>
</body>
</html>