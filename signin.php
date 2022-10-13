<?php
session_start();
$a=$_POST["t1"];
$b=$_POST["t2"];
$connect=mysqli_connect("localhost","root","","eliteshoppy");
$sql1="select * from signup where email='$a' and password='$b'";
$result1=$connect->query($sql1);
$row1=$result1->fetch_assoc();
$user=$row1["name"];
$_SESSION["name"]=$user;
if($result1->num_rows>0)
{
header("location:index.php");
}
else
 {
	echo "<script>alert('Invalid Username or Password');</script>"; 
 }

 $sql2="select * from admin where email='$a' and password='$b'";
$result2=$connect->query($sql2);
$row2=$result2->fetch_assoc();
$user=$row2["firstname"];
$_SESSION["firstname"]=$user;
if($result2->num_rows>0)
{
header("location:admin/home.php");
}
else
 {
	echo "<script>alert('Invalid Adminname or Password');</script>"; 
 }
?>