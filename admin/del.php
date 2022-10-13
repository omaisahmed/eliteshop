<!DOCTYPE html>
<?php include("connect.php"); ?>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$id=$_GET["id"];
$sqldel="DELETE from products where id='$id'";
$result=$conn->query($sqldel);

if ($conn->query($sqldel) === TRUE) {
    echo "alert('Item Deleted Successfully')";
} else {
    echo "alert('Deletion Failed')". $conn->error;
}
?>
</body>
</html>