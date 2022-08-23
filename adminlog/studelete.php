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
table{border:1px solid orange;
background-color:#CCCCCC;
border-radius:10px;}#top{background-color:#09ead2;
padding-bottom:10px;}
a:hover{background-color:#09ead2;}
</style>
<title>Delete a Student Profile</title></head>
<body>
<div>
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<a href="http://www.nilest.org" title="Go to the Institution's website"><center>Nigerian Institute of Leather and Science Technology</a></center>
</div>
</div>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="studrecord"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql 
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
$i=1;
?>

<table width="400" align="center" border="0" cellpadding="5" cellspacing="3">
<tr>
<td colspan="6" bgcolor="#FFFFFF"><strong>DELETE A STUDENT FROM THE FORUM</strong> </td>
</tr>
<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Surname</strong></td>
<td align="center"><strong>Firstname</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Reg. Num</strong></td>

<td align="center">&nbsp;</td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $rows['surname']; ?></td>
<td><?php echo $rows['firstname']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td><?php echo $rows['regnum']; ?></td>
<td><a id="and" href="studelete_ac.php?id=<?php echo $rows['id']; ?>">delete</a></td>
</tr>

<?php
// close while loop 
}
?>

</table>

<?php
// close connection; 
mysql_close();
?>
<a id="and" href="index.html">Goto Admin Home page</a>
</body>
</html>