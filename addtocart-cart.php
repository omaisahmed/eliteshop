<?php
session_start();
$pcode=$_GET["pcode"];
$i=$_SESSION["index"];
$_SESSION["pcode"][$pcode]=$pcode;
$_SESSION["pqty"][$pcode]=1;
$i++;
$_SESSION["index"]=$i;

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>