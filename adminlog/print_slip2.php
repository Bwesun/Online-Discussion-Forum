<?php

session_start(); 
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="loginstaffs";

mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select db"); 

$sql = "select * from $tbl_name where username = '".$_GET['username']."'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

?>
<html>
<head>
<style>
body{background-color:#b0e5fb;
	border:1px;
	border-color:white;
	padding-top:5px;
	padding-left:100px;
	padding-right:100px;}
#main{background-color:white;
border:5px solid orange;
border-radius:10px;}
a{text-decoration:none;}

#and{background-color:#CCCCCC;
border:1px solid orange;
padding:2px;
border-radius:5px;}
#and:hover{background-color:white;}
.tab{margin-left:10%;
margin-right:10%;
padding:15px;
background-color:#CCCCCC;
border:1px solid orange;
border-radius:10px;}
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
<title>Add Staff</title></head>
<body>
<div id="main">
<?php include('../head.html'); ?>

<div class="tab">
<p>Dear <?php echo $row['name'] ?>, You have been Added Succesfully to the Staffs Forum. Below are your Login Details:
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td width="99">Name</td>
<td width="11">:</td>
<th width="158" align="left"><?php echo $row['name'] ?></th>
</tr>
<tr>
  <td>E-mail</td>
  <td>:</td>
  <th align="left"><?php echo $row['email'] ?>&nbsp;</th>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<th align="left"><?php echo $row['username'] ?></th>
</tr>
<tr>
  <td>Password</td>
  <td>:</td>
  <th align="left"><?php echo $row['password'] ?>&nbsp;</th>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Print" onClick="javascript: window.print()"></td>
</tr>
</table>
</div>
<br />
<a id="and" href='index.html'>Goto Admin Home page</a>  <a id='and' href='addstaff.php'>Add another Staff</a>
</div>
</body>
</html>
