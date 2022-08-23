<style>
body{background-color:#b0e5fb;
	border:4px;
	border-radius:10px;
	border-color:white;
	padding-top:5px;
	padding-left:100px;
	padding-right:100px;}
	
#cover{background-color:white;
border:5px solid orange;
margin-right:0px;
border-radius:10px;}
#main{background-color:white;
border: 3px solid #09ead2;
border-radius:10px;}
#top{background-color:#09ead2;
border-radius:10px;
padding-bottom:10px;}
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
	
tr:hover{background-color:#09ead2;
	text-decoration:none;}
	
a:hover{background-color:orange;}
	
tr:active{background-color:white;}
</style>
<title>Add suggestion</title>

</head>
<body>
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<a href="http://www.nilest.org" title="Go to the Institution's website"><center>Nigerian Institute of Leather and Science Technology</a></center>
</div>
</div>
<div id="main">
<table>
	<tr id="tr"><!--pane options-->
	<!--Home page contents -->
	<td id="onl"><a href="../index.html" title="Go to FORUM Home page">Home</a></td>
	<td id="onl"><a href="../announcement.php" title="See whether there are new announcements">Announcement</a></td>
	<td id="onl"><a href="suggestion.php" title="Make new suggestions to the department">Suggestion</a></td>
	</tr>
</table>
<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="suggest"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$regnum=$_POST['regnum'];
$email=$_POST['email'];
$suggest=$_POST['suggest'];

$datetime=date("d/m/y h:i:s");

// Inserting form data into mysql database
$sql="INSERT INTO suggest(name, regnum, email, suggest, datetime)VALUES('$name', '$regnum', '$email', '$suggest', '$datetime')";
//echo $sql;
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Your suggestion was sent successfully";
echo "<BR>";
echo "<a href='suggestion.php'>Back to previous page</a>";
echo "<br />";
echo "<a href='../student/main_forum.php'>Go back to forum</a>";
}

else {
echo "ERROR";
}
?> 
<?php 
// close connection 
mysql_close();
?>
</div>
</body>
</html>