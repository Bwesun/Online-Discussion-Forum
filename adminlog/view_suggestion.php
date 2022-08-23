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
border-radius:10px;}#top{background-color:#09ead2;
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
<div>
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

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$count=mysql_num_rows($result);
?>

<table class="tablee" width="900" align="center" cellpadding="5" cellspacing="3">
<tr>
<tr>
<td align="center"><strong>S/No</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Reg. Number</strong></td>
<td align="center"><strong>Suggestion</strong></td>
<td align="center"><strong>E-mail</strong></td>

</tr>

<?php
$i=1;
while($rows=mysql_fetch_assoc($result)){
?>

<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $rows['name'];?></td>
<td><?php echo $rows['regnum']; ?></td>
<td><a href="individual_suggest.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['suggest']; ?></a></td>
<td><?php echo $rows['email']; ?></td>
</tr>
<tr>
<?php
// close while loop 
}

// close connection; 
mysql_close();
?>
</table>
<a id="and" href="index.html">Goto Admin Home page</a>
</div>
</body>
</html>