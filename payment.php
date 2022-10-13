<html>
<body>
<?php
$a=$_POST["p1"];
if ($a=='Cash')
{
header("location:Login_page/login.php");
}
if ($a=='2Checkout')
{
header("location:transactionform.php");
}
?>

</body>
</html>