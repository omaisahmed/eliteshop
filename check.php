<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a=$_POST["pincode"];

$servername="sql301.epizy.com";
$uname="epiz_23922209";
$password="bJ7cyMgjM";
$dbname="epiz_23922209_eliteshop";
$connect=new MySQLi($servername,$uname,$password,$dbname);
$sql="insert into checkout(Pincode) values('$a')";
$result=$connect->query($sql);

header("location:cart.php?click=signin");
?>

</body>
</html>