<html>
<head>
<style>
body{background-color:#b0e5fb;
	border:1px;
	border-color:white;
	padding-top:5px;
	padding-left:100px;
	padding-right:100px;}
	
#and{background-color:#CCCCCC;
border:1px solid orange;
padding:2px;
border-radius:5px;}
div{background-color:white;
border:5px solid orange;}
#and:hover{background-color: white;
border: 4px solid #09ead2;}
#cover{background-color:white;
border:5px solid orange;
margin-right:0px;}
.tablee{border:1px solid orange;
background-color:#CCCCCC;
border-radius:10px;
padding-left:10px;
padding-top:10px;
}
td{border-radius:10px;}
#top{background-color:#09ead2;
padding-bottom:10px;}
a:hover{background-color:#09ead2;}
a{text-decoration:none;}
#oo{text-decoration:none;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;
	border-radius: 10px;
margin-bottom: 6px;}
input{border-radius:5px;
padding-left:10px;
padding-right:10px;
padding-top: 3px;
padding-bottom:3px;}
#oo{text-decoration:none;
	background-color:orange;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;
	border-radius: 10px;
margin-bottom: 6px;}
</style>
<title>View Suggestion</title></head>
<body>
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<a href="http://www.nilest.org" title="Go to the Institution's website"><center>Nigerian Institute of Leather and Science Technology</center></a>
</div>
</div>
<hr>
<table class="table">

	<tr id="oo"><!--pane options-->
	<!--Home page contents -->
			<td id="oo"><a href="index.html" title="Go to FORUM Home page">Home</a></td>
	</tr>
</table>
<hr />
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="suggest"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_assoc($result);
?>

<div class="tablee"">
<h3>SUGGESTION BY FORUM MEMBER</h3>
<table cellspacing="3" cellpadding="10" width="520">
<tr bgcolor="#ACA4A5">
<td><b>Name </b></td>
<td>:</td>
<td><?php echo $rows['name']; ?></td>
</tr>
<tr bgcolor="#B1A9AA">
<td><b>Reg. No </b></td>
<td>:</td>
<td><?php echo $rows['regnum']; ?></td>
</tr>
<tr bgcolor="#ACA4A5">
<td><b>E-mail </b></td>
<td>:</td>
<td><?php echo $rows['email']; ?></td>
</tr>
<tr bgcolor="#B1A9AA">
<td><b>Suggestion </b></td>
<td>:</td>
<td><?php echo $rows['suggest']; ?></td>
</tr>
<tr bgcolor="#ACA4A5">
<td><b>Date/Time </b></td>
<td>:</td>
<td><?php echo $rows['datetime']; ?></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Print" onClick="javascript: window.print()"></td>
</tr>
<tr>
<td colspan="3" align="center"><a href="view_suggestion.php">View Suggestions</a></td>
</tr>

</table>
<?php
// close connection; 
mysql_close();
?>


</div>
</br ><a id="and" href="index.html">Goto Admin Home page</a>
</body>
</html>