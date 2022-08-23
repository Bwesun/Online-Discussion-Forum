<html>
<head>
<style>
div{background-color:white;
border:5px solid orange;}
table{padding-left:5px;}
</style>
<title>View Topic</title></head>
<?php
include('../head.html');
?>

<style>
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

tr{border:1px solid red;
	text-decoration:none;
	border-color:#09eab8;
	background-color:orange;
	padding-top:15px;
	padding-left:40px;
	padding-bottom:15px;
	padding-right:40px;
	text-decoration:none;}
	
a:hover{background-color:orange;}
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
tr:active{background-color:white;}
</style>
<table >
	<tr id="tr"><!--pane options-->
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
$tbl_name="forum_question"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_assoc($result);
?>

<div>
<table width="700" border="1"  cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#F7E2AC"><strong><?php echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td id="detail" bgcolor="#F8F7F1"><?php echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>By :</strong> <?php echo $rows['name']; ?> <strong>Email : </strong><?php echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Date/time : </strong><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>

<p><h2><b>Replies:</b></h2></p>
<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer" 
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
$i = 1;
?>


<p><table width="500" border="1"  cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">

<tr>
<td width="18%" bgcolor="#F7E2AC"><strong>Name</strong></td>
<td width="5%" bgcolor="#F7E2AC">:</td>
<td width="77%"  bgcolor="#F7E2AC"><?php echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Email</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#F7E2AC"><strong>Answer</strong></td>
<td bgcolor="#F7E2AC">:</td>
<td bgcolor="#F7E2AC"><?php echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><?php echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
</p>


 
<?php
}
$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>

<table width="400" border="1"  cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>

<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45" required="required"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="email" id="a_email" size="45" required="required"></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer" required></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Add answer"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<table cellspacing="5" border="2px" bordercolor="#2CF9B6" cellpadding="3px"><tr><td>
<a href="main_forum.php" title="Click to see other topics">See other topics</a></td></tr></table>
</div>

</html>