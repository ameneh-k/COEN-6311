<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<table border="0" align="center" dir="ltr" height="400" bgcolor="#CCCCCC">
<tr><th colspan="2" bgcolor="#FFCC00"> Registration form  </th> </tr>

<tr> <td> name : </td>
 <td> <input name="name" /> </td></tr>
 
<tr> <td> username :  </td>
 <td> <input name="uname" /> </td></tr>
 
<tr> <td> password :  </td>
 <td> <input name="pass" type="password"/> </td></tr>
 
<tr> <td> confirm password : </td> 
<td> <input name="repass" type="password"/> </td></tr>

<tr> <td> email : </td>
 <td> <input name="email" type="email"/> </td></tr>
 
<tr> <td> enter the code below : </td>
 <td> <input name="cod" type="text"/> </td></tr>
 
<tr> <td colspan="2" align="center">
 <img src="gerafic.php" width="150" /> </td></tr>
 
<tr> <td colspan="2" align="center"><input type="submit" value="  Register  " /> </td></tr>

</table>
</form>
<?php
$name=$_POST['name'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$email=$_POST['email'];
$cod=$_POST['cod'];

if($name && $uname && $pass && $repass && $email)
{
  if($pass == $repass)
   {
	   
if(strtoupper($cod) == strtoupper($_SESSION['rcod']))
{
 $connect=mysql_connect('localhost','root','');
	mysql_select_db('pro96-2',$connect);
	mysql_query("set names utf8");
	
$r0=mysql_query("select * from login where username='$uname'");
if(mysql_num_rows($r0)) 
 {echo 'The user name exists ';}
else
 {
$r=mysql_query("insert into login() values ('' , '$name', '$uname', '$pass', '$email','k')");
 if($r)
	echo '<script>alert("Your registration has been done successfully") </script>';
 }
  }
 else
	echo 'The code you enter is not correct';
 }
else
 echo 'the passwords in the box are not correct or they do not match ';
}

?>
</body>
</html>