<?php
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form id="sform" method="post" action="insert.php" onsubmit="return valiform()">
<table border="2px">
<tr><td>Id:</td>
<td><input type="text" id="id" name="id" placeholder="Your id.." /></td>
</tr>
<tr><td>Name:</td>
<td><input type="text" id="name" name="name" placeholder="Your name.." /></td>
</tr>
<tr><td>User name:</td>
<td><input type="text" id="uname" name="uname" placeholder="Your user name.." /></td>
</tr>
<tr><td>Password:</td>
<td><input type="password" id="pass" name="pass" placeholder="Your password.." /></td>
</tr>
<tr> <td> <input type="submit" id="submit" value="Add User"  /></td></tr>

</table>
</form>
</center>
<script>
function valiform()
{
	var a1=document.forms["sform"]["id"].value;
	var a2=document.forms["sform"]["name"].value;
	var a3=document.forms["sform"]["uname"].value;
	var a4=document.forms["sform"]["pass"].value;
	if(a1==null ||a1=="")
	{
		window.alert(" Id must be field out");
		return  false;
	}
	else if(a2==null ||a2=="")
	{
		window.alert("Name must be field out");
		return  false;
	}
	else if(a3==null ||a3=="")
	{
		window.alert("User name must be field out");
		return  false;
	}
	else if(a4==null ||a4=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
}

</script>
</body>
</html>