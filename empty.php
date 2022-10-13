<?php
session_start();
unset($_SESSION["pcode"]);
header("location: mycart.php");


?>