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
	a{text-decoration:none;}
tr{border:1px solid white;
	text-decoration:none;
	border-color:#09eab8;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
div{background-color:white;
border:5px solid orange;}

#cover{background-color:white;
border:5px solid orange;
margin-right:0px;}
table{border:4px solid #09ead2;}
#top{background-color:#09ead2;
padding-bottom:10px;}
#and{background-color:orange;
border:3px solid #09ead2;}
#and:hover{background-color:white;}
</style>
<title>Insert New Student</title></head>
<body>
<div>
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<center><a href="http://www.nilest.org" title="Go to the Institution's website">Nigerian Institute of Leather and Science Technology</a></center>
</div>
</div>
<?php
$host="localhost";
$username="root";
$password="";
$db_name="project";
$tbl_name="studrecord";

mysql_connect("$host", "$username", "$password")or die("cannot connect to server");
mysql_select_db("$db_name")or die("cannot select db"); 

// Get values from form 
$surname=$_POST['surname'];
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$regnum=$_POST['regnum'];
$_SESSION['username']=$_POST['username'];
$pass=mt_rand();
$password= substr($pass, 1, 5);

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(surname, firstname, email, phone, regnum, username, password)VALUES('$surname', '$firstname', '$email', '$phone', '$regnum', '".$_SESSION['username']."', '$password')";
//echo $sql;
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
$user = $_SESSION['username'];
echo "The student has been successfully added!";
echo "<br />";
echo "<br />";
echo "<a id='and' href='print_slip.php?username=$user'>Print</a>";
echo "<br />";
echo "<br />";
echo "<a id='and' href='New_insert1.php'>Goto previous page</a>";
echo "<br />";
echo "<br />";
echo "<a id='and' href='index.html'>Go to Home</a>";
}
else {
echo "ERROR: The student was not added. Make sure the student's detail is not the same with another student's record that has been added";
echo "<br />";
echo "<br />";
echo "<a id='and' href='index.html'>Go to Home</a>";
echo "<br />";
echo "<br />";
echo "<a id='and' href='New_insert1.php'>Goto previous page</a>";
}
 
// close connection 
mysql_close();
?>


</body>
</html>