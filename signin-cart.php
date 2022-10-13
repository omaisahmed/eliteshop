<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$connect=mysqli_connect("localhost","root","","eliteshoppy");
$sql="select * from signup where email='$a' and password='$b'";
$result=$connect->query($sql);
if($result->num_rows>0)
{
header("location:paymentoption.php");
}
else
 {
	echo "<script>alert('Invalid Username or Password');</script>"; 
 }
?>