<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 
$tbl_name="studrecord"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// select record from mysql 
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>

<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td colspan="5" bgcolor="#FFFFFF"><strong>DELETE A STUDENT FROM THE FORUM</strong> </td>
</tr>

<tr>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Surname</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Firstname</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Email</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Reg. Num</strong></td>

<td align="center" bgcolor="#FFFFFF">&nbsp;</td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['surname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['firstname']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['email']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['regnum']; ?></td>
<td bgcolor="#FFFFFF"><a href="delete_ac.php?id=<?php echo $rows['id']; ?>">delete</a></td>
</tr>

<?php
// close while loop 
}
?>

</table>

<?php
// close connection; 
mysql_close();
?>
