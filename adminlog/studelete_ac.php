<html>
<head>
<style>
body{background-color:#b0e5fb;
	border:1px;
	border-color:white;
	padding-top:5px;
	padding-left:100px;
	padding-right:100px;}

div{background-color:white;
border:5px solid orange;}

#cover{background-color:white;
border:5px solid orange;
margin-right:0px;}
#top{background-color:#09ead2;
padding-bottom:10px;}
#and{background-color:#CCCCCC;
border:1px solid orange;
padding:2px;
border-radius:5px;}
#and:hover{background-color:white;}
</style>
</head>
<body>
<div>
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<a href="http://www.nilest.org" title="Go to the Institution's website"><center>Nigerian Institute of Leather and Science Technology</center></a>
</div>
</div>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="studrecord"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar 
$id=$_GET['id'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Student's record was deleted Successfully";
echo "<br />";
?>

<br />
<a id='and' href='index.html'>Goto main page</a> |<a id='and' href='studelete.php'>Delete another student</a>
<?php
}

else {
echo "ERROR";
}
?> 

<?php
// close connection 
mysql_close();
?>
</DIV>
</body>
</html>