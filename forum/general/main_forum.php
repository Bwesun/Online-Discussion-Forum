
<?php
include('../head.html');


$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name = "project"; // Database name 
$tbl_name = "general_question"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DataBase");

?>
<html>
<head>
<title>Topics</title>
<style>
body{background-color:#b0e5fb;
margin-left:10%;
margin-right:10%}
a:hover{background-color:#7B7E84;
color:#F4EEEE;}
table{background-color:#b0e5fb;}
td{border:1px solid orange;}
#whole{border-radius:10px;}
#onl{text-decoration:none;
	background-color:orange;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;}

tr{background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
		
a:hover{background-color:orange;}
	
tr:active{background-color:white;}
#onl{
	text-decoration:none;
	border-radius:10px;
	background-color:orange;
	padding-top:8px;
	padding-left:40px;
	padding-bottom:8px;
	padding-right:40px;}
	
tr{border-radius:10px;
	text-decoration:none;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
#topics{border-radius:10px;
background-color:white;}	
#topics{border: 5px solid #09ead2;}
	
#onl:hover{background-color:#09ead2;
	text-decoration:none;}
	
a:hover{background-color:orange;}
	
tr:active{background-color:white;}
</style>
</head>
<body>
<div id="whole">
<table id="mentab">
	<tr id="tr"><!--pane options-->
	<!--Home page contents -->
			<td id="onl"><a href="../../index.html" title="Go to FORUM Home page">Home</a></td>
	</tr>
</table>
<hr></hr>

<table id="topics" width="90%" border="3" align="left" cellpadding="3" cellspacing="10" bgcolor="#09ead2">
<tr>

<td width="4%" align="center" bgcolor="#E6E6E6"><h3><strong>#</strong></h3></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><h3><strong>Topic</strong></h3></td>
<td width="4%" align="center" bgcolor="#E6E6E6"><h3><strong>Views</strong></h3></td>
<td width="4%" align="center" bgcolor="#E6E6E6"><h3><strong>Replies</strong></h3></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><h3><strong>Date/Time</strong></h3></td>

</tr>

<?php
$i=1;
// OREDER BY id DESC is order result by descending
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";

$result = mysql_query($sql);
// Start looping table row
while($rows = mysql_fetch_assoc($result)){
?>
<tr>
<td ><?php echo $i++; ?></td>
<td ><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" ><?php echo $rows['view']; ?></td>
<td align="center" ><?php echo $rows['reply']; ?></td>
<td align="center"><?php echo $rows['datetime']; ?></td>
</tr>

<?php
// Exit looping and close connection 
}
mysql_close();
?>

<tr>
<td colspan="5" align="right" bgcolor="#E6E6E6"><a href="create_topic.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</div>
</body>
</html>