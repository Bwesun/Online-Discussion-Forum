

<?php
include('../head.html');
?>
<html>
<head>
<style>
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
	
a:hover{background-color:orange;}
	
tr:active{background-color:white;}
div{background-color:white;
border:5px solid orange;}
input {
color: #5a5854;
background-color: #f2f2f2;
border: 1px solid #bdbdbd;
border-radius: 5px;
background-repeat: no-repeat;
background-position:0;
margin-bottom: 6px;}
input:focus {
background-color: #ffffff;
border: 1px solid #b1e1e4;}
</style>
</head>
<body>
<div>
<table border="2px">

	<tr id="tr"><!--Home page-->
	<!--Home page contents -->
			<td id="onl"><a href="../../index.html" title="Go to FORUM Home page">Home</a></td>
			<td id="onl"><a href="announcement.php" title="See whether there are new announcements">Announcement</a></td>
			<td id="onl"><a href="suggestion.php" title="Make new suggestions to the department">Suggestion</a></td>
	</tr>
</table>
<hr></hr>


<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="forum_answer"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// Get value of id that sent from hidden field 
$id=$_POST['id'];
// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}
// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time 

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);
if($result2){
echo "Answer added Successfully<BR>";
?>
<table cellspacing="5" border="2px" bordercolor="#2CF9B6" cellpadding="3px"><tr><td>
<?php 
echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";
?>
</td></tr></table>
<?php
// If added new answer, add value +1 in reply column 
$tbl_name2="forum_question";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
}
else {
echo "ERROR! answer not added";
}

// Close connection
mysql_close();
?>
</div>
</body>
</html>