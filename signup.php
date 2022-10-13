<?php
$a=$_POST["name-signup"];
$b=$_POST["email-signup"];
$c=$_POST["password-signup"];
$d=$_POST["confirmpassword-signup"];

$connect=mysqli_connect("localhost","root","","eliteshoppy");
$sql="insert into signup(Name,Email,Password,Confirmpassword) values('$a','$b','$c','$d')";
$result=$connect->query($sql);


header("location:index.php?click=signup");


?>