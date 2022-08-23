<?php
include('../head.html');
?>
<html>
<head>
<style>
body{margin-left:10%;
margin-right:10%;}
#onl{border:1px solid red;
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

tr{border:1px solid red;
	text-decoration:none;
	border-color:#09eab8;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
	
table{border: 2px solid white;}
	
tr:hover{background-color:#09ead2;
	text-decoration:none;}
div{background-color:white;
border:5px solid orange;}	
a:hover{background-color:orange;}
	
tr:active{background-color:white;}
</style>
</head>
<body>
<div>
<table border="2px">

	<tr id="tr"><!--pane options-->
	<!--Home page contents -->
			<td id="onl"><a href="../../index.html" title="Go to FORUM Home page">Home</a></td>
			<td id="onl"><a href="about.html" title="Know more about the department">News and Events</a></td>
	</tr>
</table>
<hr></hr>

<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="general_question"; // Table name 
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($sql);

if($result){
echo "Topic was added Successfully<BR>";
?>
<table cellspacing="5" border="2px" bordercolor="#2CF9B6" cellpadding="3px"><tr><td>
<?php
echo "<a href=main_forum.php>View topics</a>";
?>
</td></tr></table>
<?php
}
else {
echo "ERROR";
}
mysql_close();
?>
</div>
</body>
</html>