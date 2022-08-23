<html>
<head>
<style>
body{background-color:#b0e5fb;
	border:1px;
	border-color:white;
	padding-top:5px;
	padding-left:100px;
	padding-right:100px;}
#main{background-color:white;
border:5px solid orange;
border-radius:10px;}
table{border: 2px solid white;}
#cover{background-color:white;
}
table{border:1px solid orange;
background-color:#CCCCCC;
border-radius:10px;}
#top{background-color:#09ead2;
padding-bottom:10px;
border-radius:10px;}
#and{background-color:#CCCCCC;
border:1px solid orange;
padding:2px;
border-radius:5px;}
#and:hover{background-color:white;}
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
<title>Add Student</title></head>
<body>
<div id="main">
<div id="cover">
<div id="top">
<p><h1><center>Computer Science Department Discussion Forum (CSDDF)</center></h1></p>
<a href="http://www.nilest.org.ng" title="Go to the Institution's website"><center>Nigerian Institute of Leather and Science Technology</a></center>
</div>
</div>
<hr></hr>
<center><strong>Enter student details:</strong></center>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="new_insert_ac1.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td width="71">Surname</td>
<td width="6">:</td>
<td width="301"><input name="surname" type="text" id="surname" required="required"></td>
</tr>
<tr>
<td>Firstname</td>
<td>:</td>
<td><input name="firstname" type="text" id="firstname" required="required"></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="email" type="email" id="email" required="required"></td>
</tr>
<tr>
<td>Phone number</td>
<td>:</td>
<td><input name="phone" type="text" id="phone" required="required"></td>
</tr>
<tr>
<td>Reg. number</td>
<td>:</td>
<td><input name="regnum" type="text" id="regnum" required="required"></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><input name="username" type="text" id="username" required="required"></td>
</tr>


<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<a id="and" href='index.html'>Goto Admin Home page</a>

</div>
</body>
</html>
