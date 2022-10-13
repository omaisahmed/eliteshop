<?php
session_start();
	require_once 'connect.php';;
$a=$_POST["username"];
$b=$_POST["password"];
	$sql="select * from admin where username='$a' and password='$b'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$admin_name = $row['username'];
$_SESSION["username"]=$admin_name;
if($result->num_rows>0)
{
header("location:home.php");
}
else
 {
	echo "<script>alert('Invalid Username or Password');window.history.back();</script>"; 
 }
?>


