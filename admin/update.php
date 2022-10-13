<!DOCTYPE html>
<?php include("connect.php"); ?>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//$a=$_POST["fileToUpload"];
$b=$_POST["pcode"];
$c=$_POST["pname"];
$d=$_POST["pcategory"];
$e=$_POST["pprice"];
$f=$_POST["delprice"];
$g=$_POST["pdescription"];
//$newimg="images/".$a;	
?>
<?php
if(isset($_POST['upload']))
   {
$filename=$_FILES["file"]["name"];
$filesize=$_FILES["file"]["size"];
$fileerror=$_FILES["file"]["error"];
$filetempname=$_FILES["file"]["tmp_name"];
$filetype=$_FILES["file"]["type"];
$filestore="images/".$filename;

if(move_uploaded_file($filetempname,$filestore)){
	echo "Your File Has Been Uploading";
}
else{
	echo "Your File Has Not Been Uploading";
}
}

$sql="UPDATE products set pimage='$filestore',pname='$c',pcategory='$d',pprice='$e',dprice='$f',pdescription='$g' where pcode='$b'";
$result=$conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "alert('Record updated successfully')";
} else {
    echo "alert('Update Failed')". $conn->error;
}

?>
</body>
</html>