<html>
<head>
<style>
<style>
body{margin-left:10%;
margin-right:10%;}
#div{background-color:white;
border: 3px solid orange;
margin-right:10%; 
margin-left:10%;
border-radius:10px;}
#cover{background-color:white;
border:5px solid orange;
margin-right:0px;}
#and{background-color:#CCCCCC;
border:1px solid orange;
padding:2px;
border-radius:5px;}
#and:hover{background-color:white;
border: 4px solid #09ead2;}
table{border:1px solid orange;
background-color:#CCCCCC;
border-radius:10px;}
#top{background-color:#09ead2;
padding-bottom:10px;}
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
<link href="../CSS/Level3_2.css" rel="stylesheet" type="text/css">
<title>Add Staff</title></head>
<body>
<div id="div">
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<center><a href="http://www.nilest.org" title="Go to the Institution's website">Nigerian Institute of Leather and Science Technology</a></center>
</div>
</div>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="addstaff_ac.php">
<table width="100%" border="0" cellpadding="2" cellspacing="1" bordercolor="#00CCFF" bgcolor="#99FF00">
<tr>
<td colspan="3"><strong>Add Staff to the Forum: </strong></td>
</tr>
<tr>
<td width="71" id="onl">Name</td>
<td width="6">:</td>
<td width="301" id="onl"><input name="name" type="text" id="name" required="required"></td>
</tr>
<tr>
<td width="71" id="onl">E-mail</td>
<td width="6">:</td>
<td width="301" id="onl"><input name="email" type="email" id="email" required="required"></td>
</tr>
<tr>
<td width="71" id="onl">Username</td>
<td width="6">:</td>
<td width="301" id="onl"><input name="username" type="text" id="username" required="required"></td>
</tr>

<tr>
<td colspan="3" align="center" ><input type="submit" name="Submit" value="Add"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<a href="index.html" id="and">Goto Admin Home page</a></div>
</body>
</html>