<?php
session_start();
$_SESSION["search"]=$se;
$pcode=$_GET["pcode"];
$i=$_SESSION["index"];
$_SESSION["pcode"][$pcode]=$pcode;
$_SESSION["pqty"][$pcode]=1;
$i++;
$_SESSION["index"]=$i;

//header("location:javascript://history.back()");
header('Location: ' . $_SERVER['HTTP_REFERER']);
//header('Location: searchresult.php?search=$se');
//echo "<script>";
//echo "window.loca";
//echo "</script>";
//header("PHP[SELF]");
//window.history.back();
?>