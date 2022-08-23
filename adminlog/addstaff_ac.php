<?php session_start();?>
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
table{border:4px solid #09ead2;}
#top{background-color:#09ead2;
padding-bottom:10px;}
#and{background-color:#CCCCCC;
border:1px solid orange;
padding:2px;
border-radius:5px;}
#and:hover{background-color:white;}
</style>
<title>Add New Staff</title></head>
<body>
<div>
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<a href="http://www.nilest.org" title="Go to the Institution's website"><center>Nigerian Institute of Leather and Science Technology</a></center>
</div>
</div>
<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="loginstaffs";

mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select db"); 

// Get values from form 
$name=$_POST['name'];
$email=$_POST['email'];
$_SESSION['username']=$_POST['username'];
$pass=mt_rand();
$password= substr($pass, 1, 5);

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name, email, username, password)VALUES('$name', '$email', '".$_SESSION['username']."', '$password')";
//echo $sql;
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
$user = $_SESSION['username'];
echo "The Staff has been successfully added!";
echo "<br />";
echo "<br />";
echo "<a id='and' href='addstaff.php'>Goto previous page</a>";
echo "<br />";
echo "<br />";
echo "<a id='and' href='print_slip2.php?username=$user'>Print</a>";
echo "<br />";
echo "<br />";
echo "<a id='and' href='index.html'>Go to Home</a>";
}
else {
echo "ERROR: The student was not added. Make sure the staff's details are not thesame with another student's record that has been added";

echo "<br />";
echo "<br />";
echo "<a id='and' href='index.html'>Go to Home</a>";
echo "<br />";
echo "<br />";
echo "<a id='and' href='addstaff.php'>Goto previous page</a>";
}
 
// close connection 
mysql_close();
?>


</body>
</html>