 <html>
<head>
<style>
body{background-color:#b0e5fb;
	border:1px;
	border-color:white;
	padding-top:5px;
	padding-left:100px;
	padding-right:200px;}
	
#cover{background-color:white;
border:5px solid orange;
border-radius:10px;}

#top{background-color:#0bead2;
padding-left:0px;
margin-left:0px;
padding-bottom:10px;
border-radius:10px;}

body{background-color:#b0e5fb;
margin-left:10%;
margin-right:5%}
a:hover{background-color:#7B7E84;
color:#F4EEEE;}
#table{border-color:orange;
background-color:#b0e5fb;
border-radius:10px}

#onl{
	text-decoration:none;
	background-color:orange;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;
	border-radius:10px;}
	
#onl:hover{background-color:#09ead2;
	text-decoration:none;}
	
#onl:active{background-color:white;}
	
a:hover{background-color:orange;}
	
#onl{
	text-decoration:none;
	background-color:orange;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;
	border-radius:10px;}
	
#onl:hover{background-color:#09ead2;
	text-decoration:none;}
	
#onl:active{background-color:white;}

a:hover{background-color:orange;}
#main{border-radius:10px;
background-color:white;
padding-left:15px;
padding-right:10%;
border:5px solid orange;}
td{background-color:#1C71E4;}
</style>
<title>View Announcements</title>
</head>
<body>

<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<a href="http://www.nilest.org" title="Go to the Institution's website"><center>Nigerian Institute of Leather and Science Technology</a></center>
</div>
</div>
<?php
$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name = "project"; // Database name 
$tbl_name = "announ"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
?>
<table id="table">
	<tr id="tr"><!--pane options-->
	<!--Home page contents -->
	<td id="onl"><a href="../../index.html" title="Go to Home page">Home</a></td>
    <td id="onl"><a href="suggestion.php" title="Make Suggestions">Suggestion</a></td>
	</tr>
</table>
<hr></hr>
<div id="main">
<h1>ANNOUNCEMENTS</h1>
<?php
// OREDER BY id DESC is order result by descending
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";

$result = mysql_query($sql);
// Start looping table row
while($rows = mysql_fetch_assoc($result)){
?>
<div ="tab">
<tr>
<td><h3><?php echo $rows['subject']; ?>:</a><BR></h3></td>
<td align="left"><?php echo $rows['announ']; ?></td>
<br />
<br />
<td align="left"><b>Date:<?php echo $rows['datetime']; ?></b></td>
</tr>
<hr />
</div>
<?php
}
mysql_close();
?>
<tr>
<td colspan="6" align="right" bgcolor="#E6E6E6"><a href="main_forum.php"><strong>Goto Main Forum</strong></a></td>
</tr>
</div>
</body>
</html>