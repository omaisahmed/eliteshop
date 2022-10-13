<?php
class functions{
function loginclick(){
session_start();
if (isset($_GET["click"]))
{
if ($_GET["click"]=='signup')
{
	echo "<script>";
echo "function somescript() {
    document.getElementById('link1').click();
  }";
  echo "</script>";
}
if ($_GET["click"]=='signin')
{
	echo "<script>";
echo "function somescript() {
    document.getElementById('link1').click();
  }";
  echo "</script>";
}
}
}

function index(){
	if (!isset($_SESSION["pcode"]))
{
	
	$_SESSION["pcode"]=array();
	$_SESSION["pqty"]=array();
	$_SESSION["index"]=0;
	$_SESSION["total"]=0;
}
else
{
	$_SESSION['expire'] =5*60;
}

}

}
?>