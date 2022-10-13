<?php
session_start();
$a=$_GET["index"];
$index=$a;
echo $index;
unset($_SESSION["pcode"][$index]);
$b=$_SESSION["index"];
$b--;
$_SESSION["index"]=$b;
//print_r($_SESSION["pcode"]);

foreach($_SESSION["pcode"] as $pcode)
{
	
echo $pcode."<br>";	
	
}
header("location:mycart.php");
?>