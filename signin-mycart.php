<?php
session_start();
$a=$_POST["t1"];
$b=$_POST["t2"];
$connect=mysqli_connect("sql301.epizy.com","epiz_23922209","bJ7cyMgjM","epiz_23922209_eliteshop");
$sql="select * from signup where email='$a' and password='$b'";
$result=$connect->query($sql);
$row=$result->fetch_assoc();
$user=$row["name"];
$_SESSION["name"]=$user;
if($result->num_rows>0)
{
header("location:paymentoption.php");
}
else
 {
	echo "<script>alert('Invalid Username or Password');</script>"; 
 }

?>

